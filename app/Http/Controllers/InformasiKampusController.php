<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiKampusController extends Controller
{
    public function index()
{
    return view('informasi_kampus');
}
}
