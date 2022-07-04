<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenggantianSertipikatKarenaHilangController extends Controller
{
    public function index()
    {
        return view('user.penggantian_sertipikat_karena_hilang.index');
    }

    public function create()
    {
        return view('user.penggantian_sertipikat_karena_hilang.form_pendaftaran');
    }
}
