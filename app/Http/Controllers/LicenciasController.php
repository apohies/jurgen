<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Licencia;
use Carbon\Carbon;
use App\Usuario;
use Illuminate\Support\Facades\DB;


class LicenciasController extends Controller
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
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fecha_actual=Carbon::now();
        $usuario=Usuario::where('numeroDocumento',$request->documento)->first();

        $licencia=json_decode(DB::table('licencias')
                            ->where('usuarios_id',$usuario->id)
                            ->orWhere('estado','En Proceso')
                            ->orWhere('estado','Activa')
                            ->get());

              if(empty($licencia)){
                            

                $licencia=new Licencia();
                $licencia->usuarios_id=$usuario->id;
                $licencia->numero_licencia=(string)rand(12345,99999);
                $licencia->fechaExpedicion=$fecha_actual;
                $licencia->fechaVecimiento=$fecha_actual;
                $licencia->categoriaLicencia=$request->categoriaLicencia;
                $licencia->OficinaExpedicion="SDM-BOGOTA D.C";
                $licencia->save();

                return response()->json($licencia);

              }

              return response('solicitud invalida el usuario ya tiene un licencia Activa',404);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($licencium)
    {
        $licencia=json_decode(Licencia::join('usuarios','usuarios.id','=','licencias.usuarios_id')
                                    ->select('usuarios.nombres','usuarios.apellidos','licencias.*')
                                      ->where('usuarios.numeroDocumento',$licencium)  
                                      ->get()->toJson());


             if(empty($licencia))
                {
                    return response('no existe licencia con ese numero de documento');
                }

            return response()->json($licencia); 

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
