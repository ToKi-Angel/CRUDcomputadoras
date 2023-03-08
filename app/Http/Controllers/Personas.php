<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class Personas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = 'Inicio CRUD';
        $items = Persona::all();
        return view('index', compact('titulo','items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = 'Agregar nueva persona';
        return view('create', compact('titulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Persona();
        $item->nombre=$request->nombre;
        $item->marca=$request->marca;
        $item->modelo=$request->modelo;
        $item->ram=$request->ram;
        $item->procesador=$request->procesador;
        $item->discoDuro=$request->discoDuro;
        $item->descripcion=$request->descripcion;
        $item->imagen=$request->imagen;
        $item->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $titulo = "Eliminar persona";
        $items = Persona::find($id);
        return view("eliminar", compact('items', 'titulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulo = 'Actualizar equipo';
        $items = Persona::find($id);
        return view('edit', compact('items', 'titulo'));
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
        $item = Persona::find($id);
        $item->nombre=$request->nombre;
        $item->marca=$request->marca;
        $item->modelo=$request->modelo;
        $item->ram=$request->ram;
        $item->procesador=$request->procesador;
        $item->discoDuro=$request->discoDuro;
        $item->descripcion=$request->descripcion;
        $item->imagen=$request->imagen;
        $item->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Persona::find($id);
        $item->delete();
        return redirect('/');
    }
}
