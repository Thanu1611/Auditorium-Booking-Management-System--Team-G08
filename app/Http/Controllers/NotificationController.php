<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendNotification(Request $request)
    {
        // Retrieve the admin's specific data, such as email and name
        $adminEmail = 'admin@example.com';
        $adminName = 'Admin Name';

        // Replace 'recipient@example.com' with the recipient's email
        Mail::send('email.template', $data, function ($message) use ($adminEmail, $adminName) {
            $message->to('recipient@example.com');
            $message->subject('Email Subject');
            $message->from($adminEmail, $adminName);
        });

        // Handle the response, redirect, or return a view as needed
    }
}
