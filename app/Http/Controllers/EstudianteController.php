<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //guardar todos los estudiantes
        $estudiantes = Estudiante::all();
        return view("Estudiante.listado",["estudiantes"=>$estudiantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //devolver la vista para crear
        return view("Estudiante.nuevo");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Guardar todos los valores que me llegan al insertar
        $estudiante = new Estudiante($request->input());//guardar valores del input y crear un objeto
        $estudiante->saveOrFail();//aqui guardo en la base de datos
        //recoge todos los alumnos y paso a la vista
        $estudiantes = Estudiante::all();
        return view("Estudiante.listado",['estudiantes'=>$estudiantes,'msj'=>"El estudiante $estudiante->nombre ha sido insertado"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        //Editar un alumno y devolvemos a la vista
        return view("Estudiante.edit",["estudiante"=>$estudiante]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        $estudiante->fill($request->input())->saveOrFail();//Actualizar los campos modificado
        $estudiantes = Estudiante::all();
        return view("Estudiante.listado",["estudiantes"=>$estudiantes,"msj"=>"El estudiante $estudiante->nombre ha sido modificado"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();//borrar un alumno
        $estudiantes = Estudiante::all();
        return view("Estudiante.listado",["estudiantes"=>$estudiantes,"msj"=>"El estudiante $estudiante->nombre se ha borrado"]);
    }
}
