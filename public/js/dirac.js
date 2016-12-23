

function cargarformulario(arg){
//funcion que carga todos los formularios del sistema

		if(arg==1){ var url = "form_nueva_asesoria"; }


		   $("#contenido_principal").html($("#loading_section").html());

		    $.get(url,function(resul){
		        $("#contenido_principal").html(resul);

		    })
}



function cargarlistado(listado){
    //funcion para cargar los diferentes listados en general

if(listado==0){ var url = "asesorias/solicitadas"; }
$("#contenido_principal").html($("#loading_section").html());
    
    $.get(url,function(resul){

        $("#contenido_principal").html(resul); 
   })
}



function mostrarficha(id_usuario) {  
  var url = "form_editar_usuario/"+id_usuario+""; 

  $("#contenido_principal").html($("#loading_section").html());

  $.get(url,function(resul){
      $("#contenido_principal").html(resul);
  })

}

//pedir nueva asesoria con archivos adjuntos
$(document).on("submit","#f_nueva_asesoria",function(e){
  e.preventDefault();
  var divresul="notificacion_resul_fanu";
  var formData = new FormData($(this)[0]);
  
  //mientras carga
  $("#"+divresul+"").html($("#loading_section").html());
  $.ajax({
    url: 'nueva_asesoria',
    type: 'POST',
    data: formData,
    success: function(data){
      $("#"+divresul+"").html(data);
      $('#f_nueva_asesoria').trigger("reset");
    },
    cache:false,
    contentType: false,
    processData: false,
  });

})


 $(document).on("submit",".form_entrada",function(e){

//funcion para atrapar los formularios y enviar los datos

       e.preventDefault();
        
        $('html, body').animate({scrollTop: '0px'}, 200);
        
        var formu=$(this);
        var quien=$(this).attr("id");
        
        
        if(quien=="f_editar_usuario"){ var varurl="editar_usuario"; var divresul="notificacion_resul_feu"; }

        $("#"+divresul+"").html($("#loading_section").html());

              $.ajax({

                    type: "POST",
                    url : varurl,
                    datatype:'json',
                    data : formu.serialize(),
                    success : function(resul){

                        $("#"+divresul+"").html(resul);
                        //$('#'+quien+'').trigger("reset");
                    }
                });
})

$(document).on("click",".pagination li a",function(e){

 e.preventDefault();

 var url =$( this).attr("href");
 $("#contenido_principal").html($("#loading_section").html());

    
    $.get(url,function(resul){

        $("#contenido_principal").html(resul); 
   })
  })



  $(document).on("submit",".formarchivo",function(e){

     
        e.preventDefault();
        var formu=$(this);
        var nombreform=$(this).attr("id");

        if(nombreform=="f_subir_foto_perfil" ){ var miurl="subir_foto_perfil";  var divresul="result_foto_perfil"}
        //información del formulario
        var formData = new FormData($("#"+nombreform+"")[0]);

        //hacemos la petición ajax   
        $.ajax({
            url: miurl,  
            type: 'POST',
     
            // Form data
            //datos del formulario
            data: formData,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            //mientras enviamos el archivo
            beforeSend: function(){
              $("#"+divresul+"").html($("#loading_section").html());                
            },
            //una vez finalizado correctamente
            success: function(data){
              $("#"+divresul+"").html(data);
              $("#foto_usuario").attr('src', $("#foto_usuario").attr('src') + '?' + Math.random() );               
            },
            //si ha ocurrido un error
            error: function(data){
               alert("ha ocurrido un error") ;
                
            }
        });
    });