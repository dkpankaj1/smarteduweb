<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationMenuController extends Controller
{
    public function noticeBoard()
    {
        return view('website.pages.notice-board');
    }
    public function noticeDetail()
    {
        return view('website.pages.notice-detail');
    }
    public function eventNotice()
    {
        return view('website.pages.events');
    }
    public function eventDetail()
    {
        return view('website.pages.event-detail');
    }
}
