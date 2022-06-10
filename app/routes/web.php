<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\JualBeliController as JualBeli;
use App\Http\Controllers\User\PewarisanController as Pewarisan;
use App\Http\Controllers\User\TukarMenukarController as TukarMenukar;
use App\Http\Controllers\User\LelangController as Lelang;
use App\Http\Controllers\User\HibahController as Hibah;
use App\Http\Controllers\User\PembagianHakController as PembagianHak;
use App\Http\Controllers\User\PemecahanController as Pemecahan;

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
    return view('user.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//jual beli
Route::get('/jual-beli', [JualBeli::class, 'index'])->name('jualbeli');
Route::get('/jual-beli/form-pendaftaran', [JualBeli::class, 'create'])->name('jualbeli.form_pendaftaran');
Route::post('/jual-beli/printPdf', [JualBeli::class, 'printPdf'])->name('jualbeli.printpdf');

//pewarisan
Route::get('/pewarisan/form-pendaftaran', [Pewarisan::class, 'index'])->name('pewarisan.form_pendaftaran');
Route::post('/pewarisan/printPdf', [Pewarisan::class, 'printPdf'])->name('pewarisan.printpdf');

//pewarisan
Route::get('/tukar-menukar/form-pendaftaran', [TukarMenukar::class, 'index'])->name('tukar-menukar.form_pendaftaran');
Route::post('/tukar-menukar/printPdf', [TukarMenukar::class, 'printPdf'])->name('tukar-menukar.printpdf');

//lelang
Route::get('/lelang/form-pendaftaran', [Lelang::class, 'index'])->name('lelang.form_pendaftaran');
Route::post('/lelang/printPdf', [Lelang::class, 'printPdf'])->name('lelang.printpdf');

//lelang
Route::get('/hibah/form-pendaftaran', [Hibah::class, 'index'])->name('hibah.form_pendaftaran');
Route::post('/hibah/printPdf', [Hibah::class, 'printPdf'])->name('hibah.printpdf');

//lelang
Route::get('/pembagian-hak-bersama/form-pendaftaran', [PembagianHak::class, 'index'])->name('pembagian_hak_bersama.form_pendaftaran');
Route::post('/pembagian-hak-bersama/printPdf', [PembagianHak::class, 'printPdf'])->name('pembagian_hak_bersama.printpdf');

//Pemecahan
Route::get('/pemecahan/form-pendaftaran', [Pemecahan::class, 'index'])->name('pemecahan.form_pendaftaran');
Route::post('/pemecahan/printPdf', [Pemecahan::class, 'printPdf'])->name('pemecahan.printpdf');