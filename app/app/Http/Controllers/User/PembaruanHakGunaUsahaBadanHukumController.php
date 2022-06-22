<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembaruanHakGunaUsahaBadanHukumController extends Controller
{
    public function index()
    {
        return view('user.pembaruan_hak_guna_usaha_badan_hukum.index');
    }
}
