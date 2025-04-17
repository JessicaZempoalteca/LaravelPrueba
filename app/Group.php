<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'id_group', 
        'name',
        'id_shift',
        'id_semester',
    ];

    public function shift()
    {
        return $this->belongsTo(Shift::class, 'id_shift');
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class, 'id_semester');
    }

    public function groupStudents()
    {
        return $this->hasMany(Group_Student::class, 'id_group');
    }
}
