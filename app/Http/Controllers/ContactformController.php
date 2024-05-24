<?php

namespace App\Http\Controllers;

use App\Mail\ContatMailtwo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactformController extends Controller
{
    public function contactStoreMail(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $msg = $request->input('message');
        $subject = $request->input('subject');
        $phone = $request->input('phone');
        $tomail="Ziosdeli2022@gmail.com";
//        $tomail="ak.amittkundu@gmail.com";

        Mail::to($tomail)->send(new ContatMailtwo($name, $email, $msg, $subject, $phone));

        // Optionally, you can check if the email was sent successfully
        // if (Mail::failures()) {
        //     // Handle failure
        //     return 'Email failed to send';
        // }

        return back();
    }

    public function  Mailtest(){
        $name = "John Doe";
        $email = "ak.amittkundu@gmail.com";
        $msg = "Hello, this is a test message!";
        $subject = "Test Subject";
        $phone = "1234567890";

        // Change the email address to the recipient's email
        $recipientEmail = "ak.amittkundu@gmail.com";

        Mail::to($recipientEmail)->send(new ContatMailtwo($name, $email, $msg, $subject, $phone));

        return "Email sent successfully!";
    }

}
