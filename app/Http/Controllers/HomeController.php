<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // 'welcome' adalah nama tampilan Blade yang akan digunakan
    }
}
