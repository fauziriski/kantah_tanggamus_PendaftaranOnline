<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermohonanUntukPengukuranGambarSituasiController extends Controller
{
    public function index(){
        return view('user.permohonan_untuk_pengukuran_gambar_situasi.form_pendaftaran');
    }
}