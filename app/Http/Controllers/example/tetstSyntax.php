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
//

// public function sesionJasa(Request $request)
// {
//     $items = $request->input('sesion_jasa');

//     // dd($items);
    
//     // $idJasa = $items['id_jasa'];

//     // Lakukan query ke database untuk memeriksa apakah id_jasa ada dalam tabel Jasa
//     // $jasa = Jasa::where('id_jasa', $items)->get();

//     $jasa = Jasa::where('id_jasa', $items)->with('layananUtama','layananTambahan')->get();
//     dd($jasa);

//     return view('pages/detailjasa', ['jasa' => $jasa]);

//     // session(['items' => $items]);
//     // Lakukan sesuatu dengan $selectedItem

//     // return view('pages/detailjasa',[ 'items'=>$items]);
// }
// public function tambahItem(Request $request)
//     {
//         // $idTransaksi = Keranjang::max('id_transaksi') + 1;

//         $numericPart = (int) substr(Keranjang::max('id_transaksi'), 1) + 1;
//         $idTransaksi = "D" . str_pad($numericPart, 3, '0', STR_PAD_LEFT);

//         // dd($idTransaksi);
//         $layananUtama = $request->input('layananUtama');

//         $layananTambahan = $request->input('layananTambahan');

//         $layUt = layanan_utama::where('id_LU', $layananUtama)->first();

//         $layTb = layanan_tambahan::where('id_LT', $layananTambahan)->first();

//         // $combinedResults = $layUt->merge($layTb);
//         $combinedResults = [
//             'layUt' => $layUt,
//             'layTb' => $layTb,
//         ];
//         // dd($combinedResults);

//         $totalPrice = $layUt->price + $layTb->price;
//         // Lakukan apa pun yang perlu Anda lakukan dengan total harga
//         // dd($combinedResults);
//         // $layUtPrice = layanan_utama::where('id_LU', $layananUtama)->sum('price');
//         // $layTbPrice = layanan_tambahan::where('id_LT', $layananTambahan)->sum('price');

//         // $totalPrice = $layUtPrice + $layTbPrice;

//         // Output atau gunakan $totalPrice sesuai kebutuhan Anda
//         // dd($layUtPrice,$layTbPrice,$totalPrice);

//         $data = [
//             'id_transaksi' => $idTransaksi,
//             'layanan_utama' => $layananUtama,
//             'layanan_tambahan' => $layananTambahan,
//             'date' => $request->input('date'),
//             'time' => $request->input('time'),
//             'alamat' => $request->input('alamat'),
//             'ciriRumah' => $request->input('ciriRumah'),
//             'note' => $request->input('note'),
//         ];



//         // dd($data);
//         // dd($data,$combinedResults);
//         session(['data' => $data, 'combinedResults' => $combinedResults, 'totalPrice'=> $totalPrice]);
//         return view('pages/pesan', ['data' => $data, 'combinedResults' => $combinedResults, 'totalPrice'=> $totalPrice]);
// //     }
// public function showItem()
// {
//     $dataTransaksi = Transaksi::select('*')
//         ->get();

//     $jasaId = jasa::pluck('id_jasa')->toArray();
//     $layananUtama = Transaksi::pluck('layanan_utama')->toArray();
//     $layananTambahan = Transaksi::pluck('layanan_tambahan')->toArray();

//     $layUt = layanan_utama::whereIn('id_LU', $layananUtama)->get();
//     $layTb = layanan_tambahan::whereIn('id_LT', $layananTambahan)->get();

//     $jasa = Transaksi::where('id_jasa', $jasaId)->with('jasa')->get();
//     dd($jasaId);

//     $combine = [
//         'dataTransaksi' => $dataTransaksi,
//         'jasa' => $jasa,
//     ];

//     return view('/pages/transaksi', [
//         'dataTransaksi' => $dataTransaksi,
//         'jasa' => $jasa,
//         'layUt' => $layUt,
//         'layTb' => $layTb,
//     ]);
// }

}
