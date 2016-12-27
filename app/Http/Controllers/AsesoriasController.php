<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Asesoria;
use App\Area;

class AsesoriasController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    /**
    * Obtener formulario para una nueva asesoria
    **/
    public function getNuevaAsesoria(){
        $areas = Area::all();
        return view('formularios.nueva_asesoria')
                ->with('areas', $areas);
    }

    /**
    * Registra una nueva asesoria
    **/
    public function nueva_asesoria(Request $request){
    	$data = $request->all();

    	$asesoria = new Asesoria;

    	$asesoria->materia         = $data['materia'];
    	$asesoria->descripcion     = $data['descripcion'];
    	$asesoria->fecha           = date("Y-m-d H:i:s",strtotime($data['fecha']));
    	$asesoria->horas           = $data['horas'];
    	$asesoria->alumno_id       = Auth::id();

    	$result = $asesoria->save();

    	if($result){

            //recibimos los archivos adjuntos
            if($request->file('archivo1')){
                $request->file('archivo1')->store('archivos');
            }
            
    		return view('mensajes.msj_correcto')->with("msj","Asesor&iacute;a regsitrada correctamente. Tan pronto te asignemos un asesor te lo haremos saber.");
    	}
    	else{
    		return view('mensajes.msj_rechazado')->with("msj","No se pudo registrar tu asesor&iacute; Int&eacute;ntalo m&aacute;s tarde.");
    	}
        
    }

    /**
    * Regresa todas las asesorias solicitadas por el usuario   
    **/
    public function getSolicitadas(){

        $solicitadas = Asesoria::where('alumno_id',Auth::id())
                        ->where('estatus',0)
                        ->paginate(2);

        return view('asesorias.listado_asesorias')
                    ->with('title','Asesor&iacute;as solicitadas')
                    ->with('estatus',0)
                    ->with('asesorias',$solicitadas);
    }

    /**
    * Obtiene todas las asesorias que están pendientes por pagar
    * El asesor ha sido asignado pero no ha pagado
    **/
    public function getPorPagar(){

    }

    /**
    * Obtiene todas las asesorias que ya se confiraron
    * Se asignó el asesor y el cliente ya pagó
    **/
    public function getConcretadas(){

    }
}
