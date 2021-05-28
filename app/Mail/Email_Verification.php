<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Email_Verification extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }


    public function build()
    {
        
        $address = 'admin@maxincome.org';
        $subject = 'User Account Activation';
        $name = 'Account Activation';
        return $this->view('mail.email_verfication')
                    ->from($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject)
                    ->with(['data' => $this->data]);
    }
}
