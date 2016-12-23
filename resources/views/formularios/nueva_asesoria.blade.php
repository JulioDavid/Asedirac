<div class="box box-primary col-xs-12">

  <div class="box-header">
    <h3 class="box-title">Nueva asesor&iacute;a</h3>
  </div><!-- /.box-header -->

  <div id="notificacion_resul_fanu"></div>



  <form  id="f_nueva_asesoria"  method="post"  action="nueva_asesoria" class="form-horizontal" enctype="multipart/form-data">                
    <input type="hidden" name="_token" value="{{csrf_token()}}">              


    <div class="box-body col-xs-12">

      <div class="form-group col-xs-12">
        <label for="area">&Aacute;rea</label>
        <select>
          @foreach($areas as $area)
            <option value="{{$area->id}}">{{$area->nombre}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group col-xs-6"> 
        <label for="materia">materia</label>
        <input type="text" class="form-control" name="materia" id="materia" placeholder="Geometr&iacute;a anal&iacute;tica, &Aacute;lgebra ...">
      </div>

      <div class="form-group col-xs-6"> 
        <label for="modalidad">Modalidad</label>
        <select name="modalidad">
          <option value="0">A domicilio</option>
          <option value="1">En l&iacute;nea</option>
          <option value="2">Lugar a convenir</option> 
        </select>
      </div>

      <div class="form-group col-xs-12">
        <label for="descripcion">Descripci&oacute;n</label>
        <textarea class="form-control" name="descripcion" id="descripcion" rows="5" placeholder="Breve descripci&oacute;n del problema ..."></textarea>
      </div>

      <div class="form-group col-xs-6">
        <label for="fecha">Fecha y hora</label>
        <input type="datetime" class="form-control" name="fecha" id="fecha" placeholder="20-12-2016 17:00">
      </div>

      <div class="form-group col-xs-6">
        <label for="horas">N&uacute;mero de horas</label>      
        <select name="horas">
          <option value="2">2</option>
          <option value="4">4</option>
        </select>
      </div>

      <div class="form-group col-xs-12">
        <input type="file" name="archivo1"></input>        
      </div>

    </div>

    <div class="box-footer col-xs-12 ">
      <button type="submit" class="btn btn-primary">Solicitar</button>
    </div>


  </form>

</div>
