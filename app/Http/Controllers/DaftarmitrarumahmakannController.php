<?php

namespace App\Http\Controllers;


use App\Models\Daftarmitrarumahmakann;
use Illuminate\Http\Request;

class DaftarmitrarumahmakannController extends Controller
{
    //

    public function index()
    {
        //
        return view('fe_dashboard.daftarumkm.index',[
            'title' => 'Daftar UMKM',
            // 'title_halaman' => 'Halaman Fundraising',

            'data_daftarmitrarumahmakan'  => Daftarmitrarumahmakann::paginate(7),

        ]); 
    }
}
