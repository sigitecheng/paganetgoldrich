<?php

use App\Http\Controllers\DaftarmitrarumahmakannController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgrammakangratisController;
use App\Http\Controllers\TentangkamiController;
use App\Models\Daftarmitrarumahmakann;
use App\Models\Programmakangratis;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// ----------------------------------------------------
// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::resource('/', ProgrammakangratisController::class);
// ----------------------------------------------------

// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::resource('/tentangkami', TentangkamiController::class);

// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::resource('/daftarumkm', DaftarmitrarumahmakannController::class);
Route::get('/daftarumkm/{namarumahmakan}', 'DaftarmitrarumahmakannController@showDetails')->name('daftarumkm');

// Route::get('/daftarumkm/details/{namarumahmakan}', [DaftarmitrarumahmakannController::class, 'show']);


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
    

Route::get('/masuk', function () {
        return view('masuk');
    });


// Route::get('/dashboard', function () {
//     return view('admin_dashboard.be_dashboard.dashboard.index',[
//         'title' => 'Admin Dashboard',
//         'title_halaman' => 'Halaman Dashboard',

//         'data_users' => User::all()

//     ]);

// })->middleware(['auth', 'verified'])->name('dashboard');


// ----------------------------------------------------
// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
// Route::resource('/user', UserController::class)->middleware('auth');


// ----------------------------------------------------
// ROUTE UNTUK PANGAMBILAN DATA KATEGORI 
// Route::resource('/category', CategoryController::class)->middleware('auth');

// ----------------------------------------------------
// ROUTE UNTUK PANGAMBILAN DATA KATEGORI 
// Route::resource('/donatur', DonaturController::class)->middleware('auth');

// ----------------------------------------------------
// ROUTE UNTUK PANGAMBILAN DATA KATEGORI 
// Route::resource('/fundraiser', FundraiserController::class)->middleware('auth');

// ----------------------------------------------------
// ROUTE UNTUK PANGAMBILAN DATA KATEGORI 
// Route::resource('/fundraising', FundraisingController::class)->middleware('auth');

// ----------------------------------------------------
// ROUTE UNTUK PANGAMBILAN DATA KATEGORI 
// Route::resource('/fundraising_phases', FundraisingPhasController::class)->middleware('auth');

// ----------------------------------------------------
// ROUTE UNTUK PANGAMBILAN DATA KATEGORI 
// Route::resource('/withdrawals', FundraisingWithdrawalsController::class)->middleware('auth');

// ===================================================================================
// ROUTE UNTUK PANGAMBILAN DATA KATEGORI 
// Route::resource('/makangratis', FeMakangratisController::class);


// ===================================================================================
// ROUTE UNTUK PANGAMBILAN DATA KATEGORI 
// Route::resource('/tentangkami', TentangkamiController::class);

// ===================================================================================
// ROUTE UNTUK PANGAMBILAN DATA KATEGORI 
// Route::resource('/lokasimakangratis', LokasimakangratisController::class);

// ===================================================================================
// ROUTE UNTUK PANGAMBILAN DATA KATEGORI 
// Route::resource('/daftarmitrarumahmakan', DaftarmitrarumahmakanController::class);


// MENAMBAHKAN FITUR MIDLEWARE -> PENGGUNAAN GUEST UNTUK HALAMAN YANG BELUM TERAUTENTIKASI ATAU TERDAFTAR
// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); // PENAMBAHAN FITUR GUEST 
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.request');
// Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.reset');

// Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
// Route::post('/register', [RegisterController::class, 'store']);





