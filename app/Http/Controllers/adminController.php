<?php

namespace App\Http\Controllers;

use App\Models\jasa;
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

    public function editJasa(Request $request)
{
    // Ambil data jasa berdasarkan ID
    $itemID = $request->input('item_id_edit');

    dd($itemID);
    // Tampilkan halaman edit dengan membawa data jasa
    return redirect()->route('updateJasa',$itemID);
}
    public function updateJasa(Request $request, $idJasa ){

        $request->validate([
            'productImg' => 'required',
            'productName' => 'required',
            'kategory' => 'required',
            'utama' => 'required',
            'tambahan' => 'required',
            'lokasi' => 'required',
        ]);

        $jasa = jasa::findOrFail($idJasa);

        $jasa->update([
            'img_jasa' => $request->input('productImg'),
            'product_name' => $request->input('productName'),
            'categories' => $request->input('kategory'),
            'id_LU' => $request->input('utama'),
            'id_LT' => $request->input('tambahan'),
            'location' => $request->input('lokasi'),
        ]);
        return redirect()->route('showJasa')->with('success', 'Jasa berhasil diupdate.');
    }
    public function showJasa()
    {
        $datajasa = Jasa::with('layananUtama', 'layananTambahan')->get();
        // dd($datajasa);
        return view('admin.product', ['datajasa' => $datajasa]);
    }

    public function deleteJasa(Request $request)
    {
        $itemID = $request->input('item_id_rm');
        // dd($itemID);
        jasa::where('idJasa', $itemID)->delete();
        return redirect()->route('showJasa')->with('success', 'Item has been deleted successfully.');
    }

}
