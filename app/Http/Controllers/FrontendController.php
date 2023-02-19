<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

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
}
