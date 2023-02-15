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
    public function syllabus(Request $request)
    {
        $course = Course::latest()->first();
        return view('pages.frontend.syllabus', compact('course'));
    }
    public function contact(Request $request)
    {
        return view('pages.frontend.contact');
    }
    public function application(Request $request)
    {
        return view('pages.frontend.application');
    }
    public function support(Request $request)
    {
        return view('pages.frontend.support');
    }
}
