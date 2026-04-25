<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\NewsletterSubscriber;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Save to DB
        $contact = Contact::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'message' => $validated['message'],
            'is_read' => 0
        ]);

        // Send Mail
        Mail::send('emails.contact', ['data' => $contact], function ($message) {
            $message->to('justinjoseph287@gmail.com') // change this
                ->subject('New Contact Form Submission');
        });

        return response()->json([
            'status' => true,
            'message' => 'Message sent successfully!'
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function projects()
    {
        return view('projects');
    }

    public function divisions()
    {
        return view('divisions');
    }

    public function subscribe(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email'
        ]);

        NewsletterSubscriber::create([
            'email' => $validated['email'],
            'is_active' => 1
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Subscribed successfully!'
        ]);
    }
}
