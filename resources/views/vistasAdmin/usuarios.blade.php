<div class="box box-primary">

<div class="box-header">
                  <h3 class="box-title">{{$title}}</h3>
                </div>

<div class="box-body">              


@if( count($usuarios) >0)


<table id="tabla_usuarios" class="display table table-hover" cellspacing="0" width="100%">
       
        <thead>
            <tr>
                <th style="width:10px">Id</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Celular</th>
                <th>Telefono</th>
                <th>Nivel</th>
                <th>Institución</th>
                <th>Ubicacion</th>                
                <th>Acci&oacute;n</th>
            </tr>
        </thead>
 
        
       
<tbody>

@foreach($usuarios as $usuario)

 <tr role="row" class="odd">
    <td>{{ $usuario->id }}</td>
    <td>{{ $usuario->name }}</td>
    <td>{{ $usuario->email}}</td>
    <td>{{$usuario->celular}}</td>
    <td>{{$usuario->telefono}}
    <td>{{$usuario->nivel}}</td>
    <td>{{$usuario->institucion}}</td>
    <td>{{$usuario->delegacion_municipio}}</td>
    <td><button>Ver</button></td>

    
</tr>

@endforeach

  

    </table>



<?php


{{$usuarios->render()}}

?>

@else

<br/><div class='rechazado'><label style='color:#FA206A'>...No se encontraron registros...</label>  </div> 

@endif

</div>