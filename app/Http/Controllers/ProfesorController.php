<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index la pagina por defecto
        $profesores = Profesor::all();
        return view("Profesor.listado",["profesores"=>$profesores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //devolver la vista para crear un profesor
        return view("Profesor.nuevo");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //guardar el profesor creado
        $profesor = new Profesor($request->input());//guardar valores del input y crear un objeto
        $profesor->saveOrFail();//aqui guardo en la base de datos
        //recoge todos los profesores y paso a la vista
        $profesores = Profesor::all();
        return view("Profesor.listado",['profesores'=>$profesores,'msj'=>"El profesor $profesor->nombre ha sido insertado"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show(Profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesor $profesor)
    {
        return view("Profesor.edit",["profesor"=>$profesor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profesor $profesor)
    {
        $profesor->fill($request->input())->saveOrFail();//Actualizar los campos modificado
        $profesores = Profesor::all();
        return view("Estudiante.listado",["estudiantes"=>$profesores,"msj"=>"El Profesor $profesor->nombre ha sido modificado"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesor $profesor)
    {
        //borrar un profesor que llega por el parametro
        $profesor->delete();//borrar un alumno
        $profesores = Profesor::all();
        return view("Profesor.listado",["profesores"=>$profesores,"msj"=>"El profesor $profesor->nombre se ha borrado"]);
    }
}
