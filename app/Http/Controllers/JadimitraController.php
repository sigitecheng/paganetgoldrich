<?php

namespace App\Http\Controllers;

use App\Models\Jadimitra;
use Illuminate\Http\Request;

class JadimitraController extends Controller
{
    //

    public function index()
    {
        //
        return view('fe_dashboard.daftarjadimitra.index',[
            'title' => 'Form Jadi Mitra',
            // 'title_halaman' => 'Halaman Fundraising',
            'data_daftarjadimitra'  => Jadimitra::all(),
        ]); 
    }
}
