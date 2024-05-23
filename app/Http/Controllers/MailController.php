<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerEmail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $details = [
            'title' => 'Mail from YourCompany',
            'body' => $request->message
        ];
    
        Mail::to($request->email)->send(new CustomerEmail($details));
        return back()->with('message_sent', 'Your message has been sent successfully!');
    }
}
