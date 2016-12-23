<div class="box box-primary col-xs-12">

	<div class="box-header">
		<h3 class="box-title">Editar imagen de perfil</h3>
	</div><!-- /.box-header -->

	<!-- seccion para recibir alguna notificacion -->
  	<div id="result_foto_perfil"></div>


  	<form id="f_subir_foto_perfil" method="post" action="subir_foto_perfil" class="formarchivo" enctype="multipart/form-data">
  		<input type="hidden" name="_token" value="{{csrf_token()}}">

  		<div class="box-body">
  			<div class="form-group col-xs-12">
  				<img src="{{$usuario->foto}}" alt="foto_perfil" style="width:160px;height:160px;" id="foto_usuario" >
  			</div>

  			<div class="form-group col-xs-12">
  				<label>Subir imagen</label>
  				<input type="file" id="archivo" name="archivo" class="archivo form-control" required/><br/><br/>
  			</div>

  			<div class="box-footer">
  				<button type="submit" class="btn btn-primary">Actualizar imagen</button>
  			</div>

  		</div>


  	</form>

</div>