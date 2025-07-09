<?php

namespace App\Http\Controllers;

use App\Mail\StudioLeadNotification;
use App\Mail\StudioThankYou;
use App\Models\StudioBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class StudioBookingController extends Controller
{

    public function showBookingForm($studio)
    {
        $studios = ['studio-1', 'studio-2', 'studio-3', 'studio-4', 'studio-5'];

        $view = match ($studio) {
            'studio-1' => 'pages.creatorSpace.studio1',
            'studio-2' => 'pages.creatorSpace.studio2',
            'studio-3' => 'pages.creatorSpace.studio3',
            'studio-4' => 'pages.creatorSpace.studio4',
            'studio-5' => 'pages.creatorSpace.studio5',
            default    => abort(404),
        };

        return view($view, compact('studios', 'studio'));
    }

    public function store(Request $request, $studio)
    {
        $validate = $request->validate([
            'name'  => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'studio' => 'required',   // from select
            'date'  => 'required|date',
            'time'  => 'required',
        ]);
        $validate['token'] = Str::uuid(); // Unique secure token
        $booking = StudioBooking::create($validate);

        // StudioBooking::create($validate);
        // Send mail to admin
        Mail::to('shruti.sociomark@gmail.com')->send(new StudioLeadNotification($booking));

        // Send thank-you mail to the user
        Mail::to($validate['email'])->send(new StudioThankYou($validate));
        return redirect()->back()->with('success', 'Booking submitted successfully!');
    }
    public function availableTimes(Request $request, $studio)
    {
        $date = $request->date;
        $selectedStudio = $request->studio ?? $studio;

        // Only get times from bookings that are NOT cancelled
        $booked = StudioBooking::where('date', $date)
            ->where('studio', $selectedStudio)
            ->where('status', 'booked') // Only include active bookings
            ->pluck('time')
            ->toArray();

        $allSlots = [
            '11:00 AM',
            '12:00 PM',
            '01:00 PM',
            '02:00 PM',
            '03:00 PM',
            '04:00 PM',
            '05:00 PM'
        ];

        $available = array_diff($allSlots, $booked);

        return response()->json($available);
    }

    public function adminCancel($id, $token)
    {
        $booking = StudioBooking::findOrFail($id);

        if ($booking->token !== $token) {
            abort(403, 'Unauthorized access');
        }

        $booking->status = 'cancelled';
        $booking->save();

        return redirect()->route('home')->with('success', 'Booking successfully cancelled.');
    }
}
