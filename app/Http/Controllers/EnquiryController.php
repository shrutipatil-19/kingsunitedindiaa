<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Mail\EnquiryLeadNotification;
use App\Mail\EnquiryThankYou;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends Controller
{
    public function enquiry(Request $request)
    {
        $validate = $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'phone'   => 'required',
            'service' => 'required| array',
            'message' => 'nullable',
        ]);
        // Convert array to comma-separated string
        $validate['service'] = implode(', ', $validate['service']);

        Enquiry::create($validate);

        // Send mail to admin
        Mail::to('shruti.sociomark@gmail.com')->send(new EnquiryLeadNotification($validate));

        // Send thank-you mail to the user
        Mail::to($validate['email'])->send(new EnquiryThankYou($validate));

        return redirect()->route('thankyou')->with('success', 'Booking submitted successfully!');
    }
}
