<div class="emails index">
<div class="actions" style="float: right;">
	<ul>
		<li><?php echo $this->Html->link(__('New Article'), '/admin/articles/add/'.$newsletter['Newsletter']['id']); ?></li>
	</ul>
</div>

	<h2 style="display:inline;">Articles for <?=$newsletter['Newsletter']['name'];?> Issue #<?=$newsletter['Newsletter']['issue'];?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('headline');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pending as $email): ?>
	<tr>
		<td><?php echo h($email['Article']['id']); ?>&nbsp;</td>
		<td><?php echo h($email['Article']['headline']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Preview'), '/article/1/'. $email['Article']['id']); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $email['Article']['id'])); ?>
<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $email['Article']['id']), null, __('Are you sure you want to delete # %s?', $email['Article']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
