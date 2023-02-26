<?php

namespace App\Http\Controllers;

use App\Mail\SendContactEmail;
use App\Mail\SendServiceEmail;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    
    public function index(Request $request)
    {
        return redirect()->route('frontend.home');
    }
    public function home(Request $request)
    {
        return view('pages.frontend.home');
    }
    public function about(Request $request)
    {
        return view('pages.frontend.about');
    }
    public function course(Request $request)
    {
        $course = Course::latest()->first();
        return view('pages.frontend.course', compact('course'));
    }
    public function accounting(Request $request)
    {
        return view('pages.frontend.accounting');
    }
    public function contact(Request $request)
    {
        return view('pages.frontend.contact');
    }
    public function services(Request $request)
    {
        return view('pages.frontend.services');
    }
    public function it(Request $request)
    {
        return view('pages.frontend.it');
    }
    public function sendMail(Request $request)
    {
        $data = $request->validate([
            'name' => 'required', 'email' => 'required', 'message' => 'required',
            'company' => 'required', 'phone' => 'required', 'address' => 'required'
        ]);
        Mail::to('info@luxdentagency.co.uk')->send(new SendServiceEmail($data));
        return view('pages.frontend.thankyou');
    }
    public function sendContact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required', 'email' => 'required', 'message' => 'required',
            'subject' => 'required', 'phone' => 'required'
        ]);
        Mail::to('info@luxdentagency.co.uk')->send(new SendContactEmail($data));
        return view('pages.frontend.thankyou');
    }
}
