<div class="box box-primary">

<div class="box-header">
                  <h3 class="box-title">{{$title}}</h3>
                </div>

<div class="box-body">              


@if( count($asesorias) >0)


<table id="tabla_asesorias" class="display table table-hover" cellspacing="0" width="100%">
       
        <thead>
            <tr>
             <th style="width:10px">Id</th>
                <th>Fecha</th>
                <th>Materia</th>
                <th>Modalidad</th>
                <th>Descripci&oacute;n</th>
                <th>Precio</th>      
                <th>Estado</th>
            </tr>
        </thead>
 
        
       
<tbody>

@foreach($asesorias as $asesoria)

 <tr role="row" class="odd">
    <td>{{ $asesoria->id }}</td>
    <td>{{ $asesoria->fecha }}</td>
    <td>{{$asesoria->materia}}</td>
    <td>{{$asesoria->descripcion}}</td>
    <td>{{$asesoria->precio}}</td>
    <td>{{$asesoria->estatus}}</td>    
</tr>

@endforeach

  

    </table>



<?php


echo str_replace('/?', '?', $asesorias->render() )  ;

?>

@else

<br/><div class='rechazado'><label style='color:#FA206A'>...No se encontraron registros...</label>  </div> 

@endif

</div>



