<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PemberianHakPakaiInstansiBadanUsahaPemerintahController extends Controller
{
    public function index()
    {
        return view('user.pemberian_hak_pakai_instansi_badan_usaha_pemerintah.index');
    }
}
