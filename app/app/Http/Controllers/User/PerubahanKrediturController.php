<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerubahanKrediturController extends Controller
{
    public function index(){
        return view('user.perubahan_kreditur.form_pendaftaran');
    }
}