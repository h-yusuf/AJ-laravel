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
        $idTransaksi = sprintf("%03d", Keranjang::max('id_transaksi') + 1);
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

    public function editPesanan($id)
    {
        $pesanan = Keranjang::findOrFail($id);

        return view('/pages/editpesan', ['pesanan' => $pesanan]);
    }

    public function updateAlamat(Request $request, $id)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'alamat' => 'required|string|max:255',
            // Sesuaikan dengan aturan validasi lainnya
        ]);

        // Memperbarui alamat dalam tabel 'keranjang' berdasarkan ID
        Keranjang::where('id', $id)
            ->update(['alamat' => $request->input('alamat')]);

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('rute_yang_diinginkan')
            ->with('success', 'Alamat pesanan berhasil diperbarui.');
    }



}
