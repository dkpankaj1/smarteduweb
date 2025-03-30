<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademiaMenuController extends Controller
{
    public function programOffered()
    {
        return view('website.pages.programs-offered');
    }
    public function curriculum()
    {
        return view('website.pages.curriculum');
    }
    public function academicCalendar()
    {
        return view('website.pages.academic-calendar');
    }
    public function facilities()
    {
        return view('website.pages.facilities');
    }
    public function admissionProcess()
    {
        return view('website.pages.admission-process');
    }
    public function feeStructure()
    {
        return view('website.pages.fee-structure');
    }
    public function scholarships()
    {
        return view('website.pages.scholarships');
    }
    public function applicationForm()
    {
        return view('website.pages.application-form');
    }
}
