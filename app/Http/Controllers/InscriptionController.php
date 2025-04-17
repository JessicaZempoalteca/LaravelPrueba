<?php

namespace App\Http\Controllers;

use App\Inscription;
use App\Group;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Requests\InscriptionRequest;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inscriptions.index', [
            'inscriptions' => Inscription::all(),
            'inscriptions' => Inscription::all(),
            'groups' => Group::all(),
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
        return view('inscriptions.create', [
            'inscriptions' => Inscription::all(),
            'groups' => Group::all(),
            'students' => Student::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InscriptionRequest $request)
    {
        $inscription = new Inscription();
        $inscription->id_student = $request->id_student;
        $inscription->id_group = $request->id_group;
        $inscription->save();

        return redirect()->route('inscriptions.index')->with('success', 'Inscripción creada correctamente.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Inscription $inscription)
    {
        return view('inscriptions.edit', [
            'inscription' => $inscription,
            'groups' => Group::all(),
            'students' => Student::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function update(InscriptionRequest $request, Inscription $inscription)
    {
        $inscription = Inscription::find($inscription->id);
        $inscription->id_group = $request->input('id_group');
        $inscription->id_student = $request->input('id_student');
        $inscription->save();
        return redirect()->route('inscriptions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inscription $inscription)
    {
        $inscription = Inscription::find($inscription->id);
        $inscription->delete();
        return redirect()->route('inscriptions.index');
    }
}
