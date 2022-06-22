<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengukuranUntukMengetahuiLuasController extends Controller
{
    public function index()
    {
        return view('user.pengukuran_untuk_mengetahui_luas.index');
    }
}
