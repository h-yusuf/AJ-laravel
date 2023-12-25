<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    protected $userModel;

       public function __construct()
    {
        $this->userModel = new User(); // Ganti dengan model User yang sesuai
    }
	public function index(){
		return view('index');
	}



    public function prosesLogin(Request $request)
    {
		// dd($request->all());
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();

        if ($user && sha1($password) == $user->password) {
            // Password is correct
            $userData = [
                'email' => $user->email,
                // 'id_user' => $user->id_user,
            ];

            Session::put('LoggedUserData', $userData);

            // $succes_msg = "Login succes. ";
            // echo "<script>window.location.href='http://127.0.0.1:8000/home';alert('$succes_msg'); </script>";
            return redirect()->away('http://127.0.0.1:8000/home')->with('succes','Login succes');

        }
        else{
            // $error_msg = "Login failed. Please check your email and password.";
            // echo "<script> window.location.href='http://127.0.0.1:8000/';alert('$error_msg');</script>";
            return redirect()->away('http://127.0.0.1:8000/')->with('failed','Login failed. Please check your email and password');
        }
}
public function prosesRegister(Request $request)
{
    $data = [
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => sha1($request->input('password')),
        // Anda bisa menambahkan kolom lain sesuai kebutuhan
    ];

    // Simpan data ke dalam tabel users
    User::create($data);

    // Tambahkan pesan sukses ke sesi dan arahkan ke halaman login
    return redirect()->away('http://127.0.0.1:8000/')->with('success', 'Registration successful. Please login.');
}


public function home()
{
    // Pastikan pengguna telah login sebelum memproses halaman
    if (Auth::check()) {
        // Proses halaman atau tampilkan view yang sesuai
        return view('home');
    }

    // Jika pengguna belum login, mereka seharusnya tidak bisa mencapai halaman ini
    // Namun, Anda bisa menambahkan logika tambahan jika diperlukan
    return redirect('/')->with('warning', 'You need to login first.');
}

}