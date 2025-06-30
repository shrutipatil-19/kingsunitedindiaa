<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class creatorSpaceController extends Controller
{
    public function studio1()
    {
        return view('pages/creatorSpace/studio1');
    }

    public function studio2()
    {
        return view('pages/creatorSpace/studio2');
    }
    public function studio3()
    {
        return view('pages/creatorSpace/studio3');
    }
    public function studio4()
    {
        return view('pages/creatorSpace/studio4');
    }
    public function studio5()
    {
        return view('pages/creatorSpace/studio5');
    }
}
