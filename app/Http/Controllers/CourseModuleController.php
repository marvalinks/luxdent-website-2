<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseModule;
use App\Models\CourseModuleLesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CourseModuleController extends Controller
{
    
    public function index(Request $request)
    {
        $courses = Course::latest()->paginate(20);
        return view('pages.admin.courses.index', compact('courses'));
    }
    public function addCourse(Request $request)
    {
        return view('pages.admin.courses.add');
    }
    public function postCourse(Request $request)
    {
        $data = $request->validate([
            'title' => 'required', 'description' => 'required'
        ]);

        Course::create($data);
        $request->session()->flash('alert-success', 'Courses successfully submitted');
        return redirect()->route('admin.courses.index');

    }
    public function editCourse(Request $request, $id)
    {
        $course = Course::where('courseid', $id)->first();
        return view('pages.admin.courses.edit', compact('course'));
    }
    public function updateCourse(Request $request, $id)
    {
        $course = Course::where('courseid', $id)->first();
        $data = $request->validate([
            'title' => 'required', 'description' => 'required'
        ]);

        $course->update($data);
        $request->session()->flash('alert-success', 'Courses successfully updated');
        return redirect()->route('admin.courses.index');
    }

    public function modules(Request $request, $id)
    {
        $course = Course::where('courseid', $id)->first();
        return view('pages.admin.modules.index', compact('course'));
    }
    public function addModules(Request $request, $id)
    {
        $course = Course::where('courseid', $id)->first();
        return view('pages.admin.modules.add', compact('course'));
    }
    public function postModules(Request $request, $id)
    {
        $course = Course::where('courseid', $id)->first();
        $data = $request->validate([
            'name' => 'required', 'cost' => 'required'
        ]);
        $data['courseid'] = $id;
        CourseModule::create($data);
        $request->session()->flash('alert-success', 'Courses module successfully added');
        return redirect()->route('admin.courses.modules.index', [$id]);
    }
    public function editModules(Request $request, $id)
    {
        $module = CourseModule::where('moduleid', $id)->first();
        return view('pages.admin.modules.edit', compact('module'));
    }
    public function updateModules(Request $request, $id)
    {
        $module = CourseModule::where('moduleid', $id)->first();
        $data = $request->validate([
            'name' => 'required', 'cost' => 'required'
        ]);
        $module->update($data);
        $request->session()->flash('alert-success', 'Courses module successfully updated');
        return redirect()->route('admin.courses.modules.index', [$module->course->courseid]);
    }
    public function lessons(Request $request, $id)
    {
        $module = CourseModule::where('moduleid', $id)->first();
        return view('pages.admin.lessons.index', compact('module'));
    }
    public function addLessons(Request $request, $id)
    {
        $module = CourseModule::where('moduleid', $id)->first();
        return view('pages.admin.lessons.add', compact('module'));
    }
    public function postLessons(Request $request, $id)
    {
        $module = CourseModule::where('moduleid', $id)->first();
        $data = $request->validate([
            'title' => 'required', 'description' => 'required', 'video_url' => 'required',
            'audio_url' => '', 'duration' => 'required'
        ]);
        if ($request->notes) {
            $path = Storage::disk('do')->put('pdfs', request()->notes, 'public');
            $data['notes_url'] = env('DO_URL').'/'.$path;
        }
        $data['moduleid'] = $id;
        CourseModuleLesson::create($data);
        $request->session()->flash('alert-success', 'Courses lesson successfully uploaded');
        return redirect()->route('admin.courses.lessons.index', [$id]);
    }
    public function editLessons(Request $request, $id)
    {
        $lesson = CourseModuleLesson::where('lessonid', $id)->first();
        return view('pages.admin.lessons.edit', compact('lesson'));
    }
    public function updateLessons(Request $request, $id)
    {
        $lesson = CourseModuleLesson::where('lessonid', $id)->first();
        $data = $request->validate([
            'title' => 'required', 'description' => 'required', 'video_url' => '',
            'audio_url' => '',
        ]);
        if ($request->notes) {
            $path = Storage::disk('do')->put('pdfs', request()->notes, 'public');
            $data['notes_url'] = env('DO_URL').'/'.$path;
        }
        $lesson->update($data);
        $request->session()->flash('alert-success', 'Courses lesson successfully updated');
        return redirect()->route('admin.courses.lessons.index', [$lesson->module->moduleid]);
    }
}
