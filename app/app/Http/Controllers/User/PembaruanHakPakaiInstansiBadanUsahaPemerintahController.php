<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembaruanHakPakaiInstansiBadanUsahaPemerintahController extends Controller
{
    public function index()
    {
        return view('user.pembaruan_hak_pakai_instansi_badan_usaha_pemerintah.index');
    }
}
