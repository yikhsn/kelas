<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\{ Tag, Course, User };

class Part extends Model
{
    public function tags() {
        return $this->belongsToMany('Tag');
    }

    public function courses() {
        return $this->belongsTo('Course');
    }

    public function users(){
        return $this->belongsToMany('User');
    }
}