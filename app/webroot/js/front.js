
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
      	 	$("#supersized img").fadeOut("slow",function(){
				$("#supersized img").attr("src",server+"img/mineros.jpg");
			$(this).fadeIn("slow");
			});
      	 	break; 
      	 	
      	 	case "educativa":
      	 	$("#supersized img").fadeOut("slow",function(){
				$("#supersized img").attr("src",server+"img/fondo_educacion.jpg");
				$(this).fadeIn("slow");
			});
      	 	break; 
      	 	
      	 	case "juridica":
      	 	$("#supersized img").fadeOut("slow",function(){
				$("#supersized img").attr("src",server+"img/fondo_juridica.jpg");
			$(this).fadeIn("slow");
			});
      	 	break; 
      	 	
      	 	case "portafolio":
      	 	$("#supersized img").fadeOut("slow",function(){
				$("#supersized img").attr("src",server+"img/fondo_portafolio.jpg");
      	 	$(this).fadeIn("slow");
			});
			break;
      	 	
      	 	case "perfilProfesional":
      	 	$("#supersized img").fadeOut("slow",function(){
				$("#supersized img").attr("src",server+"img/fondo_perfil.jpg");
      	 	$(this).fadeIn("slow");
			});
			break;
      	 	
      	 	case "corpdesam":
			$("#supersized img").fadeOut("slow",function(){
				$("#supersized img").attr("src",server+"img/background.jpg");
			$(this).fadeIn("slow");
			});
			break;
			
			case "planeacion":
			$("#supersized img").fadeOut("slow",function(){
				$("#supersized img").attr("src",server+"img/fondo_planeacion.jpg");
      	 	$(this).fadeIn("slow");
			});
			break;
      	 	
      	 	default:
      	 	$("#supersized img").fadeOut("slow",function(){
      	 		$("#supersized img").attr("src",server+"img/background.jpg");
      	 	$(this).fadeIn("slow");
			});
			break;
      	 	
		}
		$(".bottom").hide("slow",function(){
			$("#footer").animate({"bottom":-71},"slow");
			$("#content").load(ruta);
			if($(window).height()<600){
				$("body").css("overflow","scroll");
			}else{
				$("body").css("overflow","hidden");
			}
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