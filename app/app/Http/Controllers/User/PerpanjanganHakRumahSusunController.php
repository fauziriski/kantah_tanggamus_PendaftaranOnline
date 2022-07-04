<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerpanjanganHakRumahSusunController extends Controller
{
    public function index()
    {
        return view('user.perpanjangan_hak_rumah_susun.index');
    }

    public function create()
    {
        return view('user.perpanjangan_hak_rumah_susun.form_pendaftaran');
    }
}
