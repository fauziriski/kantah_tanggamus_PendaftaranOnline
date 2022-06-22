<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PemasukanKeDalamPerusahaanController extends Controller
{
    public function index()
    {
        return view('user.pemasukan_ke_dalam_perusahaan.index');
    }
}
