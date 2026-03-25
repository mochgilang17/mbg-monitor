<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // Nantinya kita akan ambil data dari database di sini
        // Untuk sekarang, kita panggil view 'welcome' saja
        return view('welcome');
    }
}