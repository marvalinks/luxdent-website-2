<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleRegistration extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function module()
    {
        return $this->belongsTo(CourseModule::class, 'moduleid', 'moduleid');
    }
    public function course()
    {
        return $this->belongsTo(Course::class, 'courseid', 'courseid');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'userid', 'userid');
    }
}
