<div class="emails index">
<div class="actions" style="float: right;">
	<ul>
		<li><?php echo $this->Html->link(__('New Newsletter'), array('action' => 'add')); ?></li>
	</ul>
</div>

	<h2 style="display:inline;">Newsletters</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pending as $email): ?>
	<tr>
		<td><?php echo h($email['Newsletter']['id']); ?>&nbsp;</td>
		<td><?php echo h($email['Newsletter']['name']); ?> Issue #<?php echo h($email['Newsletter']['issue']); ?>&nbsp;</td>
		<td class="actions">
<?php echo $this->Html->link('Articles', '/admin/articles/7/'.$email['Newsletter']['id'], array('style'=> 'font-weight:bold')); ?>		
	<?php echo $this->Html->link(__('Preview'), '/newsletter/7/'.$email['Newsletter']['id']); ?>
		<?php echo $this->Html->link(__('Download'), '/admin/newsletters/mailer2/'.$email['Newsletter']['id']); ?>
	<?php echo $this->Html->link(__('Create Email'), '/admin/newsletters/email/'.$email['Newsletter']['id']); ?>
	<?php echo $this->Html->link(__('Create Print'), '/admin/newsletters/mailer/'.$email['Newsletter']['id']); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $email['Newsletter']['id'])); ?>
			<?php echo $this->Form->postLink(__('X'), array('action' => 'delete', $email['Newsletter']['id']), null, __('Are you sure you want to delete # %s?', $email['Newsletter']['id'])); ?>
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
