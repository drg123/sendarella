<div class="emails index">
<div class="actions" style="float: right;">
	<ul>
		<li><?php echo $this->Html->link(__('New Broadcast Email'), array('action' => 'add')); ?></li>
	</ul>
</div>

	<h2 style="display:inline;">Pending Broadcast Emails</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('subject');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pending as $email): ?>
	<tr>
		<td><?php echo h($email['Tempemail']['id']); ?>&nbsp;</td>
		<td><?php echo h($email['Tempemail']['subject']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Form->postLink(__('Copy To Customers'), array('action' => 'send', $email['Tempemail']['id']), null, __('Are you sure you want to copy Email #%s to your customers?', $email['Tempemail']['id'])); ?>
			<?php echo $this->Html->link(__('Preview'), "/adminemails/".$email['Tempemail']['id'], array('target' => '_blank')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $email['Tempemail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $email['Tempemail']['id']), null, __('Are you sure you want to delete # %s?', $email['Tempemail']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
<br><br>
<div class="emails index">
	<h2 style="display:inline;">Finished Broadcast Emails</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('subject');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sent as $email): ?>
	<tr>
		<td><?php echo h($email['Tempemail']['id']); ?>&nbsp;</td>
		<td><?php echo h($email['Tempemail']['subject']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $email['Tempemail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete From All Users'), array('action' => 'delete', $email['Tempemail']['id']), null, __('Are you sure you want to delete # %s?', $email['Tempemail']['id'])); ?>
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

<br><br>
<span class="actions"><?php echo $this->Form->postLink(__('Delete All Emails'), array('action' => 'deleteall')); ?></span>
