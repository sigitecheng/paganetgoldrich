<?php

use App\Http\Controllers\DaftarmenuController;
use App\Http\Controllers\DaftarmitrarumahmakannController;
use App\Http\Controllers\JadimitraController;
use App\Http\Controllers\LokasimakangratisController;
use App\Http\Controllers\Paymentgateway;
use App\Http\Controllers\PaymentgatewayController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgrammakangratisController;
use App\Http\Controllers\TentangkamiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\Daftarmenu;
use App\Models\Daftarmitrarumahmakann;
use App\Models\Programmakangratis;
use App\Models\Lokasimakangratis;
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


// ==========================================================
Route::get('/comingsoon', function () {
    return view('comingsoon', [
        'title' => 'Coming Soon',
    ]);
});

// ==========================================================
// Route::get('/dashboard', function () {
//     return view('fe_dashboard.programmakangratis.index', [
//         'title' => 'Selamat Datang',
//     ]);
// });

// ==========================================================
Route::get('/registers', function () {
    return view('fe_dashboard.pendaftaranusers.index', [
        'title' => 'Registrasi !',
    ]);
});
Route::post('/newregisters', [RegisterController::class, 'newregisters']);
Route::get('/successregister', [RegisterController::class, 'success']);

// ----------------------------------------------------
// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::resource('/', ProgrammakangratisController::class);
// Route::resource('/dashboard', ProgrammakangratisController::class);
// ----------------------------------------------------

// ----------------------------------------------------
// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
// Route::resource('/logins', LoginController::class);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');  
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// ----------------------------------------------------
// Route::resource('/logins', LoginController::class);
Route::get('/daftar', [RegisterController::class, 'index']); 
Route::post('/send-otp', [RegisterController::class, 'sendotp'])->name('daftarsendotp');
Route::post('/input_otp', [RegisterController::class, 'inputotp'])->name('verifyotpform');

// Route::get('/daftarsendotp', [RegisterController::class, 'daftarsendotp'])->name('verify.otp');  
// Route::get('/daftarverifyotp', [RegisterController::class, 'verifyOTPForm'])->name('verifyOTPForm');  
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout']);
// ----------------------------------------------------

// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::resource('/tentangkami', TentangkamiController::class);

// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::resource('/daftarumkm', DaftarmitrarumahmakannController::class);
Route::get('/daftarumkm/{namarumahmakan}', [DaftarmitrarumahmakannController::class, 'show'])->name('daftarumkm');
Route::get('/daftarmitra', [DaftarmitrarumahmakannController::class, 'daftarmitra'])->name('daftarmitra');
Route::get('/daftarmitra/{namarumahmakan}', [DaftarmitrarumahmakannController::class, 'showdaftarmitra'])->name('daftarmitra');
// Route::get('/daftarumkm/{namarumahmakan}', 'DaftarmitrarumahmakannController@showdaftarmitra')->name('daftarmitra');

// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::resource('/lokasimakangratis', LokasimakangratisController::class);
Route::get('/lokasimakangratis/{alamat}', [LokasimakangratisController::class, 'show'])->name('lokasimakangratis');

// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::resource('/daftarmenu', DaftarmenuController::class);
// Route::get('/lokasimakangratis/{alamat}', [LokasimakangratisController::class, 'show'])->name('lokasimakangratis');

// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::resource('/daftarjadimitra', JadimitraController::class)->middleware('auth');
Route::post('/daftarjadimitra/save', [JadimitraController::class, 'store'])->name('daftarjadimitra.save')->middleware('auth');
Route::get('/daftarmitrasuccess', [JadimitraController::class, 'mitrasuccess'])->middleware('auth');
Route::get('/showmitrasuccess/{user}', [JadimitraController::class, 'showmitrasuccess'])->middleware('auth');

// Route::get('/daftarmitrasuccess', function () {
//     return view('fe_dashboard.daftarjadimitra.success',[
//         'title' => 'Registration Successful!',
//     ]);
// })->middleware('auth');

// Route::post('/daftarjadimitra/store', JadimitraController::class)->middleware('auth');
Route::get('/lokasimakangratis/{alamat}', [LokasimakangratisController::class, 'show'])->name('lokasimakangratis');

// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::get('/paymentgateway/mitra/{kota}', [PaymentgatewayController::class, 'paymentmakan'])->name('paymentmakan');

// -===============================================================================================
// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::get('/pengaturan', [PengaturanController::class, 'index'])->middleware('auth');

// -===============================================================================================
// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::get('/profile/{name}', [UserController::class, 'index'])->middleware('auth');

// Route::get('/daftarumkm/details/{namarumahmakan}', [DaftarmitrarumahmakannController::class, 'show']);

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::middleware('auth')->group(function () {
    //     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
// ROUTE UNTUK PANGAMBILAN DATA PENANGGUNGJAWAB
Route::get('/paymentgateway/mitra/{kota}', [PaymentgatewayController::class, 'paymentmakan'])->name('paymentmakan');

Route::get('/dashboard', function () {
    return view('fe_dashboard.dashboard.index', [
        'title' => 'Selamat Datang !',
        'data_lokasimakangratis'  => Lokasimakangratis::all(),
        'data_daftarmitrarumahmakan'  => Daftarmitrarumahmakann::all(),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';


// Route::get('/masuk', function () {
//         return view('masuk');
//     });


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





