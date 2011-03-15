<div class="pages image-form">
		<div class="inputs">
		<?php echo $this->Form->create('Page');?>
		<fieldset>
	 		<legend><?php __('Admin Edit Page'); ?></legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('title',array("div"=>"float"));
			echo $this->Form->input('slug',array("div"=>"float"));
			echo $this->Form->input('description',array("div"=>"float"));
			echo $this->Form->input('locale',array("div"=>"float","options"=>array("en_us"=>"English","es_es"=>"Spanish")));
			echo $this->Form->input('content');
			//echo $this->Form->input('Image');

			foreach($this->data["Image"] as $image):
				 echo $this->Form->input('Image.Image.'.$image["id"],array("id"=>"image-".$image["id"],"value"=>$image["id"],"type"=>"hidden"));
			endforeach;
		?>
		</fieldset>
		<?php echo $this->Form->end(__('Submit', true));?>
		</div>
	<div class="multiple_images">
		<h2>Images</h2>
		<div id="status-message"> </div>
		<div class="thumbs">
			<?php foreach($this->data["Image"] as $image):?>
				<?php echo $this->element("image-box",array("image"=>$image));?>
			<?php endforeach;?>
		</div>
		<div id="multiple-upload"></div>
	</div>	
</div>
<script type="text/javascript">
					CKEDITOR.replace( 'data[Page][content]' );
	
</script>