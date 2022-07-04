<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HakTanggunganController extends Controller
{
    public function index()
    {
        return view('user.hak_tanggungan.index');
    }
}
