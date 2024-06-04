<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function index($data)
    {
        //
        $datas = User::where('name', $data)->first();
        return view('pengaturan.users.index', [
            'title'             => 'Akun Anda ',
            // 'title_halaman'     => 'View Data',
            'data'    => $datas,
            // 'user'        => User::all(),
        ]);
    }
}
