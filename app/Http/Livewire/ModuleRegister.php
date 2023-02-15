<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\CourseModule;
use App\Models\ModuleRegistration;
use Livewire\Component;
use Symfony\Component\VarDumper\Exception\ThrowingCasterException;

class ModuleRegister extends Component
{

    public $course;
    public $cmodules;
    public array $modules;
    public $total_cost = 0;

    public function mount($courseid)
    {
        $this->course = Course::where('courseid', $courseid)->first();
        $tt = ModuleRegistration::where('userid', auth()->user()->userid)->pluck('moduleid');
        $this->cmodules = CourseModule::where('courseid', $courseid)->whereNotIn('moduleid', $tt->toArray())->get();
        $this->modules = [];
    }
    public function fireModule()
    {
       $this->total_cost = array_sum(array_values($this->modules));
    }
    public function payment()
    {
        $fg = ModuleRegistration::get()->groupBy('bundleid');
        $bundleid = 'BDL'.str_pad($fg->count()+1, 6, 0, STR_PAD_LEFT);
        
        foreach (array_keys($this->modules) as $key => $module) {
            if($this->modules[$module] != false):
                ModuleRegistration::create([
                    'bundleid' => $bundleid, 'moduleid' => $module,'courseid' => $this->course->courseid,
                    'userid' => auth()->user()->userid, 'amount_paid' => floatval($this->modules[$module])
                ]);
            endif;
        }
        return redirect()->route('student.pay.modules', [$bundleid]);
        // return redirect(request()->header('Referer'));
    }
    public function render()
    {
        return view('livewire.module-register');
    }
}
