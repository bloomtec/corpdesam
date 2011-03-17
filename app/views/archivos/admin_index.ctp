<div class="archivos index">
	<h2><?php __('Hojas de vida');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('nombre_solicitante');?></th>
			<th><?php echo $this->Paginator->sort('apellido_solicitante');?></th>
			<th><?php echo $this->Paginator->sort('comentarios');?></th>
			<th><?php echo $this->Paginator->sort('Enviada','created');?></th>
			<th class="actions"><?php __('Acciones');?></th>
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
		<td><?php echo $archivo['Archivo']['nombre_solicitante']; ?>&nbsp;</td>
		<td><?php echo $archivo['Archivo']['apellido_solicitante']; ?>&nbsp;</td>
		<td><?php echo $archivo['Archivo']['comentarios']; ?>&nbsp;</td>
		<td><?php echo $archivo['Archivo']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Descargar', true), array('action' => 'download', $archivo['Archivo']['id'])); ?>
			
			<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $archivo['Archivo']['id']), null, sprintf(__('Esta seguro que quiere borrar el archivo # %s?', true), $archivo['Archivo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página %page% de %pages%, mostrando %current% registros de %count% totales', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('anterior', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('siguientes', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
