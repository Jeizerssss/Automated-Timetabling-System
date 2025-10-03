<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimetableRoom extends Model
{
    protected $fillable = [
        'room_id',
        'timetable_id',
    ];

    public function room(){
        return $this->belongsTo(Room::class);
    }

    public function timetable(){
        return $this->belongsTo(Timetable::class);
    }
}
