<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\UpdateProfileAdmin;
use App\Http\Controllers\AccountAdmin;
use App\Http\Controllers\UpdatePasswordAdmin;
use Illuminate\Support\Facades\Request;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes 
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

// login google
Route::get('login/google', [GoogleController::class, 'login']);
Route::get('login/google/callback', [GoogleController::class, 'callback']);

Route::middleware(['auth'])->group(function () {
    Route::get('logout', [GoogleController::class, 'logout']);
    Route::get('user', [UserController::class, 'index']);
});

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::redirect('/', '/home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

//basic route

// aman
Route::get('/detail', function () {
    return view('peternak.daftar_detail_domba');
});

// aman
Route::get('/daftar-domba', function () {
    return view('peternak.daftar_domba');
});

// aman
Route::get('/daftar-penjualan-investasi', function () {
    return view('peternak.daftar_penjualan_investasi');
});

// aman
Route::get('/dashboard-peternak', function () {
    return view('peternak.dashboard_peternak');
});

// aman
Route::get('/input-domba', function () {
    return view('peternak.input_domba');
});

// aman
Route::get('/input-investasi-domba', function () {
    return view('peternak.input_investasi_domba');
});

// aman
Route::get('/input-investasi-domba2', function () {
    return view('peternak.input_investasi_domba2');
});
// aman
Route::get('/input-jual-domba', function () {
    return view('peternak.input_jual_domba');
});

// aman
Route::get('/input-jual-domba2', function () {
    return view('peternak.input_jual_domba2');
});

// aman
Route::get('/dashboard-investor', function () {
    return view('investor.dashboard');
});

// aman tinggal grafik dan rating js
Route::get('/detail-investasi-domba', function () {
    return view('investor.detail_investasi_domba');
});

// aman
Route::get('/investasi-negosiasi', function () {
    return view('investor.investasi-negosiasi');
});

// aman
Route::get('/investasi-riwayat', function () {
    return view('investor.investasi-riwayat');
});

// aman
Route::get('/investasi_saya_negosiasi', function () {
    return view('investor.investasi_saya_negosiasi');
});

// aman
Route::get('/investasi_saya_selesai', function () {
    return view('investor.investasi_saya_selesai');
});

// aman
Route::get('/investasi_saya_semua', function () {
    return view('investor.investasi_saya_semua');
});

// aman tinggal rating js
Route::get('/negosiasi_berhasil', function () {
    return view('investor.negosiasi_berhasil');
});

// aman
Route::get('/negosiasi', function () {
    return view('investor.negosiasi');
});

// aman tinggal rating js
Route::get('/pasar_detail_domba', function () {
    return view('investor.pasar_detail_domba');
});

// aman tinggal dropdowns yang di filter samping
Route::get('/pasar', function () {
    return view('investor.pasar');
});


// profil user biasa

// aman
Route::get('/profil_user', function () {
    return view('user.profil');
});

// aman
Route::get('/ubah_password', function () {
    return view('user.ubah_password');
});


// aman
Route::get('/alamat_user', function () {
    return view('user.alamat_user');
});


// aman
Route::get('/pasar_user', function () {
    return view('user.pasar_user');
});

// aman
Route::get('/search_detail_pasar_domba', function () {
    return view('user.search_detail_pasar_domba');
});

// aman
Route::get('/search_detail_pasar_peternak', function () {
    return view('user.search_detail_pasar_peternak');
});

// aman
Route::get('/pasar_detail_user', function () {
    return view('user.pasar_detail_user');
});

// aman
Route::get('/view_peternak_diuser', function () {
    return view('user.view_peternak_diuser');
});

// aman
Route::get('/view_peternak_investasi_diuser', function () {
    return view('user.view_peternak_investasi_diuser ');
});

// aman
Route::get('/view_peternak_ulasan_diuser', function () {
    return view('user.view_peternak_ulasan_diuser ');
});

// aman
Route::get('/ulasan_belum_diulas_investasi', function () {
    return view('user.ulasan_belum_diulas_investasi ');
});

// aman
Route::get('/ulasan_belum_diulas_pembelian', function () {
    return view('user.ulasan_belum_diulas_pembelian ');
});

// aman
Route::get('/tulis_ulasan_pembeli', function () {
    return view('user.tulis_ulasan_pembeli ');
});

// aman
Route::get('/tulis_ulasan_investasi', function () {
    return view('user.tulis_ulasan_investasi ');
});

// aman
Route::get('/ulasan_sudah_diulas_investasi', function () {
    return view('user.ulasan_sudah_diulas_investasi ');
});

// aman
Route::get('/ulasan_sudah_diulas_pembeli', function () {
    return view('user.ulasan_sudah_diulas_pembeli ');
});

// aman
Route::get('/wishlist_pembeli', function () {
    return view('user.wishlist_pembeli ');
});

// aman
Route::get('/wishlist_investasi', function () {
    return view('user.wishlist_investasi ');
});


// aman
Route::get('/transaksi_user', function () {
    return view('user.transaksi_user ');
});

// aman
Route::get('/transaksi_user_mp', function () {
    return view('user.transaksi_user_mp ');
});

// aman
Route::get('/transaksi_selesai_user', function () {
    return view('user.transaksi_selesai_user ');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
/*...Search pagination...*/
Route::any('/search', function () {
    $q = request()->get('q');
    if ($q != "") {
        $user = User::where('name', 'LIKE', '%' . $q . '%')->orWhere('email', 'LIKE', '%' . $q . '%')->paginate(5)->setPath('');
        $pagination = $user->appends(array(
            'q' => request()->get('q')
        ));
        if (count($user) > 0)
            return route('admin.total-user', [
                'Details' => $user,
                'Query' => $q
            ]);
    }
    return route('admin.total-user')->withMessage('No Details found. Try to search again !');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/chat', [ChatController::class, 'index'])->name('admin.chat');
    Route::post('/admin/chat/{id}', [ChatController::class, 'chatStart'])->name('admin.chatStart');
    Route::get('/message/{id}', 'App\Http\Controllers\ChatController@getMessage')->name('message');
    Route::post('/admin/message', 'App\Http\Controllers\ChatController@sendMessage');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/account', [AccountAdmin::class, 'index'])->name('accountAdmin.index');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/validasi', [HomeController::class, 'adminValidasi'])->name('admin.validasi');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/total-user', [HomeController::class, 'adminTotalUser'])->name('admin.total-user');
    Route::post('/admin/total-user', [HomeController::class, 'adminTotalUser'])->name('admin.total-user');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/data-user/{id}', [HomeController::class, 'adminDataUser'])->name('admin.data-user');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/total-peternak', [HomeController::class, 'adminTotalPeternak'])->name('admin.total-peternak');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/data-peternak', [HomeController::class, 'adminDataPeternak'])->name('admin.data-peternak');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/total-investor', [HomeController::class, 'adminTotalInvestor'])->name('admin.total-investor');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/data-investor', [HomeController::class, 'adminDataInvestor'])->name('admin.data-investor');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/total-transaksi', [HomeController::class, 'adminTotalTransaksi'])->name('admin.total-transaksi');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/total-investasi', [HomeController::class, 'adminTotalInvestasi'])->name('admin.total-investasi');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/isi-chat', [HomeController::class, 'adminIsiChat'])->name('admin.isi-chat');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/gantipw', [UpdatePasswordAdmin::class, 'index'])->name('updatePwAdmin.index');
    Route::post('/admin/gantipw', [UpdatePasswordAdmin::class, 'update'])->name('updatePwAdmin.update');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/updateprofil', [UpdateProfileAdmin::class, 'index'])->name('adminUpdateProfil.index');
    Route::patch('/admin/updateprofil', [UpdateProfileAdmin::class, 'update'])->name('adminUpdateProfil.update');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/detailpesanan', [HomeController::class, 'adminDetailPesanan'])->name('admin.detailpesanan');
});
