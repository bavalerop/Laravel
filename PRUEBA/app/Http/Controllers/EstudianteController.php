<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EstudiantesModel;
use DB;

class EstudianteController extends Controller
{

	public function index(){
    	$Estudiantes = EstudiantesModel::all();
    	if(!empty($Estudiantes)){
    		return response()->json(['CODE' => 'OK','DATA' => $Estudiantes]);
    	}else{
    		return response()->json(['CODE' => 'ERROR','message' => 'No hay Estudiantes en la BD']);
    	}
    }

    public function create(Request $request){

    	if(!empty($request)){
    		foreach ($request->all() as $req){

	    		$Estudiantes = new EstudiantesModel();
		    	$Estudiantes->nombre = $req['nombre'];
		    	$Estudiantes->apellido = $req['apellido'];
		    	$Estudiantes->correo = $req['correo'];
		    	$Estudiantes->password = $req['password'];
		    	$Estudiantes->save();
	    	}
    	

    		return response()->json(['CODE' => 'OK','message' => 'Insercion exitosa']);
    	}else{
    		return response()->json(['CODE' => 'ERROR','message' => 'No envio ningun estudiante']);
    	}
    }

    public function show($id){

    	$Estudiante=EstudiantesModel::find($id);
    	//Para consultas mas Aji
    	//$Estudiante = DB::select(DB::raw("select * from estudiantes"));
    	if(!empty($Estudiante)){
    		return response()->json(['CODE' => 'OK','DATA' => $Estudiante]);
    	}else{
    		return response()->json(['CODE' => 'ERROR','message' => 'No existe el estudiante BD']);
    	}
    }

    public function update(Request $request,$id){
      	$Estudiante=EstudiantesModel::find($id);
  		
    	if(!empty($Estudiante)){
    		foreach ($request->all() as $req){
    			$nombre = $req['nombre'];
		    	$apellido = $req['apellido'];
		    	$correo = $req['correo'];
		    	$password = $req['password'];
			}
	    	$Estudiante->nombre = $nombre;
	    	$Estudiante->apellido = $apellido;
	    	$Estudiante->correo = $correo;
	    	$Estudiante->password = $password;
	    	$Estudiante->save();
    		return response()->json(['CODE' => 'OK','DATA' => 'Actualizacion Exitosa']);
    	}else{
    		return response()->json(['CODE' => 'ERROR','message' => 'No existe el estudiante BD']);
    	}
    }

    public function delete($id){

    	$Estudiante=EstudiantesModel::find($id);
  		
    	if(!empty($Estudiante)){
    		EstudiantesModel::destroy($id);
    		return response()->json(['CODE' => 'OK','DATA' => 'Estudiante eliminado con exito']);
    	}else{
    		return response()->json(['CODE' => 'ERROR','message' => 'No existe el estudiante BD']);
    	}
    }

    
}
