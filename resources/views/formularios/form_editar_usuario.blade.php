<div class="box box-primary col-xs-12">

  <div class="box-header">
    <h3 class="box-title">Editar perfil</h3>
  </div><!-- /.box-header -->

  <!-- seccion para recibir alguna notificacion -->
  <div id="notificacion_resul_feu">

  </div>

  @unless(Auth::user()->rol == 2)
  <form  id="f_editar_usuario"  method="post"  action="editar_usuario" class="form-horizontal form_entrada" >                
    <input type="hidden" name="_token" value="{{csrf_token()}}"> 
    <input type="hidden" name="id_usuario" value="{{ $usuario->id }}">              


    <div class="box-body col-xs-12">

      <div class="form-group col-xs-6">
        <label for="nombres">Nombres*</label>
        <input type="text" class="form-control" id="nombres" name="nombres"  value="{{$usuario->name}}"  >
      </div>

      <div class="form-group col-xs-6">
        <label for="apellido">Apellidos</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{$usuario->apellidos}}">
      </div>

      <div class="form-group col-xs-6">
        <label for="celular">Celular</label>
        <input type="tel" class="form-control" id="celular" name="celular" value="{{ $usuario->celular}}">
      </div>

      <div class="form-group col-xs-6">
        <label for="telefono">Telefono de casa</label>
        <input type="tel" class="form-control" id="telefono" name="telefono" value="{{$usuario->telefono}}">
      </div>

      <div class="form-group col-xs-6">        
        <label for="nivel">Nivel educativo</label>
        <select id="nivel" name="nivel" onchange="cargarCarrera(this);">
          <option value="0">Secundaria</option>
          <option value="1">Media superior</option>
          <option value="2">Superior</option>
        </select>
      </div>

      <div class="form-group col-xs-6" id="carrera">
        <label for="carrera">Carrera</label>
        <input type="text" class="form-control" name="carrera" value="{{$usuario->carrera}}" >
      </div>


      <div class="form-group col-xs-12">        
        <label for="genero">Genero</label>
        <select id="genero" name="genero">
          <option value="0">Femenino</option>
          <option value="1">Masculino</option>
          <option value="2">Otro</option>
        </select>
      </div>

      <div class="form-group col-xs-6">
        <label for="calle">Calle</label>
        <input type="text" class="form-control" id="calle" name="calle" value="{{$usuario->calle}}">
      </div>

      <div class="form-group col-xs-6">
        <label for="numero_calle">N&uacute;mero</label>
        <input type="text" class="form-control" name="numero_calle" id="numero_calle" value="{{$usuario->numero_calle}}"> 
      </div>

      <div class="form-group col-xs-6">        
        <label for="colonia">Colonia</label>
        <input type="text" class="form-control" id="colonia" name="colonia" value="{{ $usuario-> colonia}}">
      </div>

      <div class="form-group col-xs-6">        
        <label for="delegacion_municipio">Delegaci&oacute;n o municipio</label>
        <input type="text" class="form-control" id="delegacion_municipio" name="delegacion_municipio" value="{{ $usuario->delegacion_municipio }}">
      </div>

      <div class="form-group col-xs-6">        
        <label for="cp">C&oacute;digo Postal</label>
        <input type="" class="form-control" id="cp" name="cp" value="{{$usuario->cp}}" size="5">
      </div>

      <div class="form-group col-xs-6">
        <label for="ciudad">Ciudad</label>
        <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{$usuario->ciudad}}"  >
      </div>

      <div class="form-group col-xs-6">        
        <label for="estado">Estado</label>
        <input type="text" class="form-control" id="estado" name="estado" value="{{$usuario->estado}}">
      </div>


      <div class="form-group col-xs-12">
        <label for="institucion">Instituci&oacute;n</label>
        <input type="text" class="form-control" id="institucion" name="institucion"  value="{{$usuario->institucion}}" >
      </div>

      @if(Auth::user()->rol == 0)

      <br>
        <div class=" box-header col-xs-12" >
          <h3 class="box-title">Datos del tutor</h3>
        </div>

        <div class="form-group col-xs-12">
          <label for="nombre_tutor">Nombre de tutor (opcional)</label>
          <input type="text" class="form-control" name="nombre_tutor" value="{{$usuario->nombre_tutor}}" >
        </div> 

        <div class="form-group col-xs-12">
          <label for="nombre_tutor">Correo tutor</label>
          <input type="text" class="form-control" name="email_tutor" value="{{$usuario->email_tutor}}" >
        </div>         
      @endif


    </div>

    <div class="box-footer col-xs-12 ">
      <button type="submit" class="btn btn-primary">Actualizar Datos</button>
    </div>

  </form>
  @endunless

</div>

<script>

  function cargarGenero(){
    $('#genero option:eq({{$usuario->genero}})').prop('selected',true);
  }
  cargarGenero();

 function cargarnivel(){
  $('#nivel option:eq({{ $usuario->nivel }})').prop('selected', true);  
  if({{$usuario->nivel }} == 2){
    $('#carrera').show();
  }else{
    $('#carrera').hide();
  }
}
cargarnivel();


function cargarCarrera(nivel){
    if(nivel.value == 2){
      $('#carrera').show();
    }else{
      $('#carrera').hide();
    }
  }
  
</script>
