<?php

namespace App\Http\Controllers;

use App\Mail\CourseLeadNotification;
use App\Mail\CourseThankYou;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        // Send mail to admin
        Mail::to('shruti.sociomark@gmail.com')->send(new CourseLeadNotification($validate));

        // Send thank-you mail to the user
        Mail::to($validate['email'])->send(new CourseThankYou($validate));
        Course::create($validate);
        return redirect()->route('thankyou')->with('success', 'Booking submitted successfully!');
    }
}
