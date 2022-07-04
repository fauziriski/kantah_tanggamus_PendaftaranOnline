<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengecekanSertifikatController extends Controller
{
    public function index()
    {
        return view('user.pengecekan_sertifikat.index');
    }
}
