<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Part;

class Tag extends Model
{
    public function parts() {
        return $this->belongsToMany('Part');
    }
}