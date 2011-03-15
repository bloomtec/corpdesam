<div class="pages form">
		<div class="inputs">
		<?php echo $this->Form->create('Page');?>
		<fieldset>
	 		<legend><?php __('Modificar Pagina'); ?></legend>
		<?php
			echo $this->Form->input('id');
		//	echo $this->Form->input('title',array("div"=>"float"));
		//	echo $this->Form->input('slug',array("div"=>"float"));
			//echo $this->Form->input('description',array("div"=>"float"));
			//echo $this->Form->input('locale',array("div"=>"float","options"=>array("en_us"=>"English","es_es"=>"Spanish")));
			echo $this->Form->input('content');
			//echo $this->Form->input('Image');

		
		?>
		</fieldset>
		<?php echo $this->Form->end(__('Guardar', true));?>
		</div>

</div>
<script type="text/javascript">
					CKEDITOR.replace( 'data[Page][content]' );
	
</script>