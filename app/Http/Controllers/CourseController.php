<?php

namespace App\Http\Controllers;

use App\Models\Course;
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
    public function D2D()
    {
        return view('pages.courses.D2D');
    }
    public function choreoLab()
    {
        return view('pages.courses.choreoLab');
    }

    public function courseEnquiry(Request $request)
    {
        $validate = $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'phone'   => 'required',
            'course' => 'required',
            'date' => 'nullable',
        ]);
        Course::create($validate);
        return redirect()->back();
    }
}
