<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeralihanHakTanggunganController extends Controller
{
    public function index()
    {
        return view('user.peralihan_hak_tanggungan.index');
    }

    public function create()
    {
        return view('user.peralihan_hak_tanggungan.form_pendaftaran');
    }
}
