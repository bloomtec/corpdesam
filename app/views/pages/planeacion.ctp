<div id="intern_content">
<<<<<<< HEAD
	<h1><a href="#">home</a></h1>
=======
		<h1 class="home"><?php echo $this->Html->link(
					   $this->Html->tag('anchor', 'home'),
					    array("controller"=>"/","action"=>"/"),
					   array('escape' => false)
					   );
			 ?></h1>
>>>>>>> bc22d69bc574771ac4c3dfeb1c2e0dc9d28341fe
	<div class="planeacion"></div>
	<div class="content_type_1">
	<?php echo $page["Page"]["content"];?>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		$("#supersized img").attr(server+'/img/<?php echo $fondo?>);
	});
</script>
