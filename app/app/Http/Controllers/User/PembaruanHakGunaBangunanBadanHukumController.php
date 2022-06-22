<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembaruanHakGunaBangunanBadanHukumController extends Controller
{
    public function index()
    {
        return view('user.pembaruan_hak_guna_bangunan_badan_hukum.index');
    }
}
