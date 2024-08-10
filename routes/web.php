<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SuratpengantarController;
use App\Http\Controllers\PesertaasuransiController;
use App\Http\Controllers\PeriksakesehatanController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alllogin', function () {
    return view('pages.auth.login');
});

// Route::get('/', function () {
//     return view('pages.auth.login');
// });

Route::get('/detail/{id}/detailpeserta', [App\Http\Controllers\HomeController::class, 'detailpeserta']);

Route::middleware(['auth'])->group(function () {
    // Route::get('home', function () {
    //     return view('pages.dashboard');
    // })->name('home');

    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('user', UserController::class);
    Route::resource('suratpengantar', SuratpengantarController::class);
    Route::resource('pesertaasuransi', PesertaasuransiController::class);
    Route::resource('periksakesehatan', PeriksakesehatanController::class);

    Route::get('/periksakesehatan/{id}/lihat', [App\Http\Controllers\PeriksakesehatanController::class, 'lihat']);
    Route::post('/periksakesehatan/storehasilperiksa', [App\Http\Controllers\PeriksakesehatanController::class, 'storehasilperiksa']);
    Route::get('/periksakesehatan/deldetail/{id}', [App\Http\Controllers\PeriksakesehatanController::class, 'destroydetail']);
    Route::get('/periksakesehatan/{id}/editdetail', [App\Http\Controllers\PeriksakesehatanController::class, 'editdetail']);
    Route::post('/periksakesehatan/updatedetail', [App\Http\Controllers\PeriksakesehatanController::class, 'updatedetailperiksa']);
    Route::get('/periksakesehatan/{id}/lihatpdf', [App\Http\Controllers\PeriksakesehatanController::class, 'lihatpdf']);
    Route::get('/home/baperiksa', [App\Http\Controllers\HomeController::class, 'baperiksa']);
    Route::get('/home/permohonan', [App\Http\Controllers\HomeController::class, 'permohonan']);
    Route::get('/suratpengantar/{id}/lihatpdf', [App\Http\Controllers\SuratpengantarController::class, 'lihatpdf']);
    Route::get('/pengajuan/{id}/updatepengajuan', [App\Http\Controllers\PesertaasuransiController::class, 'updatepengajuan']);
    Route::get('/pengajuan/terima/{id}', [App\Http\Controllers\PesertaasuransiController::class, 'terima']);
    Route::get('/pengajuan/tolak/{id}', [App\Http\Controllers\PesertaasuransiController::class, 'tolak']);
    Route::post('/prosespengajuan', [App\Http\Controllers\PesertaasuransiController::class, 'prosespengajuan']);
    Route::post('/pdflappengajuan', [App\Http\Controllers\HomeController::class, 'lihatpdfpengajuan']);
    Route::get('/informasi', [App\Http\Controllers\HomeController::class, 'informasi']);
    Route::post('/filtermohon', [App\Http\Controllers\HomeController::class, 'filtermohon']);
    Route::get('/informasi/{id}/sk', [App\Http\Controllers\HomeController::class, 'sk']);
});
