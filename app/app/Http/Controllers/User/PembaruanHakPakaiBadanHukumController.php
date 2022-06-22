<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembaruanHakPakaiBadanHukumController extends Controller
{
    public function index()
    {
        return view('user.pembaruan_hak_pakai_perorangan.index');
    }
}
