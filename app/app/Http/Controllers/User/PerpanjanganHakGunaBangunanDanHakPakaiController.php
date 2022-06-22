<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerpanjanganHakGunaBangunanDanHakPakaiController extends Controller
{
    public function index()
    {
        return view('user.perpanjangan_hak_guna_bangunan_dan_hak_pakai.index');
    }
}
