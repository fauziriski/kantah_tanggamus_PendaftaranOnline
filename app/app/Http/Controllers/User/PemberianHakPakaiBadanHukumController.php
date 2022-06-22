<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PemberianHakPakaiBadanHukumController extends Controller
{
    public function index()
    {
        return view('user.pemberian_hak_pakai_badan_hukum.index');
    }
}
