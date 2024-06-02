<?php

namespace App\Http\Controllers;

use App\Models\Jadimitra;
use App\Http\Requests\JadimitraRequest;
use Illuminate\Http\Request;


use App\Http\Requests\StoreJadimitraRequest;
use App\Http\Requests\UpdateJadimitraRequest;

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
    
 
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_rumahmakan'     => 'required',
            'nama_pemilik'        => 'required',
            'pilihan_kota'        => 'required',
            'alamat'              => 'required',
            'nomor_telepon'       => 'required',
            'email'               => 'required',
            'tanggal_berdiri'     => 'required',
            'kuota_porsi'         => 'required',
            'ktp'                 => 'required|image', // Menambahkan validasi bahwa ktp harus berupa gambar
            'foto_mitra'          => 'required|image', // Menambahkan validasi bahwa foto_mitra harus berupa gambar
            'foto_umkm'           => 'required|image', // Menambahkan validasi bahwa foto_umkm harus berupa gambar
            'keterangan_mitra'    => 'required',
        ]);

        // Mendapatkan ID user yang sedang login
        $userId = auth()->user()->id;

        // Menyimpan data baru ke dalam database
        $jadimitra = new Jadimitra();
        $jadimitra->nama_rumahmakan = $validatedData['nama_rumahmakan'];
        $jadimitra->nama_pemilik = $validatedData['nama_pemilik'];
        $jadimitra->pilihan_kota = $validatedData['pilihan_kota'];
        $jadimitra->alamat = $validatedData['alamat'];
        $jadimitra->nomor_telepon = $validatedData['nomor_telepon'];
        $jadimitra->email = $validatedData['email'];
        $jadimitra->tanggal_berdiri = $validatedData['tanggal_berdiri'];
        $jadimitra->kuota_porsi = $validatedData['kuota_porsi'];
        $jadimitra->ktp = $request->file('ktp')->store('public/ktp');
        $jadimitra->foto_mitra = $request->file('foto_mitra')->store('public/foto_mitra');
        $jadimitra->foto_umkm = $request->file('foto_umkm')->store('public/foto_umkm');
        $jadimitra->keterangan_mitra = $validatedData['keterangan_mitra'];
        $jadimitra->user_id = $userId;
        $jadimitra->save();

        // Redirect ke halaman sukses
        return redirect('/daftarmitrasuccess')->with('success', 'Berkas Saudara Berhasil di Upload!');
    }
}
