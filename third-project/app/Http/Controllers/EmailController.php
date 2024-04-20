<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class EmailController extends Controller
{
    public function sendSubscriberEmail()
    {
        $title = 'New Blog Post Has Arrived';
        $body = 'Visit Katen Website For New Blog Related Information. Thank you for participating!';
        $subscribers = Subscriber::all();

        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->subscriber_email)->send(new SubscriberMail($title, $body));
        }

        return "Email sent successfully!";
    }
}
