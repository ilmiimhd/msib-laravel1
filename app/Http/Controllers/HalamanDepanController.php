<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanDepanController extends Controller
{
    public function index()
{
    return view('halaman_depan');
}
}