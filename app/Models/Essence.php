<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Essence extends Model
{
    use HasFactory;
    public function card() {
        return $this->hasMany('App\Models\Card');
    }
}
