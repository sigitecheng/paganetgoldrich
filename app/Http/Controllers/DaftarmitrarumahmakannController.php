<?php

namespace App\Http\Controllers;


use App\Models\Daftarmitrarumahmakann;
use Illuminate\Http\Request;

use App\Http\Requests\StoreBe_daftarmitrarumahmakanRequest;
use App\Http\Requests\UpdateBe_daftarmitrarumahmakanRequest;

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

    // public function show(Daftarmitrarumahmakann $data)
    // {
    //     //
    //     return view('fe_dashboard.daftarumkm.show',[
    //         'title' => 'Details UMKM',
    //         'data_showdaftarmitrarumahmakan' => $data,
    //     ]); 
    // }

    public function show($data)
    {
        //
        $datas = Daftarmitrarumahmakann::where('namarumahmakan', $data)->first();
        return view('fe_dashboard.daftarumkm.show', [
            'title'             => 'Details UMKM',
            'title_halaman'     => 'View Data',
            'data'    => $datas,
            // 'categories'        => Category::all(),
        ]);
    }
}
