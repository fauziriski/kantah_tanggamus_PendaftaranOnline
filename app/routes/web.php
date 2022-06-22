<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\JualBeliController as JualBeli;
use App\Http\Controllers\User\PewarisanController as Pewarisan;
use App\Http\Controllers\User\TukarMenukarController as TukarMenukar;
use App\Http\Controllers\User\LelangController as Lelang;
use App\Http\Controllers\User\HibahController as Hibah;
use App\Http\Controllers\User\PembagianHakController as PembagianHak;
use App\Http\Controllers\User\PemecahanController as Pemecahan;
use App\Http\Controllers\User\PemisahanController as Pemisahan;
use App\Http\Controllers\User\PenggabunganController as Penggabungan;
use App\Http\Controllers\User\KonversiController as Konversi;
use App\Http\Controllers\User\PenegasanHakController as PenegasanHak;
use App\Http\Controllers\User\WakafController as Wakaf;
use App\Http\Controllers\User\PemberianHakMilikPeroranganController as PemberianHakMilikPerorangan;
use App\Http\Controllers\User\PemberianHakMilikBadanHukumController as PemberianHakMilikBadanHukum;
use App\Http\Controllers\User\PemberianHakGunaUsahaPeroranganController as PemberianHakGunaUsahaPerorangan;
use App\Http\Controllers\User\PemberianHakGunaUsahaBadanHukumController as PemberianHakGunaUsahaBadanHukum;
use App\Http\Controllers\User\PemberianHakGunaBangunanPeroranganController as PemberianHakGunaBangunanPerorangan;
use App\Http\Controllers\User\PemberianHakGunaBangunanBadanHukumController as PemberianHakGunaBangunanBadanHukum;
use App\Http\Controllers\User\PemasukanKeDalamPerusahaanController as PemasukanKeDalamPerusahaan;
use App\Http\Controllers\User\PemberianHakPakaiPeroranganController as PemberianHakPakaiPerorangan;
use App\Http\Controllers\User\PemberianHakPakaiBadanHukumController as PemberianHakPakaiBadanHukum;
use App\Http\Controllers\User\PemberianHakPakaiInstansiBadanUsahaPemerintahController as PemberianHakPakaiInstansiBadanUsahaPemerintah;
use App\Http\Controllers\User\PembaruanHakGunaUsahaPeroranganController as PembaruanHakGunaUsahaPerorangan;
use App\Http\Controllers\User\PembaruanHakGunaUsahaBadanHukumController as PembaruanHakGunaUsahaBadanHukum;
use App\Http\Controllers\User\PembaruanHakGunaBangunanPeroranganController as PembaruanHakGunaBangunanPerorangan;
use App\Http\Controllers\User\PembaruanHakGunaBangunanBadanHukumController as PembaruanHakGunaBangunanBadanHukum;
use App\Http\Controllers\User\PembaruanHakPakaiPeroranganController as PembaruanHakPakaiPerorangan;
use App\Http\Controllers\User\PembaruanHakPakaiBadanHukumController as PembaruanHakPakaiBadanHukum;
use App\Http\Controllers\User\PembaruanHakPakaiInstansiBadanUsahaPemerintahController as PembaruanHakPakaiInstansiBadanUsahaPemerintah;
use App\Http\Controllers\User\PengembalianBatasController as PengembalianBatas;
use App\Http\Controllers\User\PengukuranUntukMengetahuiLuasController as PengukuranUntukMengetahuiLuas;
use App\Http\Controllers\User\PerpanjanganHakGunaBangunanDanHakPakaiController as PerpanjanganHakGunaBangunanDanHakPakai;
use App\Http\Controllers\User\PerpanjanganHakGunaUsahaController as PerpanjanganHakGunaUsaha;
use App\Http\Controllers\User\WakafDariTanahTerdaftarController as WakafDariTanahTerdaftar;

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
Route::get('/pewarisan', [Pewarisan::class, 'index'])->name('pewarisan');
Route::get('/pewarisan/form-pendaftaran', [Pewarisan::class, 'create'])->name('pewarisan.form_pendaftaran');
Route::post('/pewarisan/printPdf', [Pewarisan::class, 'printPdf'])->name('pewarisan.printpdf');

//pewarisan
Route::get('/tukar-menukar', [TukarMenukar::class, 'index'])->name('tukar-menukar');
Route::get('/tukar-menukar/form-pendaftaran', [TukarMenukar::class, 'create'])->name('tukar-menukar.form_pendaftaran');
Route::post('/tukar-menukar/printPdf', [TukarMenukar::class, 'printPdf'])->name('tukar-menukar.printpdf');

//lelang
Route::get('/lelang', [Lelang::class, 'index'])->name('lelang');
Route::get('/lelang/form-pendaftaran', [Lelang::class, 'create'])->name('lelang.form_pendaftaran');
Route::post('/lelang/printPdf', [Lelang::class, 'printPdf'])->name('lelang.printpdf');

//lelang
Route::get('/hibah', [Hibah::class, 'index'])->name('hibah');
Route::get('/hibah/form-pendaftaran', [Hibah::class, 'create'])->name('hibah.form_pendaftaran');
Route::post('/hibah/printPdf', [Hibah::class, 'printPdf'])->name('hibah.printpdf');

//lelang
Route::get('/pembagian-hak-bersama', [PembagianHak::class, 'index'])->name('pembagian_hak_bersama');
Route::get('/pembagian-hak-bersama/form-pendaftaran', [PembagianHak::class, 'index'])->name('pembagian_hak_bersama.form_pendaftaran');
Route::post('/pembagian-hak-bersama/printPdf', [PembagianHak::class, 'printPdf'])->name('pembagian_hak_bersama.printpdf');

//Pemasukan ke dalam perusahaan
Route::get('/pemasukan-ke-dalam-perusahaan', [PemasukanKeDalamPerusahaan::class, 'index'])->name('pemasukan_ke_dalam_perusahaan');

//Pemecahan
Route::get('/pemecahan', [Pemecahan::class, 'index'])->name('pemecahan');
Route::get('/pemecahan/form-pendaftaran', [Pemecahan::class, 'create'])->name('pemecahan.form_pendaftaran');
Route::post('/pemecahan/printPdf', [Pemecahan::class, 'printPdf'])->name('pemecahan.printpdf');

//Pemisahan
Route::get('/pemisahan', [Pemisahan::class, 'index'])->name('pemisahan');
Route::get('/pemisahan/form-pendaftaran', [Pemisahan::class, 'create'])->name('pemisahan.form_pendaftaran');
Route::post('/pemisahan/printPdf', [Pemisahan::class, 'printPdf'])->name('pemisahan.printpdf');

//Penggabungan
Route::get('/penggabungan', [Penggabungan::class, 'index'])->name('penggabungan');
Route::get('/penggabungan/form-pendaftaran', [Penggabungan::class, 'create'])->name('penggabungan.form_pendaftaran');
Route::post('/penggabungan/printPdf', [Penggabungan::class, 'printPdf'])->name('penggabungan.printpdf');

//Konversi
Route::get('/konversi', [Konversi::class, 'index'])->name('konversi');
Route::get('/konversi/form-pendaftaran', [Konversi::class, 'create'])->name('konversi.form_pendaftaran');
Route::post('/konversi/printPdf', [Konversi::class, 'printPdf'])->name('konversi.printpdf');

//Penegasan Hak
Route::get('/penegasan-hak', [PenegasanHak::class, 'index'])->name('penegasan_hak');
Route::get('/penegasan-hak/form-pendaftaran', [PenegasanHak::class, 'create'])->name('penegasan_hak.form_pendaftaran');
Route::post('/penegasan-hak/printPdf', [PenegasanHak::class, 'printPdf'])->name('penegasan_hak.printpdf');

//Wakaf
Route::get('/wakaf', [Wakaf::class, 'index'])->name('wakaf');

//Pemberian Hak Milik Perorangan
Route::get('/pemberian-hak-milik-perorangan', [PemberianHakMilikPerorangan::class, 'index'])->name('pemberian_hak_milik_perorangan');
Route::get('/pemberian-hak-milik-perorangan/form-pendaftaran', [PemberianHakMilikPerorangan::class, 'create'])->name('pemberian_hak_milik_perorangan.form_pendaftaran');
Route::post('/pemberian-hak-milik-perorangan/printPdf', [PemberianHakMilikPerorangan::class, 'printPdf'])->name('pemberian_hak_milik_perorangan.printpdf');

//Pemberian Hak Milik Badan Hukum
Route::get('/pemberian-hak-milik-badan-hukum', [PemberianHakMilikBadanHukum::class, 'index'])->name('pemberian_hak_milik_badan_hukum');
Route::get('/pemberian-hak-milik-badan-hukum/form-pendaftaran', [PemberianHakMilikBadanHukum::class, 'create'])->name('pemberian_hak_milik_badan_hukum.form_pendaftaran');
Route::post('/pemberian-hak-milik-badan-hukum/printPdf', [PemberianHakMilikBadanHukum::class, 'printPdf'])->name('pemberian_hak_milik_badan_hukum.printpdf');

//Pemberian Hak Guna Usaha Perorangan
Route::get('/pemberian-hak-guna-usaha-perorangan', [PemberianHakGunaUsahaPerorangan::class, 'index'])->name('pemberian_hak_guna_usaha_perorangan');
Route::get('/pemberian-hak-guna-usaha-perorangan/form-pendaftaran', [PemberianHakGunaUsahaPerorangan::class, 'create'])->name('pemberian_hak_guna_usaha_perorangan.form_pendaftaran');
Route::post('/pemberian-hak-guna-usaha-perorangan/printPdf', [PemberianHakGunaUsahaPerorangan::class, 'printPdf'])->name('pemberian_hak_guna_usaha_perorangan.printpdf');

//Pemberian Hak Guna Usaha Badan Hukum
Route::get('/pemberian-hak-guna-usaha-badan-hukum', [PemberianHakGunaUsahaBadanHukum::class, 'index'])->name('pemberian_hak_guna_usaha_badan_hukum');
Route::get('/pemberian-hak-guna-usaha-badan-hukum/form-pendaftaran', [PemberianHakGunaUsahaBadanHukum::class, 'create'])->name('pemberian_hak_guna_usaha_badan_hukum.form_pendaftaran');
Route::post('/pemberian-hak-guna-usaha-badan-hukum/printPdf', [PemberianHakGunaUsahaBadanHukum::class, 'printPdf'])->name('pemberian_hak_guna_usaha_badan_hukum.printpdf');

//Pemberian Hak Guna Bangunan Perorangan
Route::get('/pemberian-hak-guna-bangunan-perorangan', [PemberianHakGunaBangunanPerorangan::class, 'index'])->name('pemberian_hak_guna_bangunan_perorangan');
Route::get('/pemberian-hak-guna-bangunan-perorangan/form-pendaftaran', [PemberianHakGunaBangunanPerorangan::class, 'create'])->name('pemberian_hak_guna_bangunan_perorangan.form_pendaftaran');
Route::post('/pemberian-hak-guna-bangunan-perorangan/printPdf', [PemberianHakGunaBangunanPerorangan::class, 'printPdf'])->name('pemberian_hak_guna_bangunan_perorangan.printpdf');

//Pemberian Hak Guna Bangunan Badan Hukum
Route::get('/pemberian-hak-guna-bangunan-badan-hukum', [PemberianHakGunaBangunanBadanHukum::class, 'index'])->name('pemberian_hak_guna_bangunan_badan_hukum');
Route::get('/pemberian-hak-guna-bangunan-badan-hukum/form-pendaftaran', [PemberianHakGunaBangunanBadanHukum::class, 'create'])->name('pemberian_hak_guna_bangunan_badan_hukum.form_pendaftaran');
Route::post('/pemberian-hak-guna-bangunan-badan-hukum/printPdf', [PemberianHakGunaBangunanBadanHukum::class, 'printPdf'])->name('pemberian_hak_guna_bangunan_badan_hukum.printpdf');

//Pemberian Hak Pakai Perorangan
Route::get('/pemberian-hak-pakai-perorangan', [PemberianHakPakaiPerorangan::class, 'index'])->name('pemberian_hak_pakai_perorangan');

// Pemberian Hak Pakai Badan Hukum
Route::get('/pemberian-hak-pakai-badan-hukum', [PemberianHakPakaiBadanHukum::class, 'index'])->name('pemberian_hak_pakai_badan_hukum');

// Pemberian Hak Pakai Instansi/Badan Usaha Pemerintah
Route::get('/pemberian-hak-pakai-instansi-badan-usaha-pemerintah', [PemberianHakPakaiInstansiBadanUsahaPemerintah::class, 'index'])->name('pemberian_hak_pakai_instansi_badan_usaha_pemerintah');

// Pembaruan Hak Guna Usaha Perorangan
Route::get('/pembaruan-hak-guna-usaha-perorangan', [PembaruanHakGunaUsahaPerorangan::class, 'index'])->name('pembaruan_hak_guna_usaha_perorangan');

// Pembaruan Hak Guna Usaha Badan Hukum
Route::get('/pembaruan-hak-guna-usaha-badan-hukum', [PembaruanHakGunaUsahaBadanHukum::class, 'index'])->name('pembaruan_hak_guna_usaha_badan_hukum');

// Pembaruan Hak Guna Bangunan Perorangan
Route::get('/pembaruan-hak-guna-bangunan-perorangan', [PembaruanHakGunaBangunanPerorangan::class, 'index'])->name('pembaruan_hak_guna_bangunan_perorangan');

// Pembaruan Hak Guna Bangunan Badan Hukum
Route::get('/pembaruan-hak-guna-bangunan-badan-hukum', [PembaruanHakGunaBangunanBadanHukum::class, 'index'])->name('pembaruan_hak_guna_bangunan_badan_hukum');

// Pembaruan Hak Pakai Perorangan
Route::get('/pembaruan-hak-pakai-perorangan', [PembaruanHakPakaiPerorangan::class, 'index'])->name('pembaruan_hak_pakai_perorangan');

// Pembaruan Hak Pakai Badan Hukum
Route::get('/pembaruan-hak-pakai-badan-hukum', [PembaruanHakPakaiBadanHukum::class, 'index'])->name('pembaruan_hak_pakai_badan_hukum');

// Pembaruan Hak Pakai Instansi/Badan Usaha Pemerintah
Route::get('/pembaruan-hak-pakai-instansi-badan-usaha-pemerintah', [PembaruanHakPakaiInstansiBadanUsahaPemerintah::class, 'index'])->name('pembaruan_hak_pakai_instansi_badan_usaha_pemerintah');

// Perpanjangan Hak Guna Bangunan Dan Hak Pakai
Route::get('/perpanjangan-hak-guna-bangunan-dan-hak-pakai', [PerpanjanganHakGunaBangunanDanHakPakai::class, 'index'])->name('perpanjangan_hak_guna_bangunan_dan_hak_pakai');

// Perpanjangan Hak Guna Usaha
Route::get('/perpanjangan-hak-guna-usaha', [PerpanjanganHakGunaUsaha::class, 'index'])->name('perpanjangan_hak_guna_usaha');

// Perubahan Hak
Route::get('/perubahan-hak', [PembaruanHakPakaiPerorangan::class, 'index'])->name('perubahan_hak');

// Wakaf Dari Tanah Terdaftar
Route::get('/wakaf-dari-tanah-terdaftar', [WakafDariTanahTerdaftar::class, 'index'])->name('wakaf_dari_tanah_terdaftar');

// Pengembalian Batas
Route::get('/pengembalian-batas', [PengembalianBatas::class, 'index'])->name('pengembalian_batas');

// Pengukuran Untuk Mengetahui Luas
Route::get('/pengukuran-untuk-mengetahui-luas', [PengukuranUntukMengetahuiLuas::class, 'index'])->name('pengukuran_untuk_mengetahui_luas');
