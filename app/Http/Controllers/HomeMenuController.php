<?php

namespace App\Http\Controllers;

use App\Models\Crousal;
use Illuminate\Http\Request;

class HomeMenuController extends Controller
{
  public function index()
  {
    return view('website.pages.home');
  }
 
}
