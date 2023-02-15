<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModule extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::creating(function($model) {
            $model->moduleid = 'MDL'.str_pad(CourseModule::max('id'), 6, 0, STR_PAD_LEFT);
        });
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'courseid', 'courseid');
    }

    public function lessons()
    {
        return $this->hasMany(CourseModuleLesson::class, 'moduleid', 'moduleid');
    }
}
