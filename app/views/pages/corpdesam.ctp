<div id="intern_content">

		<h1 class="home"><?php echo $this->Html->link(
					   $this->Html->tag('anchor', 'home'),
					    array("controller"=>"/","action"=>"/"),
					   array('escape' => false)
					   );
			 ?></h1>
	<div class="corpdesam"></div>
	<div class="content_type_1">
	<?php echo $page["Page"]["content"];?>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		$("#supersized img").attr(server+'/img/<?php echo $fondo?>);
	});
</script>
