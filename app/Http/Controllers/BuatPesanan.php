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
        // $idTransaksi = Keranjang::max('id_transaksi') + 1;
        $numericPart = (int)substr(Keranjang::max('id_transaksi'), 1) + 1;
        $idTransaksi = "D" . str_pad($numericPart, 3, '0', STR_PAD_LEFT);
        // dd($idTransaksi);
        $data = [
            'id_transaksi' => $idTransaksi,
            'layanan_utama' => $request->input('layananUtama'),
            'layanan_tambahan' => $request->input('layananTambahan'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'alamat' => $request->input('alamat'),
            'ciriRumah' => $request->input('ciriRumah'),
            'note' => $request->input('note'),
        ];
        session(['data' => $data]);
        // dd($data);
        return view('/pages/pesan', ['data' => $data]);
    }

    public function simpanData(Request $request)
    {
        $data = $request->except('_token');
        $item = Keranjang::create($data);
        // dd($item);
        return redirect()->route('showItem',$item);

        // return redirect()->route('showItem');

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
