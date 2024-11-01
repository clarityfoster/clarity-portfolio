<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    public function essence() {
        return $this->belongsTo('App\Models\Essence');
    }
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
