<div class="pages image-form">
	<div class="inputs">
	<?php echo $this->Form->create('Page');?>
	<fieldset>
 		<legend><?php __('Admin Add Page'); ?></legend>
	<?php
		//echo $this->Form->input('locale',array("type"=>"hidden","value"=>"en_us"));
		echo $this->Form->input('title',array("div"=>"float"));
		echo $this->Form->input('slug',array("div"=>"float"));
		echo $this->Form->input('description',array("div"=>"float"));
		echo $this->Form->input('content');
		
	//	echo $this->Form->input('Image');
	?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>
	<div class="multiple_images">
		<h2>Images</h2>
		<div id="status-message"> </div>
		<div class="thumbs">
			
		</div>
		<div id="multiple-upload"></div>
	</div>	
</div>
<script type="text/javascript">
					CKEDITOR.replace( 'data[Page][content]' );
	
</script>