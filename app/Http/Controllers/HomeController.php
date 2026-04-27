<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\NewsletterSubscriber;
use App\Models\Project;
use App\Models\Testimonial;
use App\Models\Widget;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::where('is_active', 1)->get();
        $widgets = Widget::formatWidgets(['home', 'header', 'footer', 'sidebar']);
        return view('home', compact('testimonials', 'widgets'));
    }

    public function contact()
    {

        $widgets = Widget::formatWidgets(['contact', 'header', 'footer', 'sidebar']);
        return view('contact', compact('widgets'));
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
        $widgets = Widget::formatWidgets(['about', 'header', 'footer', 'sidebar']);
        return view('about', compact('widgets'));
    }

    public function services()
    {
        $widgets = Widget::formatWidgets(['services', 'header', 'footer', 'sidebar']);
        return view('services', compact('widgets'));
    }

    public function projects()
    {
        $widgets = Widget::formatWidgets(['projects', 'header', 'footer', 'sidebar']);
        return view('projects', compact('widgets'));
    }

    public function project(Request $request)
    {
        $widgets = Widget::formatWidgets(['project', 'header', 'footer', 'sidebar']);
        return view('project-detail', compact('widgets'));
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
