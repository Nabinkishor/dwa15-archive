<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    function courses() {
        return $this->hasMany('App\Course');
    }
}
