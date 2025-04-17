<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'id_student', 
        'enrollment', 
        'name', 
        'maternal_surname', 
        'paternal_surname', 
        'birth_date', 
        'email', 
        'phone'
    ];

    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class, 'grupo_id');
    }

    public function groupStudents()
    {
        return $this->hasMany(Group_Student::class, 'id_student');
    }
}
