<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Antrian;

class HomeController extends Controller
{
    public function index()
    {
        $antrian = Antrian::where('user_id', Auth::id())->where('status', 'Menunggu')->first();

        return view('home', compact('antrian'));
    }
}