<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModuleLesson extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::creating(function($model) {
            $model->lessonid = 'LSS'.str_pad(CourseModuleLesson::max('id'), 6, 0, STR_PAD_LEFT);
        });
    }

    public function module()
    {
        return $this->belongsTo(CourseModule::class, 'moduleid', 'moduleid');
    }
}
