<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Http\Requests\Auth\LoginRequest;

class ProfileController extends Controller
{
    /**
     * Menampilkan form profil pengguna.
     */
    public function create(): View
    {
        return view('index');
    }

    /**
     * Mendaftarkan pengguna baru.
     */
    public function register(Request $request): RedirectResponse
    {
        // Validasi data pendaftaran
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Membuat pengguna baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Membuat event untuk pendaftaran pengguna
        event(new Registered($user));

        // Mengarahkan kembali ke halaman utama dengan pesan sukses
        return redirect()->route('index')->with('succes-register', 'Registration successful. Please login.');
    }

    /**
     * Masuk ke akun pengguna.
     */
    public function login(LoginRequest $request): RedirectResponse
    {
        // Memvalidasi login pengguna
        $request->authenticate();

        // Me-regenerate session
        $request->session()->regenerate();

        // Mengarahkan pengguna ke halaman yang sesuai berdasarkan peran pengguna
        if ($request->input('email') == 'admin@gmail.com') {
            return redirect()->route('showJasa')->with('succes', 'Login admin has successfully');
        }

        return redirect()->route('home')->with('succes','Login successfuly');
    }

    /**
     * Keluar dari sesi yang terautentikasi.
     */
    public function logout(Request $request): RedirectResponse
    {
        // Melakukan logout pengguna
        Auth::guard('web')->logout();

        // Meng-invalidate session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Mengarahkan kembali ke halaman utama dengan pesan logout
        return redirect('/')->with('logout', 'youre account has logout');
    }
}
