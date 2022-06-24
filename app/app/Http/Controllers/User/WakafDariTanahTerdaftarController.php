<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WakafDariTanahTerdaftarController extends Controller
{

    public function index()
    {
        return view('user.wakaf_dari_tanah_terdaftar.index');
    }

    public function create(){
        return view('user.wakaf_dari_tanah_terdaftar.form_pendaftaran');
    }
}
