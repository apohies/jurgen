<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;


class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $usuario= new Usuario();

          $usuario->nombres= $request->nombres;
          $usuario->apellidos= $request->apellidos;
          $usuario->documento= $request->documento;
         
          $usuario->lugarExpedicion=$request->lugarExpedicion;
          $usuario->fechaExpedicion = $request->fechaExpedicion;
          $usuario->numeroDocumento=$request->numeroDocumento;
         
          $usuario->rh = $request->rh;
          $usuario->fechaNacimiento = $request->fechaNacimiento;
          $usuario->lugarNacimiento = $request->lugarNacimiento;
          $usuario->sexo = $request->sexo;
          $usuario->telefono = $request->telefono;
          $usuario->celular = $request->celular ;
          $usuario->direccion = $request->direccion ;
         
          $usuario->email = $request->email;

          $usuario->save();

          return 'true';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
