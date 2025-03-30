<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeMenuController extends Controller
{
    public function index()
    {
        return view('website.pages.home');
    }
}
