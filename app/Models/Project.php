<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function category() { 
        return $this->belongsTo('App\Models\Category');
    } 
    public function feature() {
        return $this->hasMany('App\Models\Feature');
    }
    public function tech() {
        return $this->hasMany('App\Models\Tech');
    }
}
