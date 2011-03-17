<div id="intern_content">
	<h1>
	
	<?php echo $this->Html->link(
					   $this->Html->tag('anchor', 'home'),
					    array("controller"=>"/","action"=>"/"),
					   array('escape' => false)
					   );
			 ?>
	</h1>
	<div class="educativa"></div>
	<div class="content_type_2">
	<?php echo $page["Page"]["content"];?>
	</div>
</div>