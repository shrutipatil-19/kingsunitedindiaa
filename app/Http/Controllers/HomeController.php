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
        return view('pages.creatorSpace');
    }
    public function ourTeam()
    {
        return view('pages.ourTeam');
    }
}
