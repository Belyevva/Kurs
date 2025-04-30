<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    protected $table = 'athletes';
    protected $primaryKey = 'id_athlet';
    public $timestamps = false;

    protected $fillable = [
        'name', 'surname', 'phone', 'birth', 'parent', 'phone_parent'
    ];

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'groups_athletes', 'athlet_id', 'group_id');
    }
}