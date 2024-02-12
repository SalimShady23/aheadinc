<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact_fullname, $contact_email, $contact_subject,  $contact_message;

    /**
     * Create a new message instance.
     */
    public function __construct($fullName, $emailAddress, $subject, $messages)
    {
        $this->contact_fullname = ucwords(strtolower($fullName));
        $this->contact_email    = strtolower($emailAddress);
        $this->contact_subject  = ucwords(strtolower($subject));
        $this->contact_message  = ucwords(strtolower($messages));
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: ucwords(strtolower($this->contact_subject)),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
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
