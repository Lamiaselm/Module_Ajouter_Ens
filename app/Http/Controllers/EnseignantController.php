<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enseignant;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enseignant=Enseignant::all();
        return response()->json($enseignant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enseignant=new Enseignant();
        $enseignant->nom=$request->nom;
        $enseignant->prenom=$request->prenom;
        $enseignant->email=$request->email;
        $enseignant->date_naissance=$request->date_naissance;
        $enseignant->specialite=$request->specialite;
        $enseignant->licence=$request->licence;
        $enseignant->master=$request->master;
        $enseignant->doctorat=$request->doctorat;
        $enseignant->experience=$request->experience;
        $enseignant->save();
        return response()->json($enseignant);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
