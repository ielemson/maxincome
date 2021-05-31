<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Password_Recovery extends Mailable
{
    use Queueable, SerializesModels;

    public  $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

   
    public function build()
    {
        $address = 'admin@maxincome.org';
        $subject = 'Password Recovery';
        $name = 'Maxincome Investment Ltd.';
        return $this->view('mail.password_recovery')
                    ->from($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject)
                    ->with(['data' => $this->data]);
    }
}
