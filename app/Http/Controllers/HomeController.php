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
    public function lagacy()
    {
        return view('pages.about2');
    }
    public function about3()
    {
        return view('pages.about3');
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
    public function theKing()
    {
        return view('pages.fourPillers.theKing');
    }
    public function danceStudio()
    {
        return view('pages.fourPillers.danceStudio');
    }
    public function thankyou()
    {
        return view('pages.thankYou.thankYou');
    }
    public function workshop()
    {
        return view('pages.workShop');
    }
    public function inhouse()
    {
        return view('pages.inhouse');
    }
}
