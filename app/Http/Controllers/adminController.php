<?php

namespace App\Http\Controllers;

use App\Models\jasa;
use App\Models\layanan_tambahan;
use App\Models\layanan_utama;
use Illuminate\Http\Request;

class adminController extends Controller
{
    // Menampilkan halaman produk
    public function index()
    {
        return view('product');
    }

    // Menambahkan data jasa baru
    public function tambahJasa(Request $request)
    {
        // Mendapatkan ID Jasa terakhir dan menambahkan 1
        $idJasa = jasa::max('idJasa') + 1;

        // Menyiapkan data untuk disimpan
        $data = [
            'idJasa' => $idJasa,
            'img_jasa' => $request->input('productImg'),
            'product_name' => $request->input('productName'),
            'categories' => $request->input('kategory'),
            'id_LU' => $request->input('utama'),
            'id_LT' => $request->input('tambahan'),
            'location' => $request->input('lokasi'),
        ];

        // Menyimpan data jasa baru
        jasa::create($data);

        // dd data buat nampilin respon dari variable tertentu kyk consol.log() di js gitu lah
        
        // dd($data);
        
        return redirect()->route('showJasa');
    }

    // Menampilkan form edit untuk jasa tertentu
    public function editJasa(string $idJasa)
    {
        $jasa = jasa::findOrFail($idJasa);
        return view('admin.update', compact('jasa'));
    }

    // Memperbarui data jasa
    public function update(Request $request, string $idJasa)
    {
        $jasa = jasa::findOrFail($idJasa);
        $jasa->update([
            'img_jasa' => $request->input('productImg'),
            'product_name' => $request->input('productName'),
            'categories' => $request->input('kategory'),
            'id_LU' => $request->input('utama'),
            'id_LT' => $request->input('tambahan'),
            'location' => $request->input('lokasi'),
        ]);

        // Mengarahkan kembali ke halaman TRANSAKSI
        return redirect()->route('showJasa');
    }

    // Menampilkan semua data jasa beserta layanan utama dan tambahan
    public function showJasa()
    {
        $datajasa = Jasa::with('layananUtama', 'layananTambahan')->get();
        $dataLU = layanan_utama::all();
        $dataLT = layanan_tambahan::all();

        return view('admin.product', [
            'datajasa' => $datajasa,
            'dataLU' => $dataLU,
            'dataLT' => $dataLT
        ]);
    }

    // Menghapus data jasa berdasarkan ID
    public function deleteJasa(Request $request)
    {
        $itemID = $request->input('item_id_rm');
        jasa::where('idJasa', $itemID)->delete();

        // Mengarahkan kembali ke halaman TRANSAKSI dengan pesan sukses
        return redirect()->route('showJasa')->with('success', 'Item has been deleted successfully.');
    }
}
