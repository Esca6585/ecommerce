<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterEmail extends Mailable
{
    use Queueable, SerializesModels;
    
    private $email_data = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->email_data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = $this->email_data;

        $text = 'Hoşgeldiňiz ' . $this->email_data['name'] . '!';

        return $this->from(env('MAIL_USERNAME', 'Esca Meredoff'))->subject($text)->view('mail.register-email', compact('data'));
    }
}
