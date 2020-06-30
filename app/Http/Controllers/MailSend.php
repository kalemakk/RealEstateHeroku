<?php

namespace App\Http\Controllers;

use App\Mail\Mailme;
use Illuminate\Http\Request;

class MailSend extends Controller
{
    public function mailsend(Request $request){
        $subject = $request->get('mail_subject');
        $body = $request->get('mail_body');
        $name = $request->get('name');
        $phone = $request->get('phone');
        $email = $request->get('email');




//        $messag = [
//            'title' => 'Title: Mail from Real Programmer',
//            'body' => 'Body: This is for testing email using smtp'
//        ];


        $messag = [
            'body' => $body,
            'subject' => $subject,
            'phone' => $phone,
            'email' => $email,
        ];


        \Mail::to('kalemarnld@gmail.com')->send(new \App\Mail\Mailme($messag,$name));

//        return view('emails.thanks');
        return dd($messag);
    }
}
