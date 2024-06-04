<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LokasipengajuanController extends Controller
{
    //

    public function index()
    {
        //
        return view('fe_dashboard.lokasipengajuan.index',[
            'title' => 'Daftar Lokasi Pengajuan',
         
        ]); 
    }
}
