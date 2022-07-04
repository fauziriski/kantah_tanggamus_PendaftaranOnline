<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengangkatanSitaController extends Controller
{
    public function index()
    {
        return view('user.pengangkatan_sita.index');
    }
}
