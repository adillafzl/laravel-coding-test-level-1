<?php

namespace App\Http\Controllers\v1\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('home.index');
    }
}
