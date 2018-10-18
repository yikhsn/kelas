<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\{ Part,Category, User, Level };

class Course extends Model
{
    public function parts(){
        return $this->hasMany('Part');
    }

    public function categories(){
        return $this->belongsToMany('Category');
    }

    public function users() {
        return $this->belongsToMany('User');
    }

    public function levels(){
        return $this->belongsTo('Level');
    }
}