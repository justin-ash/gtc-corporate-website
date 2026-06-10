<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Milestone;
use App\Models\NewsletterSubscriber;
use App\Models\Project;
use App\Models\Testimonial;
use App\Models\Widget;
use Illuminate\Support\Facades\Mail;
use App\Models\SeoPage;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::where('is_active', 1)->get();
        $widgets = Widget::formatWidgets(['home', 'about', 'header', 'footer', 'sidebar']);
        $seo = SeoPage::seoByPage('home');
        $projects = Project::where('is_active', 1)->orderBy('id', 'asc')->limit(4)->get();
        $banners = Banner::where('is_active', 1)->orderBy('id', 'asc')->get();
        $services = Service::where('is_active', 1)->get();
        return view('home', compact('testimonials', 'widgets', 'seo', 'projects', 'banners', 'services'));
    }

    public function contact()
    {

        $widgets = Widget::formatWidgets(['contact', 'header', 'footer', 'sidebar']);
        $seo = SeoPage::seoByPage('contact');
        return view('contact', compact('widgets', 'seo'));
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns|max:255',
            'phone' => 'required|digits_between:10,15',
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
            'message' => 'Message sent successfully!',
            'csrf_token' => csrf_token()
        ]);
    }

    public function about()
    {
        $widgets = Widget::formatWidgets(['about', 'header', 'footer', 'sidebar']);
        $seo = SeoPage::seoByPage('about');
        $milestones = Milestone::orderBy('year', 'asc')->get();
        return view('about', compact('widgets', 'seo', 'milestones'));
    }

    public function services()
    {
        $widgets = Widget::formatWidgets(['services', 'header', 'footer', 'sidebar']);
        $seo = SeoPage::seoByPage('services');
        $services = Service::where('is_active', 1)->get();

        return view('services', compact('widgets', 'seo', 'services'));
    }

    public function projects()
    {
        $widgets = Widget::formatWidgets(['projects', 'header', 'footer', 'sidebar']);
        $seo = SeoPage::seoByPage('portfolio');
        $projects = Project::where('is_active', 1)->get();
        return view('projects', compact('widgets', 'seo', 'projects'));
    }

    public function projectBySlug(Request $request, $slug)
    {
        $widgets = Widget::formatWidgets(['project', 'header', 'footer', 'sidebar']);
        $seo = SeoPage::seoByPage($slug);
        $project = Project::where('is_active', 1)->where('slug', $slug)->first();
        return view('project-detail', compact('widgets', 'seo', 'project'));
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
