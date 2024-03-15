<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events_update extends Model
{
    protected $table="events_update";
    protected $primaryKey = "Event_ID";
    public function participants()
    {
        return $this->belongsToMany(Participant::class);
    }
    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
    use HasFactory;
}
