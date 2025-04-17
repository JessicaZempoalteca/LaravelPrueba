<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $fillable = [
        'id_shift', 
        'name'
    ];

    public function groups()
    {
        return $this->hasMany(Group::class, 'id_shift');
    }
}
