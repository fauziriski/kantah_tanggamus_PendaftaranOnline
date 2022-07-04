<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SitaController extends Controller
{
    public function index()
    {
        return view('user.sita.index');
    }
}
