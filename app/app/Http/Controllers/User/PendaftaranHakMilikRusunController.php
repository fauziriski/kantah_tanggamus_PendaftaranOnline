<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendaftaranHakMilikRusunController extends Controller
{
    public function index()
    {
        return view('user.pendaftaran_hak_milik_rusun.index');
    }
    public function create()
    {
        return view('user.pendaftaran_hak_milik_rusun.form_pendaftaran');
    }
}
