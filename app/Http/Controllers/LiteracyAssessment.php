<?php

namespace App\Http\Controllers;

use App\Models\CourseModule;
use App\Models\ModuleQuestion;
use App\Models\ModuleQuestionAnswer;
use Illuminate\Http\Request;

class LiteracyAssessment extends Controller
{
    public function adminIndex(Request $request, $id)
    {
        $questions = ModuleQuestion::where('moduleid', $id)->latest()->paginate(20);
        $module = $id;
        return view('pages.admin.questions.index', compact('questions', 'module'));
    }
    public function adminAdd(Request $request, $id)
    {
        $module = CourseModule::where('moduleid', $id)->first();
        return view('pages.admin.questions.add', compact('module'));
    }
    public function adminPost(Request $request, $id)
    {
        
        $module = CourseModule::where('moduleid', $id)->first();
        $data = $request->validate([
            'question' => 'required', 'answer_1' => 'required', 'answer_2' => 'required', 'answer_3' => 'required',
            'answer_4' => 'required', 'correct_answer' => 'required'
        ]);
        $question = ModuleQuestion::create([
            'moduleid' => $id, 'question' => $data['question']
        ]);
        for($i=1; $i < 5; $i++) {
            $vb = 'answer_'.$i;
            ModuleQuestionAnswer::create([
                'questionid' => $question->questionid, 'answer' => $data[$vb],
                'correct' => $data['correct_answer'] == $vb ? 1 : 0
            ]);
        }
        $request->session()->flash('alert-success', 'Question registered.');
        return back();
    }
    public function adminEdit(Request $request, $id)
    {
        $question = ModuleQuestion::where('questionid', $id)->first();
        return view('pages.admin.questions.edit', compact('question'));
    }
    public function adminUpdate(Request $request, $id)
    {
        // dd($request->all());
        $question = ModuleQuestion::where('questionid', $id)->first();
        $data = $request->validate([
            'question' => 'required', 'answer_1' => 'required', 'answer_2' => 'required', 'answer_3' => 'required',
            'answer_4' => 'required', 'correct_answer' => 'required'
        ]);
        $question->update(['question' => $data['question']]);
        $answers = ModuleQuestionAnswer::where('questionid', $id)->get();
        foreach ($answers as $key => $answer) {
            $answer->delete();
        }
        for($i=1; $i < 5; $i++) {
            $vb = 'answer_'.$i;
            ModuleQuestionAnswer::create([
                'questionid' => $question->questionid, 'answer' => $data[$vb],
                'correct' => $data['correct_answer'] == $vb ? 1 : 0
            ]);
        }
        $request->session()->flash('alert-success', 'Question updated.');
        return redirect()->route('admin.questions.index', [$question->moduleid]);
    }
}
