<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $fillable = [
        'id_semester', 
        'name', 
        'number'
    ];

    public function groups()
    {
        return $this->hasMany(Group::class, 'id_semester');
    }
}
