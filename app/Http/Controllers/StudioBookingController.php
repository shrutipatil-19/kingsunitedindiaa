<?php

namespace App\Http\Controllers;

use App\Models\StudioBooking;
use Illuminate\Http\Request;

class StudioBookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'   => 'required',
            'email'  => 'required|email',
            'phone'  => 'required',
            'studio' => 'required',
            'date'   => 'required|date',
            'time'   => 'required',
        ]);

        StudioBooking::create($validated);

        return redirect()->back()->with('success', 'Booking submitted successfully!');
    }

    public function availableTimes(Request $request)
    {
        $date = $request->date;

        $booked = StudioBooking::where('date', $date)->pluck('time')->toArray();

        $allSlots = [
            '11:00 AM',
            '12:00 PM',
            '01:00 PM',
            '02:00 PM',
            '03:00 PM',
            '04:00 PM',
            '05:00 PM',
        ];

        $available = array_diff($allSlots, $booked);

        return response()->json($available);
    }
}
