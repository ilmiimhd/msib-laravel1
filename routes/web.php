<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanDepanController;
use App\Http\Controllers\ProfilePembuatController;
use App\Http\Controllers\InformasiKampusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HalamanDepanController::class, 'index']);
Route::get('/profile-pembuat', [ProfilePembuatController::class, 'index']);
Route::get('/informasi-kampus', [InformasiKampusController::class, 'index']);