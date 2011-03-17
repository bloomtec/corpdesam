<div class="archivos index">
	<h2><?php __('Archivos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('path');?></th>
			<th><?php echo $this->Paginator->sort('nombre_solicitante');?></th>
			<th><?php echo $this->Paginator->sort('apellido_solicitante');?></th>
			<th><?php echo $this->Paginator->sort('comentarios');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($archivos as $archivo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $archivo['Archivo']['id']; ?>&nbsp;</td>
		<td><?php echo $archivo['Archivo']['path']; ?>&nbsp;</td>
		<td><?php echo $archivo['Archivo']['nombre_solicitante']; ?>&nbsp;</td>
		<td><?php echo $archivo['Archivo']['apellido_solicitante']; ?>&nbsp;</td>
		<td><?php echo $archivo['Archivo']['comentarios']; ?>&nbsp;</td>
		<td><?php echo $archivo['Archivo']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $archivo['Archivo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $archivo['Archivo']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $archivo['Archivo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $archivo['Archivo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Archivo', true), array('action' => 'add')); ?></li>
	</ul>
</div>