<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Mail\Mailer;
use PHPMailer\PHPMailer\PHPMailer;

class MailSetting extends Controller
{
    /**
     * @param Request $request
     */
    public function send(Request $request) {
        $name = $request->name;
//        $address = $request->address;
        $title = $request->title;
        /** @var TYPE_NAME $message */
        $message = $request->message;

        Mail::to('kisov.yuriy@gmail.com')->send(new MailClass($name, $title, $message));

    }
}
