<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    function courses() {
        return $this->belongsToMany('App\Course')->withTimestamps();
    }
}
