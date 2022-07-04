<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenggantianSertipikatKarenaRusakController extends Controller
{
    public function index()
    {
        return view('user.penggantian_sertipikat_karena_rusak.index');
    }

    public function create()
    {
        return view('user.penggantian_sertipikat_karena_rusak.form_pendaftaran');
    }
}
