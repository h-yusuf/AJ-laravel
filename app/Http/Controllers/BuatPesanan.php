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
    public function index()
    {
        return view('detailjasa');
    }
    public function sesionJasa(Request $request)
    {
        $items = $request->input('sesion_jasa');

        $jasa = Jasa::where('idJasa', $items)->with('layananUtama', 'layananTambahan')->get();
        // dd($jasa);

        return view('pages/detailjasa', ['jasa' => $jasa]);

    }


    public function tambahItem(Request $request)
    {
        // $idTransaksi = Transaksi::max('id_transaksi') + 1;

        $numericPart = (int) substr(Transaksi::max('id_transaksi'), 1) + 1;
        $idTransaksi = "D" . str_pad($numericPart, 3, '0', STR_PAD_LEFT);

        $layananUtama = $request->input('layananUtama');
        $layananTambahan = $request->input('layananTambahan');

        // intinya kodingan di bawah buat boolean ke DB klo id bener" ke select

        $layUt = layanan_utama::where('id_LU', $layananUtama)->first();
        $layTb = layanan_tambahan::where('id_LT', $layananTambahan)->first();

        // $combinedResults = $layUt->merge($layTb);

        $totalPrice = $layUt->price + $layTb->price;

        $combinedResults = [
            'layUt' => $layUt,
            'layTb' => $layTb,
        ];

        // dd($combinedResults);

        $id_user = Auth::user()->id;
        // dd($artikels);
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
        // dd($data);  
        session(['data' => $data, 'combinedResults' => $combinedResults, 'totalPrice' => $totalPrice]);
        // dd($data);
        return view('pages/pesan', ['data' => $data, 'combinedResults' => $combinedResults, 'totalPrice' => $totalPrice]);
    }

    
    public function simpanData(Request $request)
    {

        $data = $request->except('_token');

        Transaksi::create($data);
        return redirect()->route('showItem');
    }

    public function showItem(Request $request)
    {
        $dataTransaksi = Transaksi::with('jasa','jasa.layananUtama', 'jasa.layananTambahan')->get();

        return view('/pages/transaksi', [
            'dataTransaksi' => $dataTransaksi,

        ]);
    }
    

    public function deleteItem(Request $request)
    {
        $itemID = $request->input('item_id');
        // dd($itemID);
        Transaksi::where('id_transaksi', $itemID)->delete();
        return redirect()->route('showItem')->with('success', 'Item has been deleted successfully.');
    }

    


}
