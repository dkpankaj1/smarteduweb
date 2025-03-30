<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsMenuController extends Controller
{
    public function ourHistory()
    {
        return view('website.pages.our-history');
    }
    public function aboutSchool()
    {
        return view('website.pages.school');
    }
    public function visionMission()
    {
        return view('website.pages.vision-mission');
    }
    public function leadershipTeam()
    {
        return view('website.pages.leadership-team');
    }
    public function directorDesk()
    {
        return view('website.pages.director-desk');
    }
    public function principalDesk()
    {
        return view('website.pages.principal-desk');
    }
    public function coPrincipalDesk()
    {
        return view('website.pages.co-principal-desk');
    }
    public function facultyDirectory()
    {
        return view('website.pages.faculty-directory');
    }
    public function facultyDetail(int $faculty)
    {
        return view('website.pages.faculty-detail');
    }
}
