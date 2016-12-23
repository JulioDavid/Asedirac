<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Storage;
use Illuminate\Support\Facades\Validator;

class UsuariosController extends Controller
{
    /**
   * Create a new controller instance.
   *
   * @return void
   */
    public function __construct()
    {
      $this->middleware('auth');
    }


    public function form_editar_usuario($id)
    {
    //funcion para cargar los datos de cada usuario en la ficha
         if(Auth::id() != $id){
            return view("mensajes.msj_rechazado")
            ->with("msj","No tienes acceso al perfil solicitado");
         }

         $usuario=User::find($id);
         $contador=count($usuario);
         if($contador>0){          
            return view("formularios.form_editar_usuario")->with("usuario",$usuario);   
         }
         else
         {            
            return view("mensajes.msj_rechazado")->with("msj","el usuario con ese id no existe o fue borrado");  
         }
      }



      /**
      * Metodo para actualizar un usuario
      * 
      **/

      //FALTAN VALIDACIONESSSSSSSSSSSSSS--------
      public function editar_usuario(Request $request)
      {

       $data=$request->all();
       $idUsuario=Auth::id();
       $usuario=User::find($idUsuario);
       $resul = null;

       if($usuario){        

          $usuario->name  =  $data["nombres"];
          $usuario->apellidos=$data["apellidos"];
          $usuario->celular = $data['celular'];         
          $usuario->telefono = $data['telefono'];
          $usuario->nivel = $data['nivel'];
          $usuario->genero = $data['genero'];
          $usuario->calle = $data['calle'];
          $usuario->numero_calle = $data['numero_calle'];
          $usuario->colonia = $data['colonia'];
          $usuario->delegacion_municipio = $data['delegacion_municipio'];
          $usuario->cp = $data['cp'];
          $usuario->ciudad =$data["ciudad"];
          $usuario->estado = $data['estado'];
          $usuario->institucion= $data["institucion"];
          $usuario->carrera = $data["carrera"];
          $usuario->email_tutor = $data["email_tutor"];
          $usuario->nombre_tutor = $data["nombre_tutor"];

          $resul= $usuario->save();

       }

       if($resul){ 

         return view("mensajes.msj_correcto")->with("msj","Datos actualizados Correctamente");   
      }
      else
      {

         return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  

      }
   }

   public function form_foto_perfil(){
      $usuario = User::find(Auth::id());
      $contador=count($usuario);
         if($contador>0){          
            return view("formularios.form_foto_perfil")->with("usuario",$usuario);   
         }
         else
         {            
            return view("mensajes.msj_rechazado")->with("msj","el usuario con ese id no existe o fue borrado");  
         }
   }


   public function subirImagen(Request $request){
      $id = Auth::id();
      $usuario = User::find($id);
      $result = null;

      if($usuario){

         $archivo =  $request->file('archivo');
         $input  = array('image' => $archivo);
         $reglas = array('image' => 'required|image|mimes:jpeg,jpg,bmp,png,gif|max:5000');
         $validacion = Validator::make($input,$reglas);
         if($validacion->fails()){
            return view("mensajes.msj_rechazado")->with("msj","Lo que acabas de subir no es un archivo v&aacute;lido");
         }else{
            $nombre_original = $archivo->getClientOriginalName();
            $extension = $archivo->getClientOriginalExtension();
            $nuevo_nombre = "userImagen-".$id.".".$extension;
            $r1 = Storage::disk('fotografias')->put($nuevo_nombre,\File::get($archivo));
            $rutaImagen = "../storage/fotografias/".$nuevo_nombre;

            if($r1){
               //Actualizacion de datos en la bd|
               $usuario->foto = $rutaImagen;
               $result = $usuario->save();

               if($result){ 
                  return view("mensajes.msj_correcto")->with("msj","Datos actualizados Correctamente");   
               }else{
                  return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  
               }
            }else{
               return view("mensajes.msj_rechazado")->with("msj","Hubo un error, int&eacute;ntalo m&aacute;s tarde");  
            }
         }
      }
   }

}
