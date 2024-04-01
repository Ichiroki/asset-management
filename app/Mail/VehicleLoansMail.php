<?php

namespace App\Mail;

use App\Models\Asset\Vehicle;
use App\Models\Loans\VehicleLoans;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VehicleLoansMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $vehicle;
    public $validated;

    /**
     * Create a new message instance.
     */
    public function __construct(User $user, Vehicle $vehicle)
    {
        $this->user = $user;
        $this->vehicle = $vehicle;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Vehicle Loans Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'pages.mail.vehicleLoans',
            with: [
                'loans' => $this->validated,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
