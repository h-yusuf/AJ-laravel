<?php

namespace App\Http\Controllers;

use App\Models\jasa;
use App\Models\User;
use Illuminate\Http\Request;

class showdata extends Controller
{
    public function showCard(){
        $datajasa = Jasa::select('*')->get()->toArray();

        return view('partials.card',['datajasa' -> $datajasa]);
    }
    public function showUser(){
        $dataUser = User::select('*')->get();

        return view('admin.users',['dataUser' -> $dataUser]);
    }

}
