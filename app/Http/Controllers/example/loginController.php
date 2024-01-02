<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }
    public function index()
    {
        return view('index');
    }

public function login(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');

    $user = User::where('email', $email)->first();

    // dd($user);

    // $user = Auth::user();
    if ($user && sha1($password) == $user->password ) {
        // Password is correct
        
        $userData = [
            'id_user' => $user->id_user,
            'email' => $user->email,
            'password' => $user->password,
        ];

        // dd($userData);

        Session::put('LoggedUserData', $userData);
        return redirect()->route('home')->with('succes','Login successfuly');

    }
    else{
        return redirect()->route('login_i')->with('failed','Login failed. Please check your email and password');
    }
}
    public function register(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => sha1($request->input('password')),
        ];

        User::create($data);

        return redirect()->route('login_i')->with('succes-register', 'Registration successful. Please login.');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login_i')->with('logout', 'youre account has logout');
    }

}