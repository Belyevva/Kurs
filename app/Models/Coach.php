<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $table = 'coach';
    protected $primaryKey = 'id_coach';
    public $timestamps = false;

    protected $fillable = [
        'name', 'surname', 'phone', 'birth', 'password'
    ];

    public function groups()
    {
        return $this->hasMany(Group::class, 'coach_id', 'id_coach');
    }
}