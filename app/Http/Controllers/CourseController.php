<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function course()
    {
        return view('pages.course');
    }
    public function diploma()
    {
        return view('pages.courses.diplomaInStreetStyle');
    }
    public function golden()
    {
        return view('pages.courses.kingsGoldenPass');
    }
}
