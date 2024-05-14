<?php

namespace App\Http\Controllers;

use App\Models\jasa;
use App\Models\layanan_tambahan;
use App\Models\layanan_utama;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;

class BuatPesanan extends Controller
{
    // Menampilkan halaman detail jasa
    public function index()
    {
        return view('detailjasa');
    }

    // Menyimpan sesi jasa yang dipilih
    public function sesionJasa(Request $request)
    {
        $items = $request->input('sesion_jasa');

        $jasa = Jasa::where('idJasa', $items)->with('layananUtama', 'layananTambahan')->get();

        return view('pages/detailjasa', ['jasa' => $jasa]);
    }

    // Menambahkan item transaksi
    public function tambahItem(Request $request)
    {
        // Membuat ID transaksi baru dengan ngambil data id max kemudia +1 seperti auto increment tapi manual :v
        $numericPart = (int) substr(Transaksi::max('id_transaksi'), 1) + 1;
        $idTransaksi = "D" . str_pad($numericPart, 3, '0', STR_PAD_LEFT);

        // Mendapatkan data layanan utama dan tambahan yang dipilih
        $layananUtama = $request->input('layananUtama');
        $layananTambahan = $request->input('layananTambahan');

        // Mendapatkan data layanan utama dan tambahan dari database
        $layUt = layanan_utama::where('id_LU', $layananUtama)->first();
        $layTb = layanan_tambahan::where('id_LT', $layananTambahan)->first();

        // Menghitung total harga
        $totalPrice = $layUt->price + $layTb->price;

        // Menggabungkan hasil layanan utama dan tambahan
        $combinedResults = [
            'layUt' => $layUt,
            'layTb' => $layTb,
        ];

        // Mendapatkan ID pengguna yang sedang login
        $id_user = Auth::user()->id;

        // Menyiapkan data transaksi
        $data = [
            'id_transaksi' => $idTransaksi,
            'id_user' => $id_user,
            'idJasa' => $request->input('idJasa'),
            'layanan_utama' => $layananUtama,
            'layanan_tambahan' => $layananTambahan,
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'alamat' => $request->input('alamat'),
            'ciriRumah' => $request->input('ciriRumah'),
            'note' => $request->input('note'),
            'price' => $totalPrice,
        ];

        // Menyimpan data transaksi dalam sesi
        session(['data' => $data, 'combinedResults' => $combinedResults, 'totalPrice' => $totalPrice]);

        return view('pages/pesan', ['data' => $data, 'combinedResults' => $combinedResults, 'totalPrice' => $totalPrice]);
    }

    // Menyimpan data transaksi ke database
    public function simpanData(Request $request)
    {
        $data = $request->except('_token');

        Transaksi::create($data);
        return redirect()->route('showItem');
    }

    // Menampilkan semua item transaksi
    public function showItem(Request $request)
    {
        $dataTransaksi = Transaksi::with('jasa','jasa.layananUtama', 'jasa.layananTambahan')->get();

        return view('/pages/transaksi', [
            'dataTransaksi' => $dataTransaksi,
        ]);
    }

    // Menghapus item transaksi
    public function deleteItem(Request $request)
    {
        $itemID = $request->input('item_id');

        Transaksi::where('id_transaksi', $itemID)->delete();
        return redirect()->route('showItem')->with('success', 'Item has been deleted successfully.');
    }
}
