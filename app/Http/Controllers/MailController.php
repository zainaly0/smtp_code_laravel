<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\WelcomeMail;

class MailController extends Controller
{
    public function sendEmail(){
        $to = "zaidk4076@gmail.com";
        $message = "dummy mail";
        $subject = "code with zaid";
        $response = Mail::to($to)->send(new WelcomeMail($message, $subject));
        // dd($response);
    }
}
