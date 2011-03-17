<div id="intern_content">
	<h1><?php echo $this->Html->link(
					   $this->Html->tag('anchor', 'home'),
					    array("controller"=>"/","action"=>"/"),
					   array('escape' => false)
					   );
			 ?></h1>
	<div class="ambiental"></div>
	<div class="content_type_1">
	<?php echo $page["Page"]["content"];?>
	</div>
</div>

