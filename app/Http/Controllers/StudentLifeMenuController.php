<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentLifeMenuController extends Controller
{
    public function studentGuideLines()
    {
        return view('website.pages.guidelines');

    }
    public function campusActivities()
    {
        return view('website.pages.campus-activities');

    }
    public function studentCouncil()
    {
        return view('website.pages.student-council');

    }
    public function clubsOrganization()
    {
        return view('website.pages.clubs-organizations');

    }
    public function housing()
    {
        return view('website.pages.housing');

    }
    public function careerServices()
    {
        return view('website.pages.career-services');

    }
}
