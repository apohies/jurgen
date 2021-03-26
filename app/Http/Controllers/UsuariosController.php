<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Usuario;
use App\Cursos;
use App\Examen;
use App\Simit;


class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$usuarios=Usuario::all();

      //return response()->json($usuarios);
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
        
     
         $simit = new Simit;
        
        $simit->usuario_id=(int)$request->usuario_id;
        $simit->codigoInfraccion=$request->codigoInfraccion;
        $simit->descripcionCodigo=$request->descripcionCodigo;
        $simit->fechaInfraccion=$request->fechaInfraccion;
        $simit->save();


        
        return response()->json($simit);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($usuario)
    {
        
        $usuarios=DB::table('usuarios')
        ->select('usuarios.*',
            'cursos.NombreInstitucion','cursos.numeroCertificacion','cursos.categoriaCertificacion','cursos.fechaCertificacion',
            'examens.nombreInstitucion','examens.direccionInstitucion','examens.tipoSangre','examens.nombreMedico','examens.fechaExamen','examens.restriccion',
            'simits.codigoInfraccion','simits.descripcionCodigo','simits.fechaInfraccion'
            )
                ->leftjoin('cursos','cursos.usuario_id','=','usuarios.id')
                ->leftjoin('examens','examens.usuario_id','=','usuarios.id')
                ->leftjoin('simits','simits.usuario_id','=','usuarios.id')
        
        ->where('usuarios.numeroDocumento',$usuario)
        ->first();

    

        if(empty($usuarios->nombres) == false )
        {
            
                    return response()->json($usuarios);

          
        }
        return " No existe Registro relacionado";
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
