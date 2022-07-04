<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenggantianSertipikatKarenaBlankoLamaController extends Controller
{
    public function index()
    {
        return view('user.penggantian_sertipikat_karena_blanko_lama.index');
    }

    public function create()
    {
        return view('user.penggantian_sertipikat_karena_blanko_lama.form_pendaftaran');
    }
}
