<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactAdminNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    public function __construct($request)
        {
            $this->request = $request;
        }

    public function build()
        {
            return $this->view('emails.contact-admin-notification')
                ->subject('New Contact Form Submission');
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
