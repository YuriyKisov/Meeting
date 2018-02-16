<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailClass extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $title;
    public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $title, $message)
    {

        $this->name = $name;
//        $this->address = $address;
        $this->title = $title;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build($name, $title, $message)
    {
        return $this->view('email.default')->with([
            'name' => $this->$name,
//            'address' => $this->$address,
            'title' => $this->$title,
            'message' => $this->$message
            ]);
    }
}
