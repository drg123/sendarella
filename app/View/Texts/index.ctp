<div class="texts index">
<div class="actions" style="float: right;">
	<ul>
		<li><?php echo $this->Html->link(__('New Broadcast Text'), array('action' => 'add')); ?></li>
	</ul>
</div>

	<h2 style="display:inline;">Pending Broadcast Texts for Group: </h2><?

echo $this->Form->input('group', array(
    'type' => 'select',
    'empty' => 'All',
    'label' => false,
    'selected' => $groupid,
    'id' => "textgroup1",
    'div' => array(
        'style' => 'display:inline'
    )
));
?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('content');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pending as $email): ?>
	<tr>
		<td><?php echo h($email['Text']['id']); ?>&nbsp;</td>
		<td><?php echo h($email['Text']['content']); ?>&nbsp;<?php if ($email['Text']['admin']) {echo "<img src='/img/1338520558_031.png'>";} ?></span></td>
		<td class="actions">
			<?php echo $this->Form->postLink(__('Send'), array('action' => 'send', $email['Text']['id']), null, __('Are you sure you want to send Text #%s?', $email['Text']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $email['Text']['id'])); ?>
			<?php if ($email['Text']['admin']) {echo $this->Form->postLink(__('Reset'), array('action' => 'reset', $email['Text']['id']),null, __('Are you sure you want to reset Text #%s?', $email['Text']['id']));} else {echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";} ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $email['Text']['id']), null, __('Are you sure you want to delete # %s?', $email['Text']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
<br><br>
<div class="texts index">
	<h2 style="display:inline;">Sent Broadcast Texts for Group:</h2> <?

echo $this->Form->input('group', array(
    'type' => 'select',
    'empty' => 'All',
    'label' => false,
    'selected' => $groupid,
    'id' => "textgroup2",
    'div' => array(
        'style' => 'display:inline'
    )
));

?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('content');?></th>
			<th><?php echo $this->Paginator->sort('scheduledon', 'Sent On');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sent as $email): ?>
	<tr>
		<td><?php echo h($email['Text']['id']); ?>&nbsp;</td>
		<td><?php echo h($email['Text']['content']); ?>&nbsp;</td>
		<td><?php echo h($email['Text']['scheduledon']); ?>&nbsp;</td>

		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $email['Text']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $email['Text']['id']), null, __('Are you sure you want to delete # %s?', $email['Text']['id'])); ?>
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
	
<div class="actions" style="float: right;">
	<ul>
		<li><?php echo $this->Html->link(__('Go back to Settings'), '/members?mobile=1'); ?></li>
	</ul>
</div>
	</div>
</div>