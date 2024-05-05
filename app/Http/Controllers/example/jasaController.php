<?php

namespace App\Http\Controllers;
use App\Models\jasa;

use Illuminate\Http\Request;

class jasaController extends Controller
{
    public function index()
    {
        return view('/partials/card');
    }

    public function showJasa()
    {
        $datajasa = jasa::select('*')
            ->get();
        // dd( $datajasa);
        return view('example.card', ['datajasa' => $datajasa]);
    }

}
