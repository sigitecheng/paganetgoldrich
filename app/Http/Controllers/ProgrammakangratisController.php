<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgrammakangratisController extends Controller
{
    //
    public function index()
    {
        //
        return view('fe_dashboard.programmakangratis.index',[
            'title' => 'HaiuCare Bangun Indonesia',
            // 'title_halaman' => 'Halaman Fundraising',

            // 'data_fundraising'  => Fundraising::paginate(10),

        ]); 
    }
}
