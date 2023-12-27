<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjang;

class BuatPesanan extends Controller
{
    // protected $additem;
    // public function __construct()
    // {
    //     $this->additem = new Keranjang(); 
    // }
    public function index(){
		return view('detailjasa');
	}

    // public function tambahItem(Request $request)
    // {
    //     // $layanan_utama = $request->input('layananUtama');
    //     // $layanan_tambahan = $request->input('layananTambahan');
    //     // $date = $request->input('date');
    //     // $time = $request->input('time');
    //     // $alamat = $request->input('alamat');
    //     // $ciriRumah = $request->input('ciriRumah');
    //     // $note = $request->input('note');

    //     $data = [
    //         'layanan_utama' => $request->input('layananUtama'),
    //         'layanan_tambahan' => $request->input('layananTambahan'),
    //         'date' => $request->input('date'),
    //         'time' => $request->input('time'),
    //         'alamat' => $request->input('alamat'),
    //         'ciriRumah' => $request->input('ciriRumah'),
    //         'note' => $request->input('note'),
    //     ];
        
    //     // Test data
    //     // dd($data);
        
    //     Keranjang::create($data);
    //     $dataKeranjang = Keranjang::latest('updated_at')->get();

    //     return view('/pages/pesan', ['dataKeranjang' => $dataKeranjang]);
    //     // return redirect('/test')->with('success', 'Registration successful. Please login.');

    //     // return redirect()->away('http://127.0.0.1:8000/pesan')->with('success', 'Registration successful. Please login.');

    // }

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

    Keranjang::create($data);


    // $dataKeranjang = Keranjang::select('*')
    // ->get();
    //     // dd($dataKeranjang);
        
    //     return view('/pages/transaksi', ['dataKeranjang' => $dataKeranjang]);

        // $dataKeranjang = $this->showItem();

        // $dataKeranjang = Keranjang::latest()->paginate(5);


        // return view('/pages/transaksi', ['dataKeranjang' => $dataKeranjang]);
    return view('/pages/transaksi');

        // return redirect()->away('http://127.0.0.1:8000/transaksi')->with('success', 'Registration successful. Please login.');
    // return redirect('/pesan')->with('success', 'Data berhasil disimpan!');
}

    public function showItem()
    {
//         $dataKeranjang = Keranjang::latest()->paginate(5);

// //render view with dataKeranjang
// return view('/pages/transaksi', compact('dataKeranjang'));


        $dataKeranjang = Keranjang::select('*')
        ->get();
        // dd($dataKeranjang);
        
        return view('/pages/transaksi', ['dataKeranjang' => $dataKeranjang]);
        // return Keranjang::select('*')->get();
    }
    

}
