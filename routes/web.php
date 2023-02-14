<?php

use App\Http\Controllers\TestingController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\PaylaterController;
use App\Http\Controllers\User\PembiayaanController;
use App\Http\Controllers\User\ProdukAllController;
use App\Http\Controllers\User\RiwayatTransaksiController;
use App\Http\Controllers\User\SimSukarelaController;
use App\Http\Controllers\User\SimWajibController;
use App\Http\Controllers\User\TabunganController;
use App\Http\Controllers\User\TopupController;
use App\Http\Controllers\User\TransferController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('testing', [TestingController::class, 'index']);

Route::get('login', [\App\Http\Controllers\AuthController::class, 'index'])->name('login');
Route::post('proses_login', [\App\Http\Controllers\AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
// Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', DashboardController::class);
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('home', DashboardController::class);

        // Transfer Slado ke anggota lain
        Route::get('transfer', [TransferController::class, 'index'])->name('user.transfer.index');
        Route::get('transfer/manual', [TransferController::class, 'manualTransfer'])->name('user.transfer.manual');
        Route::get('cari-anggota', [TransferController::class, 'fetch'])->name('user.transfer.fetch');
        Route::post('transfer/simpanManualTransfer', [TransferController::class, 'simpanManualTransfer'])->name('user.transfer.simpanManualTransfer');
        Route::get('transfer/scantransfer', [TransferController::class, 'scantransfer'])->name('user.transfer.scantransfer');
        Route::get('transfer/cari', [TransferController::class, 'cari'])->name('user.transfer.cari');
        Route::post('transfer/kirimSaldo', [TransferController::class, 'kirimSaldo'])->name('user.transfer.kirimSaldo');

        Route::get('topup', [TopupController::class, 'index'])->name('user.topup.index');
        Route::get('topup/cash', [TopUpController::class, 'topUpCash'])->name('user.topup.cash');
        Route::post('topup/store', [TopUpController::class, 'store'])->name('user.topup.store');
        Route::get('topup/konfirmasi', [TopUpController::class, 'konfirmasi'])->name('user.topup.konfirmasi');
        // Route::get('topup/sukarela', [TopUpController::class, 'topUpSukarela'])->name('user.topup.sukarela');
        // Route::post('topup/storeSukarela', [TopUpController::class, 'storeSukarela'])->name('user.topup.storeSukarela');

        Route::get('simpanan-wajib', [SimWajibController::class, 'index'])->name('user.sim-wajib.index');

        Route::get('simpanan-sukarela', [SimSukarelaController::class, 'index'])->name('user.sim-sukarela.index');
        Route::get('simpanan-sukarela/{id}', [SimSukarelaController::class, 'show'])->name('user.sim-sukarela.show');

        Route::get('riwayat-transaksi', [RiwayatTransaksiController::class, 'index'])->name('user.riwayat-transaksi.index');

        Route::get('tabungan', [TabunganController::class, 'index'])->name('user.tabungan.index');

        Route::get('paylater', [PaylaterController::class, 'index'])->name('user.paylater.index');

        Route::get('pembiayaan', [PembiayaanController::class, 'index'])->name('user.pembiayaan.index');

        Route::get('produk', [ProdukAllController::class, 'index'])->name('user.produk.index');
    });
});
