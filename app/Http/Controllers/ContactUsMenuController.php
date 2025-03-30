<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsMenuController extends Controller
{
    public function create()
    {
        return view('website.pages.contact');

    }
    public function store()
    {

    }
}
