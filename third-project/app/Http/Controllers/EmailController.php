<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Subscriber, SendSubscriber, Blog};
use Illuminate\Support\Facades\Mail;
use App\Mail\{SubscriberMail, ContactMail};

class EmailController extends Controller
{
    public function sendSubscriberEmail()
    {
        $title = 'New Blog Post Has Arrived';
        $body = 'Visit Katen Website For New Blog Related Information. Thank you for participating!';
        $subscribers = Subscriber::all();

        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->subscriber_email)->queue(new SubscriberMail($title, $body));
        }
        SendSubscriber::first()->update([
            'last_total_blog'=> Blog::all()->count(),
        ]);

        return back()->with('EmlSntMsg','Email Sent Successfully');
    }

    public function ContactEmail(Request $request){
        $request->validate([
            'contact_name'=>'required',
            'contact_email'=>'required',
            'contact_subject'=>'required',
            'contact_message'=>'required',
        ]);

        Mail::to($request->contact_email)->send(new ContactMail($request->contact_name, $request->contact_subject, $request->contact_message));

        return back()->with('CntMsg','Message Sent Successfully');
    }
}
