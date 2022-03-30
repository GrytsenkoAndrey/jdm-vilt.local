<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactedMessage extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $email,
        public string $message
    ) {}

    public function build(): ContactedMessage
    {
        return $this->markdown('mail.contacted-message');
    }
}
