<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Coach;

class Group extends Model
{
    protected $table = 'groups';
    protected $primaryKey = 'id_group';
    public $timestamps = false;

    protected $fillable = [
        'name', 'coach_id', 'time', 'day_of_week'
    ];

    public function coach()
    {
        return $this->belongsTo(Coach::class, 'coach_id', 'id_coach');
    }

    public function athletes()
    {
        return $this->belongsToMany(Athlete::class, 'groups_athletes', 'group_id', 'athlet_id');
    }
}