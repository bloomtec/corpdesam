<div id="intern_content">
	<h1><a href="#">home</a></h1>
	<div class="ambiental"></div>
	<div class="content_type_1">
	<?php echo $page["Page"]["content"];?>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		$("#supersized img").attr(server+'/img/<?php echo $fondo?>);
	});
</script>
