<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjang;

class BuatPesanan extends Controller
{
    public function index()
    {
        return view('detailjasa');
    }
    public function tambahItem(Request $request)
    {
        $data = [
            'layanan_utama' => $request->input('layananUtama'),
            'layanan_tambahan' => $request->input('layananTambahan'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'alamat' => $request->input('alamat'),
            'ciriRumah' => $request->input('ciriRumah'),
            'note' => $request->input('note'),
        ];

        session(['data' => $data]);

        return view('/pages/pesan', ['data' => $data]);
    }

    public function simpanData(Request $request)
    {
        $data = $request->except('_token');


        $item = Keranjang::create($data);

        $idTransaksi = $item->id_transaksi;

        $data['id_transaksi'] = $idTransaksi;

        return redirect()->route('showItem');
 
    }

    public function showItem()
    {

        $dataKeranjang = Keranjang::select('*')
            ->get();

        // dd($dataKeranjang);

        return view('/pages/transaksi', ['dataKeranjang' => $dataKeranjang]);
    }

    public function deleteItem(Request $request)
    {
        $itemID = $request->input('item_id');

        // dd($itemID);

        Keranjang::where('id_transaksi', $itemID)->delete();

        return redirect()->route('showItem')->with('success', 'Item has been deleted successfully.');
    }

}
