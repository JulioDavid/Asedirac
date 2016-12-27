<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Asesoria;
use App\Area;

class AsesoriasController extends Controller
{   
    private $modalidad;
    private $paginacion;
    

    public function __construct(){
    	$this->middleware('auth');
        $this->modalidad = array("A domicilio","En línea","Lugar a convenir");
        $this->paginacion = 2;

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
        $asesoria->modalidad       = $data['modalidad'];

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
        $solicitadas = "";
        $estatus = 0;
        $rol = Auth::user()->rol;

        if($rol == 0){
            $solicitadas = Asesoria::where('alumno_id',Auth::id())
                        ->where('estatus',$estatus)
                        ->whereDate('fecha','>=',date("Y-m-d H:i:s"))
                        ->paginate($this->paginacion);
        }

        if($rol == 1){
            $solicitadas = Asesoria::where('estatus',$estatus)
                            ->whereDate('fecha','>=',date("Y-m-d H:i:s"))
                            ->paginate($this->paginacion);
        }

        if($rol == 2){
            $solicitadas = Asesoria::where('estatus',$estatus)
                            ->whereDate('fecha','>=',date("Y-m-d H:i:s"))
                            ->paginate($this->paginacion);   
        }


        return($this->enviarListadoAsesorias($estatus,"Asesor&iacute;as solicitadas",$solicitadas));
    }

    /**
    * Obtiene todas las asesorias que están pendientes por pagar
    * El asesor ha sido asignado pero no ha pagado
    **/
    public function getPorPagar(){
        $porPagar = "";
        $estatus = 1;
        $rol = Auth::user()->rol;

        if($rol == 0){
            $porPagar = Asesoria::where('alumno_id',Auth::id())
                ->where('estatus',$estatus)
                ->paginate($this->paginacion);
        }

        if($rol == 1){
            $porPagar = Asesoria::where('asesor_id',Auth::id())
                ->where('estatus',$estatus)
                ->paginate($this->paginacion);
        }

        if($rol == 2){
            $porPagar = Asesoria::where('estatus',$estatus)
                ->paginate($this->paginacion);
        }

        return($this->enviarListadoAsesorias($estatus,"Asesor&iacute;as pendientes",$porPagar));
    }

    /**
    * Obtiene todas las asesorias que ya se confiraron
    * Se asignó el asesor y el cliente ya pagó
    **/
    public function getConcretadas(){
        $concretadas = "";
        $estatus = 2;
        $rol = Auth::user()->rol;

        if($rol == 0){
            $concretadas = Asesoria::where('alumno_id',Auth::id())
                ->where('estatus',$estatus)
                ->paginate($this->paginacion);
        }

        if($rol == 1){
            $concretadas = Asesoria::where('asesor_id',Auth::id())
                ->where('estatus',$estatus)
                ->paginate($this->paginacion);
        }

        if($rol == 2){
            $concretadas = Asesoria::where('estatus',$estatus)
                ->paginate($this->paginacion);
        }

        return($this->enviarListadoAsesorias($estatus,"Asesor&iacute;as concretadas",$concretadas));
    }

    /**
    * regresa las asesorias que ya pasaron
    **/
    public function getConcluidas(){
        $concluidas ="";
        $estatus = 3;
        $rol = Auth::user()->rol;

        if($rol == 0){
            $concluidas = Asesoria::where('alumno_id',Auth::id())
                ->whereDate('fecha','<',date("Y-m-d H:i:s"))
                ->paginate($this->paginacion);
        }

        if($rol == 1){
            $concluidas = Asesoria::where('asesor_id',Auth::id())
                ->whereDate('fecha','<',date("Y-m-d H:i:s"))
                ->paginate($this->paginacion);
        }

        if($rol == 2){
            $concluidas = Asesoria::whereDate('fecha','<',date("Y-m-d H:i:s"))
                ->paginate($this->paginacion);
        }

        return($this->enviarListadoAsesorias($estatus,"Asesor&iacute;as concluidas",$concluidas));
    }

    /**
    * Funcion para mostrar el listado de las asesorias
    **/
    private function enviarListadoAsesorias($estatus,$titulo,$datos){
        return view('asesorias.listado_asesorias')
                    ->with('title',$titulo)
                    ->with('estatus',$estatus)
                    ->with('asesorias',$datos)
                    ->with('modalidad',$this->modalidad)
                    ->with('rol',Auth::user()->rol);                    
    }

    public function postConfirmarAsesoria(Request $request){
        if(Auth::user()->rol == 1){

            $id = $request->input('id_asesoria');
            $asesoria = Asesoria::find($id);

            if($asesoria){
                if($asesoria->estatus==0){
                    $asesoria->asesor_id = Auth::id();
                    $asesoria->estatus = 1;
                    $result = $asesoria->save();

                    if($result){
                    return view('mensajes.msj_correcto')->with("msj","Asesor&iacute;a registrada con exito");
                    }else{
                        return view('mensajes.msj_rechazado')->whith('msj',"No se pudo registrar la asesoría deseada"); 
                    }                    
                }else{
                    return view('mensajes.msj_rechazado')->whith('msj',"No se pudo registrar la asesoría deseada. Probablemente alguien m&aacute;s la tom&oacute;...");
                }
            }else{
                return view('mensajes.msj_rechazado')->whith('msj',"Nada que mostrar...");
            }


        }else{
            return view('mensajes.msj_rechazado')->whith('msj',"No se quiera pasar de verga...");
        }

        
    }

}
