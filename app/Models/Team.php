<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }

    use HasFactory;
}
