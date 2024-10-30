<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function sendMessage()
    {
        $validator = Validator(request()->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator)->withFragment('contact');
        }

        $detail = [
            'name' => request()->input('name'),
            'email' => request()->input('email'),
            'message' => request()->input('message'),
        ];

        Mail::to('cherrymyintmo552@gmail.com')->send(new ContactMessage($detail));

        return back()->with('message-contact',[ 
            'Thanks for contacting us!',
            'We\'ll contact you back as soon as possible.',
        ])->withFragment('contact');
    }
}
