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


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('usuariosg');
    }

    public function index()
    {
    	$id_usuario=Auth::guard('usuarios')->user()->id;
        return view('welcome',compact('id_usuario'));
    }

    //certificados

    public function indexcertificados()
    {
    	$id_usuario=Auth::guard('usuarios')->user()->id;

    	$certificados=DB::table('certificados')
        ->join('usuarios', 'usuarios.id', '=', 'certificados.id_usuarios')  
        ->join('alumnos', 'alumnos.cc', '=', 'certificados.cc_alumnos')    
        ->join('cursos', 'cursos.id', '=', 'certificados.id_cursos')        
        ->select('certificados.*','usuarios.nombre as nombreusuario','alumnos.nombre as nomalumno','cursos.nombre as curnom')
        ->get();

        return view('certificados',compact('id_usuario','certificados'));
    }

    public function insert_certificados()
    {
    	$id_usuario=Auth::guard('usuarios')->user()->id;
    	$cursos=DB::table('cursos')
        ->select('cursos.*')
        ->get();

        return view('insert_certificados',compact('id_usuario','cursos'));
    }

    public function strorecertificados(Request $request){
        
    	$validacion = $request->validate([
            'cc_alumnos' => 'required',
            'id_cursos' => 'required',
            'fecha_aprobacion'=>'required|date'
        ],
        [
            'cc_alumnos.required'=>'La cedula es obligatoria',
            'id_cursos.required'=>'El Curso es obligatorio',
            'fecha_aprobacion.required'=>'La fecha es obligatoria',
            'fecha_aprobacion.date'=>'Solamente fecha'
         ]);

        $comprocedula = Alumnos::where('cc', $request->cc_alumnos)->count();

        if($comprocedula>0){

        	$user=  Certificados::orderby('id','DESC')->take(1)->get();
        
            $ultimocert=$user[0]->id;
            $nuevo =$ultimocert +1;

        //	$date = new DateTime(); 
        	$id_usuario=Auth::guard('usuarios')->user()->id;
            $certificados= new Certificados();
            $certificados->id= $nuevo;
            $certificados->cc_alumnos= $request->cc_alumnos;
            $certificados->id_usuarios= $id_usuario; 
            $certificados->id_cursos= $request->id_cursos;
            $certificados->fechaaprobacion = $request->fecha_aprobacion;
            $certificados->save();

            return redirect('insert_certificados')->with('success', 'Certificado Creado Correctamente');

        }

        return redirect('insert_certificados')->with('false', 'Cedulano existe en el sistema');

            
        }



    //cursos

    public function indexcursos()
    {
    	$id_usuario=Auth::guard('usuarios')->user()->id;

    	$cursos=DB::table('cursos')
        ->select('cursos.*')
        ->get();

        return view('cursos',compact('id_usuario','cursos'));
    }

    public function insert_cursos()
    {
    	$id_usuario=Auth::guard('usuarios')->user()->id;

        return view('insert_cursos',compact('id_usuario'));
    }

    public function strorecursos(Request $request){
    	$validacion = $request->validate([
            'nombre' => 'required|max:70' 
        ],
        [
            'nombre.required'=>'El nombre del curso es obligatorio'
         ]);

    	    $id_usuario=Auth::guard('usuarios')->user()->id;
            $cursos= new Cursos();
            $cursos->nombre= $request->nombre;
            $cursos->save();
            return redirect('insert_cursos')->with('success', 'Curso Creado Correctamente');
        }



    //alumnos

    public function indexalumnos()
    {
    	$id_usuario=Auth::guard('usuarios')->user()->id;

    	$alumnos=DB::table('alumnos')
        ->join('usuarios', 'usuarios.id', '=', 'alumnos.id_usuarios')      
        ->select('alumnos.*','usuarios.nombre as nombreusuario')
        ->get();

        return view('alumnos',compact('id_usuario','alumnos'));
    }

    public function insert_alumnos()
    {
    	$id_usuario=Auth::guard('usuarios')->user()->id;
        return view('insert_alumnos',compact('id_usuario'));
    }

    public function strorealumnos(Request $request){
        
    	$validacion = $request->validate([
            'nombre' => 'required|max:70',
            'cc' => 'required|integer|unique:alumnos,cc',
        ],
        [
            'nombre.required'=>'El nombre del alumno es obligatorio',
            'cc.required'=>'La cedula es obligatoria',
            'cc.integer'=>'La cedula debe ser solo numeros sin puntos',
            'cc.unique'=>'Esta cedula ya esta registrada',
         ]);

    	    $id_usuario=Auth::guard('usuarios')->user()->id;
            $cursos= new Alumnos();
            $cursos->nombre= $request->nombre;
            $cursos->cc= $request->cc;
            $cursos->id_usuarios= $id_usuario;
            $cursos->save();
            return redirect('insert_alumnos')->with('success', 'Alumno Creado Correctamente');
     }
     
     
     public function perfil()
    {
       $idusuarios=Auth::guard('usuarios')->user()->id;
       return view('perfil',compact('id_usuario'));
           
    }

    
    public function updateperfil(Request $request)
    {
    	 $request->validate([
    	'nombre' => 'required',
        'email' => 'required',
        'password' => 'required',
    ],[
    	'nombre.required'=>'El Nombre es obligatorio.',
        'email.required'=>'El email obligatorio',
        'password.required'=>'La Contraseña es obligatorio',
    ]);
    	
    	$idusuarios=Auth::guard('usuarios')->user()->id;
    	
    	$nuevo_nombre= $request->input('nombre');
        $nuevo_email= $request->input('email');
        $nuevo_password= $request->input('password');
        
        $usuarios = Usuarios::find($idusuarios);
        $usuarios-> nombre = $nuevo_nombre;
        $usuarios-> email = $nuevo_email;
        $usuarios-> password = bcrypt($nuevo_password);
        $usuarios->save();

        return redirect('perfil')->with('success','Datos guardados correctamente!');

    }


    



}
    


