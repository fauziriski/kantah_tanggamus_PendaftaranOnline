<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerubahanHakController extends Controller
{

    public function index()
    {
        return view('user.perubahan_hak.index');
    }
    public function create(){
        return view('user.perubahan_hak.form_pendaftaran');

    }
}
