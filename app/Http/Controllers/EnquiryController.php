<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function enquiry(Request $request)
    {
        $validate = $request->validate([
            'name'  => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'service' => 'required',
            'message' => 'nullable'
        ]);

        Enquiry::create($validate);
        return redirect()->back()->with('success', 'Booking submitted successfully!');
    }
}
