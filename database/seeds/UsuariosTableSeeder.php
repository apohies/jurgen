<?php

use Illuminate\Database\Seeder;
use App\Usuario;
use App\Cursos;
use App\Examen;
use App\Simit;
use Carbon\Carbon;
use App\Licencia;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $usuario= new Usuario();
        $usuario->nombres='MIGUEL ANGEL';
        $usuario->apellidos='MORENO PAEZ';
        $usuario->documento='CEDULA';
        $usuario->lugarExpedicion='VILLAVICENCIO';
        $usuario->fechaExpedicion='2010/02/11';
        $usuario->numeroDocumento='1121885139';
        $usuario->rh='A+';
        $usuario->fechaNacimiento='1992/01/19';
        $usuario->lugarNacimiento='BOGATA DC';
        $usuario->sexo='MASCULINO';
        $usuario->telefono='6621924';
        $usuario->celular='3192225461';
        $usuario->direccion='CALLE 168,14B-45';
        $usuario->email='miguelegion@gmai.com';
        $usuario->save();

        $curso= new Cursos();
        $curso->usuario_id=$usuario->id;
        $curso->nombreInstitucion='Escuela de Los Motores';
        $curso->numeroCertificacion='11212123';
        $curso->categoriaCertificacion='A1';
        $curso->fechaCertificacion=Carbon::now()->subDays(rand(1, 28)); 
        $curso->save();

        $examen=new Examen();
        $examen->usuario_id=$usuario->id;
        $examen->nombreInstitucion='Clinica Central';
        $examen->direccionInstitucion='CRA 23 A 37 D 60';
        $examen->tipoSangre='A+';
        $examen->nombreMedico='Roberto Fernandez';
        $examen->fechaExamen=Carbon::now()->subDays(rand(1, 28)); 
        $examen->restriccion='Debe manejar con lentes';
        $examen->save();

        $simit=new Simit();
        $simit->usuario_id=$usuario->id;
        $simit->codigoInfraccion='C.09';
        $simit->descripcionCodigo='descripcion Codigo';
        $simit->fechaInfraccion=Carbon::now()->subDays(rand(1, 28)); 
        $simit->save();

        


        ///

       


    }
}
