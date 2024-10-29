<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Collect details for the email
        $detail = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        Mail::to('cherrymyintmo552@gmail.com')->send(new ContactMessage($detail));

        return back()->with('message-contact', 'Thanks for sending feedback!');
    }
}
