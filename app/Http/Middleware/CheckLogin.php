<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class CheckLogin
{
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah pengguna telah login
        if (Auth::check()) {
            return $next($request);
            // return redirect()->away('http://127.0.0.1:8000/home')->with('succes','Login succes');

        }
        // if(Session::get('succes')){
        //     return redirect()->away('http://127.0.0.1:8000/home')->with('succes','Login succes');
        // };

        // Jika tidak, arahkan ke halaman login
        return redirect('/')->with('warning', 'You need to login first.');
    }
}

