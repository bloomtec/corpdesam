$(document).ready(function() {
	var server='/corpdesam/'


	$('#upload').uploadify({
	'uploader': server+'swf/uploadify.swf',
	'script':  server+'uploadify.php',
	'folder':  server+'app/webroot/img',
	'auto': true,
	'cancelImg': server+'img/cancel.png',
	'onComplete': function(a,b,c,d){
		/*var name=c.name;
		$(".selectImagePath").append('<option value="productos/'+name+'" selected="selected">'+name+'</option>');
		$(".product_image").html('<img width="300px" src="'+server+'img/productos/'+name+'" />');
		*/
	}
	});
	$('#subir-archivo').uploadify({
		'uploader': server+'swf/uploadify.swf',
		'script':  server+'uploadify.php',
		'folder':  server+'app/webroot/img',
		'auto': true,
		'cancelImg': server+'img/cancel.png',
		'buttonImg':server+"img/btn_seleccionararchivo.png",
		'width':126,
		'onComplete': function(a,b,c,d){
			if(c.type==".docx"||c.type==".doc"){
				$(".ext").html('<img src="'+server+'img/simbolo-word.png" /><div class="name">'+c.name+'</div>');
			}
			if(c.type==".ppt"||c.type==".pptx"){
				$(".ext").html('<img  src="'+server+'img/simbolo-powerpoint.png" /><div class="name">'+c.name+'</div>');
			}
			if(c.type==".pdf"){
				$(".ext").html('<img src="'+server+'img/simbolo-pdf.png" /><div class="name">'+c.name+'</div>');
			}
			var file=d.split("/");
			$("#ArchivoPath").val(file[(file.length-1)]);
			
		}
	});
	$('#single-upload').uploadify({
	'uploader': server+'swf/uploadify.swf',
	'script':  server+'uploadify.php',
	'folder':  server+'app/webroot/img',
	'auto': true,
	'cancelImg': server+'img/cancel.png',
	'fileExt'     : '*.doc;*.pdf;*.docx; *.ppt; *.pptx',
	'onComplete': function(a,b,c,d){
		$(".preview").html('<img  src="'+d+'" />');
		var file=d.split("/");
		$("#single-field").val(file[(file.length-1)]);
		
	}
	});
	
	//ENVIO DEL FORMULARIO
	$(".enviar").click(function(){
		var data={
			"Archivo":{
				nombre_solicitante:$("#ArchivoNombreSolicitante").val(),
				apellido_solicitante:$("#ArchivoApellidoSolicitante").val(),
				comentarios:$("#ArchivoComentarios").val(),
				path:$("#ArchivoPath").val()
			}
		};
		if($("#ArchivoPath").val()){
			$.post(server+"archivos/ajaxAdd",{data:data},function(confirmacion){
				if(confirmacion){
					$(".mensaje").css("z-index",1).html("<h1>Muchas Gracias, por enviar su solicitud</h1>").siblings().hide();
				}
			});
		}else{
			$(".form-error").show();
		};
			
	});
});