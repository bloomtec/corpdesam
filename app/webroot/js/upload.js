$(document).ready(function() {
	var server='/corpdesam/'

	$('#subir-archivo').uploadify({
		'uploader': server+'swf/uploadify.swf',
		'script':  server+'uploadify.php',
		'folder':  server+'app/webroot/img',
		'auto': true,
		'cancelImg': server+'img/cancel.png',
		'buttonImg':server+"img/btn_seleccionararchivo.PNG",
		'width':140,
		'height':33,
		'removeCompleted' : false,
		'onOpen':function(){
			$(".form-error").hide();
		},
		'onComplete': function(a,b,c,d){
			/*if(c.type==".docx"||c.type==".doc"){
				$(".ext").html('<img src="'+server+'img/simbolo-word.png" /><div class="name">'+c.name+'</div>');
			}
			if(c.type==".ppt"||c.type==".pptx"){
				$(".ext").html('<img  src="'+server+'img/simbolo-powerpoint.png" /><div class="name">'+c.name+'</div>');
			}
			if(c.type==".pdf"){
				$(".ext").html('<img src="'+server+'img/simbolo-pdf.png" /><div class="name">'+c.name+'</div>');
			}*/
			var file=d.split("/");
			$("#ArchivoPath").val(file[(file.length-1)]);
			
			
		}
	});

	
	//ENVIO DEL FORMULARIO
	$(".enviar").live("click",function(){
		var data={
			"Archivo":{
				nombre_solicitante:$("#ArchivoNombreSolicitante").val(),
				apellido_solicitante:$("#ArchivoApellidoSolicitante").val(),
				comentarios:$("#ArchivoComentarios").val(),
				path:$("#ArchivoPath").val(),
				profesion:$("#ArchivoProfesion").val(),
				ciudad:$("#ArchivoCiudad").val()
			}
		};
		var inputs = $("#ArchivoAjaxAddForm :input").validator();
		if($("#ArchivoPath").val()&&inputs.data("validator").checkValidity()){
			$.post(server+"archivos/ajaxAdd",{data:data},function(confirmacion){
				if(confirmacion){
					$(".mensaje").css("z-index",1).html("<h1>Muchas Gracias, por enviar su solicitud</h1>").siblings().hide();
				}
			});
		}else{
			var mensaje="";
			//alert(inputs.data("validator").checkValidity());
			if(!inputs.data("validator").checkValidity()){
				mensaje+="Todos los campos son requeridos <br />";
			} 
			if(!$("#ArchivoPath").val()){
				mensaje+="No ha subido su Hoja de vida, recuerde que solo se admiten archivos: PDF, WORD y Power Point";
			} 
			$(".form-error").html(mensaje).show();
		};
			
	});
});