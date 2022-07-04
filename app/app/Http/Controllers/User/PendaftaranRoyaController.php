<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendaftaranRoyaController extends Controller
{
    public function index()
    {
        return view('user.pendaftaran_roya.index');
    }

    public function create()
    {
        return view('user.pendaftaran_roya.form_pendaftaran');
    }
}
