<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengembalianBatasController extends Controller
{
    public function index()
    {
        return view('user.pengembalian_batas.index');
    }
}
