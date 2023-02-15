<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleQuestion extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::creating(function($model) {
            $model->questionid = 'MQ'.str_pad(ModuleQuestion::max('id'), 6, 0, STR_PAD_LEFT);
        });
    }

    public function answers()
    {
        return $this->hasMany(ModuleQuestionAnswer::class, 'questionid', 'questionid');
    }
    public function module()
    {
        return $this->belongsTo(CourseModule::class, 'moduleid', 'moduleid');
    }
}
