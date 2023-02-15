<?php

namespace App\Http\Livewire;

use App\Models\ModuleQuestion;
use App\Models\ModuleQuestionAnswer;
use Livewire\Component;

class Quiz extends Component
{
    public $questions;
    public $index = 0;
    public $ansr;
    public array $grades = [];
    public $gradeScore = 0;
    public $maxCount = 0;
    public $showResults = 0;
    public $moduleid;

    public function mount($moduleid)
    {
        $this->questions = ModuleQuestion::where('moduleid', $moduleid)->get();
        $this->maxCount = $this->questions->count() - 1;
        $this->moduleid = $moduleid;
    }

    public function nextQuestion()
    {
        $answer = ModuleQuestionAnswer::where('questionid', $this->questions[$this->index]->questionid)
                    ->where('correct', 1)->first();

        if($answer->answerid === $this->ansr) {
            $grade = [$answer->questionid => 1];
            array_push($this->grades, $grade);
            $this->gradeScore += 1;
        }else{
            $grade = [$answer->questionid => 0];
            array_push($this->grades, $grade);
        }
        if($this->index < $this->maxCount) {
            $this->index = $this->index + 1;
        }
    }

    public function results()
    {
        $this->nextQuestion();
        $this->showResults = 1;
    }

    public function render()
    {
        return view('livewire.quiz');
    }
}
