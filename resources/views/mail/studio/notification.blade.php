<h2>New Lead Enquiry</h2>
<p><strong>Name:</strong> {{ $booking['name'] }}</p>
<p><strong>Email:</strong> {{ $booking['email'] }}</p>
<p><strong>Phone:</strong> {{ $booking['phone'] }}</p>
<p><strong>Studio:</strong> {{ $booking['studio'] }}</p>
<p><strong>Date:</strong> {{ $booking['date'] ?? 'N/A' }}</p>
<p><strong>Time:</strong> {{ $booking['time'] ?? 'N/A' }}</p>

<br>

{{-- Show cancel button only if booking is not cancelled --}}
@if($booking->status === 'booked')
<a href="{{ route('admin.studio.cancel', ['booking' => $booking->id, 'token' => $booking->token]) }}"
   style="display: inline-block; padding: 10px 15px; background-color: red; color: white; text-decoration: none; border-radius: 4px;">
   Cancel Booking
</a>
@else
<p style="color: gray;"><em>Booking has already been cancelled.</em></p>
@endif