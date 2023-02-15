<?php

namespace App\Http\Controllers;

use App\Models\AskQuestion;
use App\Models\Course;
use App\Models\CourseModule;
use App\Models\CourseModuleLesson;
use App\Models\ModuleQuestion;
use App\Models\ModuleRegistration;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StudentModuleController extends Controller
{
    
    public function dashboard(Request $request)
    {
        $registration = ModuleRegistration::where('userid', auth()->user()->userid)->get();
        if($registration->count() < 1) {
            return redirect()->route('student.register.course');
        }
        return redirect()->route('student.my.courses');
    }
    public function registerCourse(Request $request)
    {
        $courses = Course::latest()->paginate(20);
        return view('pages.student.courses.register-course', compact('courses'));
    }
    public function registerModules(Request $request, $id)
    {
        $course = Course::where('courseid', $id)->first();
        return view('pages.student.courses.register-modules', compact('course'));
    }
    public function payModules(Request $request, $id)
    {
        $bundles = ModuleRegistration::where('bundleid', $id)->latest()->get();
        $bundleid = $id;
        return view('pages.student.courses.pay-modules', compact('bundles', 'bundleid'));
    }
    public function payModulesPost(Request $request, $id)
    {
        $bundles = ModuleRegistration::where('bundleid', $id)->latest()->get();
        $data = $request->validate(['reference' => 'required']);
        foreach ($bundles as $key => $bundle) {
            $bundle->reference = $data['reference'];
            $bundle->save();
        }
        $request->session()->flash('alert-success', 'Reference successfully submitted');
        return redirect()->route('student.dashboard');
    }

    public function myCourses(Request $request)
    {
        $courses = Course::latest()->paginate(20);
        return view('pages.student.courses.my-courses', compact('courses'));
    }
    public function myCoursesModules(Request $request, $id)
    {
        $course = Course::where('courseid', $id)->first();
        $registrations = ModuleRegistration::where('userid', auth()->user()->userid)->where('courseid', $id)->where('verified', 1)->orderBy('moduleid', 'asc')->get();
        
        if(count($registrations) < 1) {
            $request->session()->flash('alert-danger', 'Sorry course not registered');
            return back();
        }
        return view('pages.student.courses.my-courses-modules', compact('course', 'registrations'));
    }
    public function myLesson(Request $request, $id)
    {
        $lesson = CourseModuleLesson::where('lessonid', $id)->first();
        $registration = ModuleRegistration::where('userid', auth()->user()->userid)->where('moduleid', $lesson->module->moduleid)->where('verified', 1)->first();
        $questions = AskQuestion::where('userid', auth()->user()->userid)->where('lessonid', $id)->orderBy('created_at', 'desc')->paginate(50);
        if(!$registration) {
            $request->session()->flash('alert-danger', 'Sorry module not registered');
            return back();
        }
        return view('pages.student.courses.lesson', compact('lesson', 'questions'));
    }
    public function myPayments(Request $request)
    {
        $payments = ModuleRegistration::where('userid', auth()->user()->userid)->latest()
                    ->paginate(50)->groupBy('bundleid');
        return view('pages.student.settings.payments', compact('payments'));
    }
    public function support(Request $request)
    {
        $modules = ModuleRegistration::where('userid', auth()->user()->userid)->where('verified', 1)->orderBy('moduleid', 'asc')->get();
        $questions = AskQuestion::whereNotNull('answer')->orderBy('created_at', 'desc')->paginate(5);
        return view('pages.student.settings.support', compact('modules', 'questions'));
    }
    public function myQuestions(Request $request)
    {
        $modules = ModuleRegistration::where('userid', auth()->user()->userid)->where('verified', 1)->orderBy('moduleid', 'asc')->get();
        $questions = AskQuestion::where('userid', auth()->user()->userid)->orderBy('created_at', 'desc')->paginate(50);
        return view('pages.student.settings.my-questions', compact('modules', 'questions'));
    }
    public function postSupport(Request $request)
    {
        $data = $request->validate(['moduleid' => 'required', 'question' => 'required', 'lessonid' => 'required']);
        $module = CourseModule::where('moduleid', $data['moduleid'])->first();
        $data['courseid'] = $module->course->courseid;
        $data['userid'] = auth()->user()->userid;
        $data['slug'] = Str::slug($data['question']);
        AskQuestion::create($data);
        $request->session()->flash('alert-success', 'Question submitted for review.');
        return back();
    }
    public function myAccount(Request $request)
    {
        return view('pages.student.settings.account');
    }
    public function postMyAccount(Request $request)
    {
        $data = $request->validate([
            'name' => 'required', 'email' => 'required', 'telephone' => ''
        ]);
        if ($request->photo) {
            $path = Storage::disk('do')->put('profiles', request()->photo, 'public');
            $data['photo_url'] = env('DO_URL').'/'.$path;
        }
        $user = User::where('userid', auth()->user()->userid)->first();
        $user->update($data);
        $request->session()->flash('alert-success', 'Profile updated.');
        return back();
    }
    public function completeProfile(Request $request)
    {
        $data = $request->validate([
            'telephone' => 'required', 'address' => 'required', 'dob' => 'required',
            'insurance_number' => 'required', 'nationality' => 'required'
        ]);
        if ($request->cv) {
            $path = Storage::disk('do')->put('cv', request()->cv, 'public');
            $data['cv'] = env('DO_URL').'/'.$path;
        }
        $data['userid'] = auth()->user()->userid;
        UserProfile::create($data);
        $request->session()->flash('alert-success', 'Profile completed.');
        return redirect()->route('student.dashboard');
    }

    public function quiz(Request $request, $id)
    {
        $moduleid = $id;
        return view('pages.student.courses.quiz', compact('moduleid'));
    }

}
