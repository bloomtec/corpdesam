
$(function(){
	var server="/corpdesam/";
	
	$("#intern_content h1 a").live("click",function(){
		$(".bottom").hide();
		$(".footer").show("slow");
	});
	
	
	$(".main-nav a").click(function(){
		var ruta=$(this).attr("href");
		var partesRutas=ruta.split("/");
		var page=partesRutas[(partesRutas.length-1)];
		switch(page){
			case "ambiental":
			$("#supersized img").fadeOut("slow",function(){
				$("#supersized img").attr("src",server+"img/fondo_ambiental.jpg");
				$(this).fadeIn("slow");
			});
			
      	 	break;
      	 	
      	 	case "mineria":
			$("#supersized img").attr("src",server+"img/mineros.jpg");
      	 	break; 
      	 	
      	 	case "educativa":
			$("#supersized img").attr("src",server+"img/fondo_educacion.jpg");
      	 	break; 
      	 	
      	 	case "juridica":
			$("#supersized img").attr("src",server+"img/fondo_juridica.jpg");
      	 	break; 
      	 	
      	 	case "portafolio":
			$("#supersized img").attr("src",server+"img/fondo_portafolio.jpg");
      	 	break;
      	 	
      	 	case "perfilProfesional":
			$("#supersized img").attr("src",server+"img/fondo_perfil.jpg");
      	 	break;
      	 	
      	 	case "corpdesam":
			$("#supersized img").attr("src",server+"img/background.jpg");
			break;
			
			case "planeacion":
			$("#supersized img").attr("src",server+"img/fondo_planeacion.jpg");
      	 	break;
      	 	
      	 	default:
      	 	$("#supersized img").attr("src",server+"img/background.jpg");
      	 	break;
      	 	
		}
		$(".bottom").hide("slow",function(){
			$("#content").load(ruta);
		});
		
		return false;
	});
	
})
$(window).load(function(){
	$(".bottom").show("slow");
		$('#logo').fadeIn().animate({
		    left:0,
		    top: 0,
		    marginLeft:0,
		    marginTop:0,
		    width:410,
		    height:363,
		    
		    
		  }, 5000, function() {
		    // Animation complete.
		  });
	});