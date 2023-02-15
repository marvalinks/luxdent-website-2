<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleQuestionAnswer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::creating(function($model) {
            $model->answerid = 'MA'.str_pad(ModuleQuestionAnswer::max('id'), 6, 0, STR_PAD_LEFT);
        });
    }
}
