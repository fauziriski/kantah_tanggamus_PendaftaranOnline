<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuratKeteranganPendaftaranTanahController extends Controller
{
    public function index()
    {
        return view('user.surat_keterangan_pendaftaran_tanah.index');
    }

    public function create()
    {
        return view('user.surat_keterangan_pendaftaran_tanah.form_pendaftaran');
    }
}
