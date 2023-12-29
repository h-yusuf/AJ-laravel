<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjang;

class testSyntax extends Controller
{
    // protected $additem;
    // public function __construct()
    // {
    //     $this->additem = new Keranjang(); 
    // }
    public function index()
    {
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




    public function simpanData(Request $request)
    {
        $data = $request->except('_token');


        $item = Keranjang::create($data);

        $idTransaksi = $item->id_transaksi;

        // Tambahkan ID transaksi ke dalam data

        $data['id_transaksi'] = $idTransaksi;

        // $dataKeranjang = Keranjang::select('*')
        // ->get();
        // dd($dataKeranjang);

        return redirect()->route('showItem');
        // return view('/pages/transaksi', ['dataKeranjang' => $dataKeranjang]);

        // $dataKeranjang = $this->showItem();

        // $dataKeranjang = Keranjang::latest()->paginate(5);


        // return view('/pages/transaksi', ['dataKeranjang' => $dataKeranjang]);
        // return view('/pages/transaksi');

        // return redirect()->away('http://127.0.0.1:8000/transaksi')->with('success', 'Registration successful. Please login.');
        // return redirect('/pesan')->with('success', 'Data berhasil disimpan!');
    }

//     public function showItem()
//     {
//         //         $dataKeranjang = Keranjang::latest()->paginate(5);

//         // //render view with dataKeranjang
// // return view('/pages/transaksi', compact('dataKeranjang'));


//         // return Keranjang::select('*')->get();
//     }
    //     public function deleteItem($id)
//     {

    //         Keranjang::table('Keranjang')->where('id_transaksi', $id)->delete();
// return redirect('/transaksi')->with('status', 'Data Siswa Berhasil DiHapus');
//     }

// public function login(Request $request)
// {
//     $email = $request->input('email');
//     $password = $request->input('password');

//     $user = User::where('email', $email)->first();


//     if ($user && sha1($password) == $user->password ) {
//         // Password is correct
//         $user = Auth::user();
        
//         $userData = [
//             'email' => $user->email,
//             'id_user' => $user->id_user,
//         ];

//         Session::put('LoggedUserData', $userData);
//         return redirect()->route('admin.home')->with('succes','Login successfuly');

//     }
//     else{
//         // $error_msg = "Login failed. Please check your email and password.";
//         // echo "<script> window.location.href='http://127.0.0.1:8000/';alert('$error_msg');</script>";

//         return redirect()->route('login_i')->with('failed','Login failed. Please check your email and password');

//         // return redirect()->away('http://127.0.0.1:8000/')->with('failed','Login failed. Please check your email and password');
//     }
// }
// public function login(Request $request)
// {
//     $request->validate([ 
//         'login' => 'required', 
//         'password' => 'required'
//     ]); 

//     dd('$request');

//     if(Auth::attempt($request->only('login', 'password'))){ 
//         return redirect('admin.home'); 
//     } 

//     // return back()->withInput()->withErrors([ 
//     //     'login' => 'wrong login' 
//     // ]); 
// }

}
