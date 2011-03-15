<div class="pages index">
	<h2><?php __('Pages');?></h2>
	<table cellpadding="0" cellspacing="0" id="sortable" controller="pages">
	<tr class='ui-state-disabled'>
			<th><?php echo $this->Paginator->sort('order');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
		<!-- 	<th><?php echo $this->Paginator->sort('content');?></th>-->
			<th><?php echo $this->Paginator->sort('slug');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pages as $page):
		$class =  ' class="ui-state-default "';
		if ($i++ % 2 == 0) {
			$class = ' class="altrow ui-state-default"';
		}
	?>
	<tr<?php echo $class;?> id="<?php echo $page['Page']['id'];?>">
		<td class="order"><?php echo $page['Page']['order']; ?>&nbsp;</td>
		<td><?php echo $page['Page']['title']; ?>&nbsp;</td>
		<td><?php echo $page['Page']['description']; ?>&nbsp;</td>
		<!-- <td><?php echo $page['Page']['content']; ?>&nbsp;</td> -->
		<td><?php echo $page['Page']['slug']; ?>&nbsp;</td>
		<td><?php echo $page['Page']['created']; ?>&nbsp;</td>
		<td><?php echo $page['Page']['updated']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $page['Page']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $page['Page']['id'])); ?>
			<!--
				<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $page['Page']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $page['Page']['id'])); ?>
			-->
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
		<li><?php echo $this->Html->link(__('New Page', true), array('action' => 'add')); ?></li>
	</ul>
</div>