<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function students() {
        return $this->belongsToMany('App\Student')->withTimestamps();
    }

    public function department() {
        return $this->belongsTo('App\Department');
    }

    public static function getNewestCourses() {
        return Course::orderBy('id')->limit(3)->get();
    }
}
