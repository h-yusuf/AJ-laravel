<?php

namespace App\Http\Controllers;

// use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    protected $userModel;

    // public function __construct()
    // {
    //     $this->userModel = new User(); // Ganti dengan model User yang sesuai
    // }

    // public function index()
    // {
    //     if (Session::has('LoggedUserData')) {
    //         return redirect()->route('produk.index'); // Sesuaikan dengan nama route produk
    //     } else {
    //         $error_msg = session('msg', '');

    //         return view('login.form', ['error_msg' => $error_msg]);
    //     }
    // }

	    // public function prosesLogin(Request $request){
    //     $request->validate([
    //         'email'     => 'required',
    //         'password'  => 'required'
    //     ]);

    //     $admin = [
    //         'email' => $request->email,
    //         'password' => $request->password,
            
    //     ];
    //     if(Auth::attempt($admin)){
    //         return redirect()->route('/home');
    //     }
    //     else{
    //         $error_msg = "Login failed. Please check your email and password.";
    //         echo "<script>alert('$error_msg'); window.location.href='http://127.0.0.1:8000/';</script>";
    //     }
    // }


// 	public function index(){
// 		return view('index');
// 	}
//     public function prosesLogin(Request $request)
//     {
// 		dd($request->all());
//         $email = $request->input('email');
//         $password = $request->input('password');

//         $validasi = $this->userModel
//             ->where('email', $email)
//             ->where('password', sha1($password))
//             ->first();

//         if ($validasi === null) {
//             $pesan = 'Kesalahan : Data pengguna tidak ada';
//             session()->flash('msg', $pesan);

//             return redirect()->route('/'); // Sesuaikan dengan nama route login
//         } else {
//             $userData = [
//                 'nama' => $validasi['nama'],
//                 'email' => $validasi['email'],
//                 'id_user' => $validasi['id_user'],
//             ];

//             Session::put("LoggedUserData", $userData);

//             $dataUpdate = ['last_login' => now()];

//             $updateLogin = $this->userModel->where('id_user', $validasi['id_user'])->update($dataUpdate);

//             return redirect()->route('/home'); // Sesuaikan dengan nama route produk
//         }
//     }
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
