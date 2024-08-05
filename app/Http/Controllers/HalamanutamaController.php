<?php

namespace App\Http\Controllers;

use App\Models\Daftarmitrarumahmakann;
use App\Models\Lokasimakangratis;
use Illuminate\Http\Request;

class HalamanutamaController extends Controller
{
    //
    public function index()
    {
        //
        return view('halaman_utama.menu.index',[
            'title' => 'Goldrich Renergybar',
            // 'title_halaman' => 'Halaman Fundraising',

            // 'data_lokasimakangratis'  => Lokasimakangratis::all(),
            // 'data_daftarmitrarumahmakan'  => Daftarmitrarumahmakann::all(),

        ]); 
    }

    public function aboutus()
    {
        //
        return view('halaman_utama.about_us.index',[
            'title' => 'About Us',
            // 'title_halaman' => 'Halaman Fundraising',

            // 'data_tentangkami'  => Tentangkami::all(),

        ]); 
    }
}
