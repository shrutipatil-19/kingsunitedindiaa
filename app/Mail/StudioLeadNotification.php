<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StudioLeadNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;

    /**
     * Create a new message instance.
     */
    public function __construct($booking) // Rename $data to $booking for clarity
    {
        $this->booking = $booking; // ✅ Assign booking directly
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('New Lead Enquiry Received')
            ->view('mail.studio.notification')
            ->with(['booking' => $this->booking]);
    }
}
