<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;

class Level extends Model
{
    public function courses() {
        return $this->hasMany('Course');
    }
}
