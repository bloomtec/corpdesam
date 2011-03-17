<div class="archivos form">
<?php echo $this->Form->create('Archivo');?>
	<fieldset>
 		<legend><?php __('Edit Archivo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('path');
		echo $this->Form->input('nombre_solicitante');
		echo $this->Form->input('apellido_solicitante');
		echo $this->Form->input('comentarios');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Archivo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Archivo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Archivos', true), array('action' => 'index'));?></li>
	</ul>
</div>