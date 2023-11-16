<?php

namespace App\Notifications\Loans;

use App\Models\Loans\VehicleLoans;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VehicleLoansNotification extends Notification
{
    use Queueable;


    /**
     * Create a new notification instance.
     */
    public function __construct
    (
      protected VehicleLoans $vehicle
    ) {}

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->view('pages.mail.vehicleLoans', [
                        'user' => $this->vehicle->user,
                        'vehicle' => $this->vehicle->vehicle,
                        'loans' => $this->vehicle
                    ])
                    ->subject('Vehicle Loan')
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    public function withDelay(Object $notifiable): array
    {
        return [
            'mail' => now()->addMinutes(5),
            'sms' => now()->addMinutes(10),
        ];
    }
    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
