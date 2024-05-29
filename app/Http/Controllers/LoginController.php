<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function index()
    {
        //
        return view('fe_dashboard.login.index',[
            'title' => 'Silahkan Login !',
            // 'title_halaman' => 'Halaman Fundraising',
            // 'data_daftarjadimitra'  => Jadimitra::all(),
        ]); 
    }
}
