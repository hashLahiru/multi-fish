<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Emailer extends Mailable
{
    use Queueable, SerializesModels;

    public $messageData;
    public $isOwner;

    public function __construct($messageData, $isOwner)
    {
        $this->messageData = $messageData;
        $this->isOwner = $isOwner;
    }

    public function build()
    {
        $view = $this->isOwner
            ? 'emails.owner-notification'
            : 'emails.customer-notification';

        return $this->subject('You Got a New Inquiry')
            ->view($view)
            ->with([
                'messageData' => $this->messageData,
            ]);
    }
}
