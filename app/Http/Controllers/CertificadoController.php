<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
use App\Alumnos;
use App\Certificados;
use App\Cursos;
use DB;
use DateTime;
use Illuminate\Support\Facades\Auth;


class CertificadoController extends Controller
{

    public function generarcertificado(Request $request)
    {
        
        $reporte=DB::table('certificados')
        ->join('cursos', 'cursos.id', '=', 'certificados.id_cursos') 
        ->join('alumnos', 'alumnos.cc', '=', 'certificados.cc_alumnos')  
        ->select('certificados.*','alumnos.nombre as nomalumno','cursos.nombre as nomcurso')
        ->where('certificados.cc_alumnos', '=', $request->cedula)
        ->get();
        
        $nombre=DB::table('alumnos')
        ->select('alumnos.*')
        ->where('alumnos.cc', '=', $request->cedula)
        ->get();
        
        if(count($reporte)>0){
            return view('constancia',compact('reporte','nombre'));
        }else{
            return redirect('consultaralumno')->with('error', 'Identificacion no existe en nuestro sistema');
        }
        
    }
    
    public function consultaralumno(){
        return view('consultaralumno');
    }
    
    
}    
