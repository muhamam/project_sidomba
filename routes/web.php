<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\UpdateProfileAdmin;
use App\Http\Controllers\AccountAdmin;
use App\Http\Controllers\UpdatePasswordAdmin;
use App\Http\Controllers\AccountUser;
use App\Http\Controllers\EditAccountUser;
use App\Http\Controllers\UpdatePasswordUser;
use App\Http\Controllers\AddressUser;
use App\Http\Controllers\EditAddressUser;
use App\Http\Controllers\EditAvatarUser;
use App\Http\Controllers\UpdateAddressUser;
use App\Http\Controllers\ContactUser;
use App\Http\Controllers\ChatUser;
use App\Http\Controllers\UlasanUser;
use App\Http\Controllers\KomplainUser;
use App\Http\Controllers\WishlistUser;
use App\Http\Controllers\TransaksiUser;
use App\Http\Controllers\AktivasiInvestor;
use App\Http\Controllers\AktivasiPeternak;
use App\Http\Controllers\KeranjangUser;
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

Route::middleware(['auth', 'user-access:user'])->group(function () {
    // tampilan awal menu akun
    Route::get('/user/akun', [AccountUser::class, 'index'])->name('account.index');

    // edit profil user
    Route::get('/user/akun/edit', [EditAccountUser::class, 'index'])->name('editaccount.index');
    Route::post('/user/akun/edit', [EditAccountUser::class, 'update'])->name('editaccount.update');

    // edit password user
    Route::get('/user/password', [UpdatePasswordUser::class, 'index'])->name('password.index');

    // edit alamat user
    Route::get('/user/alamat', [AddressUser::class, 'index'])->name('address.index');
    Route::get('/user/edit/alamat', [EditAddressUser::class, 'index'])->name('editaddress.index');

    // edit contact user
    Route::get('/user/edit/contact', [ContactUser::class, 'index'])->name('contact.index');
    Route::post('/user/edit/contact', [ContactUser::class, 'update'])->name('contact.update');

    // edit photo profil user
    Route::patch('/user/edit/avatar', [EditAvatarUser::class, 'update'])->name('avatar.update');

    // tampilan chat user
    Route::get('/user/chat', [ChatUser::class, 'index'])->name('chat.index');

    // tampilan keranjang user
    Route::get('/user/keranjang', [KeranjangUser::class, 'index'])->name('keranjang.index');

    // ulasan user
    Route::get('/user/ulasan/belum-diulas', [UlasanUser::class, 'indexBelumDiulas'])->name('ulasan.indexBelumDiulas');
    Route::get('/user/ulasan/ulasan-saya', [UlasanUser::class, 'indexSudahDiulas'])->name('ulasan.indexSudahDiulas');
    Route::get('/user/ulasan/tulis-ulasan', [UlasanUser::class, 'indexTulisUlasan'])->name('ulasan.indexTulisUlasan');

    // komplain user
    Route::get('/user/komplain', [KomplainUser::class, 'index'])->name('komplain.index');

    // wishlist user
    Route::get('/user/wishlist', [WishlistUser::class, 'index'])->name('wishlist.index');

    // transaksi user
    Route::get('/user/transaksi-diproses', [TransaksiUser::class, 'indexDiproses'])->name('transaksi.indexDiproses');
    Route::get('/user/transaksi-menunggu-pembayaran', [TransaksiUser::class, 'indexMenungguPembayaran'])->name('transaksi.indexMenungguPembayaran');
    Route::get('/user/transaksi-selesai', [TransaksiUser::class, 'indexSelesai'])->name('transaksi.indexSelesai');

    // aktivasi investor
    Route::get('/user/aktivasi/investor', [AktivasiInvestor::class, 'index'])->name('aktivasiInvestor.index');

    // aktivasi peternak
    Route::get('/user/aktivasi/peternak', [AktivasiPeternak::class, 'index'])->name('aktivasiPeternak.index');
});

Route::get('/ubah', function () {
    return view('auth.ubah');
});

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


// INVESTOR PAGE - RlynnchX007

// DONE Edited 
Route::get('/dashboard-investor', function () {
    return view('investor.dashboard');
});

// DONEs Edited tinggal grafik dan rating js
Route::get('/detail-investasi-domba', function () {
    return view('investor.detail_investasi_domba');
});

// DONE Edited
Route::get('/investasi-negosiasi', function () {
    return view('investor.investasi-negosiasi');
});

// Done Edited
Route::get('/investasi-riwayat', function () {
    return view('investor.investasi-riwayat');
});

// DONE Edited
Route::get('/investasi_saya_negosiasi', function () {
    return view('investor.investasi_saya_negosiasi');
});

// DONE Edited
Route::get('/investasi_saya_selesai', function () {
    return view('investor.investasi_saya_selesai');
});

// DONE Edited
Route::get('/investasi_saya_semua', function () {
    return view('investor.investasi_saya_semua');
});

// DONE Edited tinggal rating js
Route::get('/negosiasi_berhasil', function () {
    return view('investor.negosiasi_berhasil');
});

// DONE Edited
Route::get('/negosiasi', function () {
    return view('investor.negosiasi');
});

// DONE  Edited tinggal rating js 
Route::get('/pasar_detail_domba', function () {
    return view('investor.pasar_detail_domba');
});

// DONE Edited
Route::get('/pasar', function () {
    return view('investor.pasar');
});

// DONE 
Route::get('/pembayaran_investor', function () {
    return view('investor.pembayaran');
});

// DONE 
Route::get('/upload_done_investor', function () {
    return view('investor.upload_done');
});

// DONE
Route::get('/verifikasi_done_investor', function () {
    return view('investor.verifikasi_done');
});

// DONE
Route::get('/verifikasi_gagal_investor', function () {
    return view('investor.verifikasi_gagal');
});

// DONE
Route::get('/verifikasi_kadaluarsa_investor', function () {
    return view('investor.verifikasi_kadaluarsa');
});

// DONE
Route::get('/pasar_investasi_sekarang', function () {
    return view('investor.pasar_investasi_sekarang');
});

// DONE
Route::get('/investasi_saya_cek_status', function () {
    return view('investor.investasi_saya_menunggu_pembayaran');
});

// DONE
Route::get('/pencairan-dana', function () {
    return view('investor.pencairan_dana_investor');
});

// DONE
Route::get('/proses-pencairan-dana', function () {
    return view('investor.proses_pencairan_dana');
});

// DONE
Route::get('/cairkan-dana', function () {
    return view('investor.cairkan_dana');
});

// DONE
Route::get('/riwayat-pencairan', function () {
    return view('investor.riwayat_pencairan_dana');
});

// aman
Route::get('/pembelian_pengajuan_komplain', function () {
    return view('investor.pembelian_pengajuan_komplain ');
});

// aman
Route::get('/investasi_pengajuan_komplain', function () {
    return view('investor.investasi_pengajuan_komplain ');
});

// AKHIR PAGE INVESTOR


// profil user biasa //

// // aman
Route::get('/profil_user', function () {
    return view('user.profil');
});

// // aman
Route::get('/ubah_password', function () {
    return view('user.ubah_password');
});


// // aman
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
Route::get('/wishlist_investasi', function () {
    return view('user.wishlist_investasi ');
});

Route::get('/ajukan_komplain_investasi', function () {
    return view('user.ajukan_komplain_investasi ');
});

// aman
Route::get('/profil_verifikasi', function () {
    return view('user.profil_verifikasi ');
});

// // aman
Route::get('/edit_profil', function () {
    return view('user.edit_profil ');
});

// aman
Route::get('/komplain_proses', function () {
    return view('user.komplain_proses ');
});

// aman
Route::get('/pembayaran_user', function () {
    return view('user.pembayaran_user ');
});

// aman
Route::get('/upload_done_user', function () {
    return view('user.upload_done_user ');
});

// aman
Route::get('/upload_verifikasi_done_user', function () {
    return view('user.upload_verifikasi_done_user ');
});

// aman
Route::get('/upload_novalid_done_user', function () {
    return view('user.upload_novalid_done_user ');
});


Route::get('/upload_kadaluarsa_user', function () {
    return view('user.upload_kadaluarsa_user ');
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