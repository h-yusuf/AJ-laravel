<?php

namespace App\Http\Controllers;

use App\Models\jasa;
use App\Models\layanan_tambahan;
use App\Models\layanan_utama;
use Illuminate\Http\Request;


class adminController extends Controller
{
    public function index()
    {
        return view('product');
    }
    public function tambahJasa(Request $request)
    {
        $idJasa = jasa::max('idJasa') + 1;
        // dd('dsa');
        // $numericPart = (int)substr(jasa::max('id_jasa'), 1) + 1;
        // $idJasa = "J" . str_pad($numericPart, 3, '0', STR_PAD_LEFT);
        // dd($idJasa);
        $data = [
            'idJasa' => $idJasa,
            'img_jasa' => $request->input('productImg'),
            'product_name' => $request->input('productName'),
            'categories' => $request->input('kategory'),
            'id_LU' => $request->input('utama'),
            'id_LT' => $request->input('tambahan'),
            'location' => $request->input('lokasi'),

        ];

        jasa::create($data);
        // dd($data);
        return redirect()->route('showJasa');
    }

    // edit out popup

    public function editJasa(string $idJasa)
    {
        $jasa = jasa::findOrFail($idJasa);
        // dd($jasa);
        return view('admin.update', compact('jasa'));

    }
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
        // dd($jasa);

        return redirect()->route('showJasa');
    }

    public function showJasa()
    {
        $datajasa = Jasa::with('layananUtama', 'layananTambahan')->get();
        $dataLU = layanan_utama::all();
        $dataLT = layanan_tambahan::all();
        // dd($datajasa);

        return view('admin.product', [
            'datajasa' => $datajasa
            ,
            'dataLU' => $dataLU
            ,
            'dataLT' => $dataLT
        ]);
    }

    public function deleteJasa(Request $request)
    {
        $itemID = $request->input('item_id_rm');
        // dd($itemID);
        jasa::where('idJasa', $itemID)->delete();
        return redirect()->route('showJasa')->with('success', 'Item has been deleted successfully.');
    }

}
