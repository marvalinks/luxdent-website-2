<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AskQuestion extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(Course::class, 'courseid', 'courseid');
    }
    public function module()
    {
        return $this->belongsTo(CourseModule::class, 'moduleid', 'moduleid');
    }
    public function lesson()
    {
        return $this->belongsTo(CourseModuleLesson::class, 'lessonid', 'lessonid');
    }
}
