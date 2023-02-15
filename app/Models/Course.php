<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::creating(function($model) {
            $model->courseid = 'CRS'.str_pad(Course::max('id'), 6, 0, STR_PAD_LEFT);
        });
    }

    public function modules()
    {
        return $this->hasMany(CourseModule::class, 'courseid', 'courseid');
    }
}
