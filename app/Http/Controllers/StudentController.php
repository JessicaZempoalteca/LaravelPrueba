<?php

namespace App\Http\Controllers;

use App\Student;
use App\Group;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('students.index', [
            'students' => Student::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create', [
            'groups' => Group::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $student = new Student();
        $student->enrollment = $request->input('enrollment');
        $student->name = $request->input('name');
        $student->maternal_surname = $request->input('maternal_surname');
        $student->paternal_surname = $request->input('paternal_surname');
        $student->birth_date = $request->input('birth_date');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student->save();
        return redirect()->route('students.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', [
            'student' => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, Student $student)
    {
        $student = Student::find($student->id);
        $student->enrollment = $request->input('enrollment');
        $student->name = $request->input('name');
        $student->maternal_surname = $request->input('maternal_surname');
        $student->paternal_surname = $request->input('paternal_surname');
        $student->birth_date = $request->input('birth_date');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student->save();
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student = Student::find($student->id);
        $student->delete();
        return redirect()->route('students.index');
    }
}
