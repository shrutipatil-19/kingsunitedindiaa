<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function bookUsLive()
    {
        return view('pages.bookUsLive');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function creatorSpace()
    {
        return view('pages.fourPillers.creatorSpace');
    }
    public function ourTeam()
    {
        return view('pages.ourTeam');
    }
     public function sureshMukund()
    {
        return view('pages.fourPillers.sureshMukund');
    }
    public function theKings()
    {
        return view('pages.fourPillers.theKings');
    }
    public function thankyou()
    {
        return view('pages.thankYou.thankYou');
    }
}
