<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
    public function index()
    {
        return view('be_dashboard.dashboard.index',[
            'title' => 'Halaman Dashboard',
            'title_halamandata' => 'Sistem Informasi HaiuCare Bangun Indonesia'

        ]);
    }

}
