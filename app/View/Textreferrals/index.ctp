<div class="texts index">
<div class="actions" style="float: right;">
	<ul>
		<li><?php echo $this->Html->link(__('New Referral Text'), array('action' => 'add')); ?></li>
	</ul>
</div>

	<h2 style="display:inline;">Referral Texts</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('series');?></th>
			<th><?php echo $this->Paginator->sort('content');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pending as $email): ?>
	<tr>
		<td><?php echo h($email['Textreferral']['id']); ?>&nbsp;</td>
		<td><?php echo h($email['Textreferral']['series']); ?>&nbsp;</td>
		<td><?php echo h($email['Textreferral']['content']); ?>&nbsp;</td>
		<td class="actions">
			<?php if ($email['Textreferral']['enabled'] == 1) {echo $this->Form->postLink(__('Disable'), array('action' => 'disable', $email['Textreferral']['id']), null, __('Are you sure you want to disable # %s?', $email['Textreferral']['id']));} ?>
			<?php if ($email['Textreferral']['enabled'] == 0) {echo $this->Form->postLink(__('Enable'), array('action' => 'enable', $email['Textreferral']['id']), null, __('Are you sure you want to enable # %s?', $email['Textreferral']['id']));} ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $email['Textreferral']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $email['Textreferral']['id']), null, __('Are you sure you want to delete # %s?', $email['Textreferral']['id'])); ?>
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