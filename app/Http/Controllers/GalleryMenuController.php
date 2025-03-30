<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryMenuController extends Controller
{
    public function index(){
        return view('website.pages.gallery');
    }
}
