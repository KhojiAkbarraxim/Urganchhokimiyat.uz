<?php

namespace App\Mail;

use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class NewPosted extends Mailable
{
    use Queueable, SerializesModels;
    public function __construct(
        public $new   
    ){}
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Posted',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.new-posted'
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
