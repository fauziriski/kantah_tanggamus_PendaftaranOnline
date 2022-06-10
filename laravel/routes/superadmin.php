<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
// use Inertia\Inertia;

use App\Http\Controllers\Superadmin\HomeController as Home;

/*
|--------------------------------------------------------------------------
| Super Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Super Admin" middleware group. Now create something great!
|
*/

Route::get('/', [Home::class, 'index']);
