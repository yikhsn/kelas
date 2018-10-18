<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;

class Category extends Model
{
    public function courses()
    {
        return $this->belongsToMany('Course');
    }
}