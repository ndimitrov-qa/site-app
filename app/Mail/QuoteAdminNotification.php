<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class QuoteAdminNotification extends Mailable
{
    use Queueable, SerializesModels;

    public string $totalVehicles;
    public string $mobileNumber;
    public string $template;

    public function __construct(string $number_of_vehicles_fleet, string $mobile_number_fleet, string $template = 'fleet')
    {
        $this->totalVehicles = $number_of_vehicles_fleet;
        $this->mobileNumber = $mobile_number_fleet;
        $this->template = $template;
    }

    public function build()
    {

        $templates = [
            'fleet' => 'emails.quote-admin-notification',
            'hgv' => 'emails.quote-admin-notification-hgv',
            'trucks' => 'emails.quote-admin-notification-truck'
        ];

        return $this->view($templates[$this->template], [
                'totalVehicles' => $this->totalVehicles,
                'mobileNumber' => $this->mobileNumber
            ])
            ->subject('New Quote Form Submission');
    }

    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Contact Admin Notification',
    //     );
    // }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     */
    // public function attachments(): array
    // {
    //     return [];
    // }
}
