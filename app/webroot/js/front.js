$( function() {
	var server="/corpdesam/";

	var animar= function() {
		$("#animado").animate({"bottom":$("#animado").attr("rel")},"slow",function(){
			
		});
	};
	$(window).load(function(){
		animar();
	});
	if(parseInt($(window).height())> parseInt($("#container").height())){
		var sobrante=parseInt($(window).height())-parseInt($("#container").height());
		$("#container").css("margin-top",(sobrante/2));	
	}
	$(window).resize(function(){
		if(parseInt($(window).height())> parseInt($("#container").height())){
			var sobrante=parseInt($(window).height())-parseInt($("#container").height());
			$("#container").css("margin-top",(sobrante/2));	
		}else{
			$("#container").css("margin-top",0);	
		}
	});
})