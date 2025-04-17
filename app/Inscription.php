<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = [
        'id_inscription',
        'id_student',
        'id_group',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class, 'id_group');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'id_student');
    }
}
