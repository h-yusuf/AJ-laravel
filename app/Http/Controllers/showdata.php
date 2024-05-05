<?php

namespace App\Http\Controllers;

use App\Models\jasa;
use App\Models\User;
use Illuminate\Http\Request;

class showdata extends Controller
{
    /**
     * Menampilkan data jasa dalam bentuk card.
     */
    public function showCard(){
        // Mengambil semua data jasa dari database
        $datajasa = Jasa::select('*')->get()->toArray();

        // Menampilkan data jasa ke card user
        
        return view('partials.card',['datajasa' -> $datajasa]);
    }

    /**
     * Menampilkan data pengguna. tapi iki rung tak tampilke datane 
     */
    public function showUser(){
        // Mengambil semua data pengguna dari database
        $dataUser = User::select('*')->get();

        // Menampilkan data pengguna dalam view admin.users
        return view('admin.users',['dataUser' -> $dataUser]);
    }
}
