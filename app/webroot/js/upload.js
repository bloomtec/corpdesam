$(document).ready(function() {
	var server='/tecnocenter/'


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
	
	$('#single-upload').uploadify({
	'uploader': server+'swf/uploadify.swf',
	'script':  server+'uploadify.php',
	'folder':  server+'app/webroot/img',
	'auto': true,
	'cancelImg': server+'img/cancel.png',
	'onComplete': function(a,b,c,d){
		$(".preview").html('<img  src="'+d+'" />');
		var file=d.split("/");
		$("#single-field").val(file[(file.length-1)]);
		
	}
	});
});