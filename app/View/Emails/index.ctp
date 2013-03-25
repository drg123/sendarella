<div class="emails index">
<div class="actions" style="float: right;">
	<ul>
		<li><?php echo $this->Html->link(__('New Broadcast Email'), array('action' => 'add')); ?></li>
	</ul>
</div>

	<h2 style="display:inline;">Pending Broadcast Emails for Group: </h2><?

echo $this->Form->input('group', array(
    'type' => 'select',
    'empty' => 'All',
    'label' => false,
    'selected' => $groupid,
    'id' => "emailgroup1",
    'div' => array(
        'style' => 'display:inline'
    )
));
?>
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
		<td><?php echo h($email['Email']['id']); ?>&nbsp;</td>
		<td><?php echo h($email['Email']['subject']); ?>&nbsp;<?php if ($email['Email']['admin']) {echo "<img src='/img/1338520558_031.png'>";} ?></span></td>
		<td class="actions">
			<?php echo $this->Form->postLink(__('Send'), array('action' => 'send', $email['Email']['id']), null, __('Are you sure you want to send Email #%s?', $email['Email']['id'])); ?>
			<?php echo $this->Html->link(__('Preview'), "/emails/".$email['Email']['id'], array('target' => '_blank')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $email['Email']['id'])); ?>
			<?php if ($email['Email']['admin']) {echo $this->Form->postLink(__('Reset'), array('action' => 'reset', $email['Email']['id']),null, __('Are you sure you want to reset Email #%s?', $email['Email']['id']));} else {echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";} ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $email['Email']['id']), null, __('Are you sure you want to delete # %s?', $email['Email']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
<br><br>
<div class="emails index">
	<h2 style="display:inline;">Sent Broadcast Emails for Group:</h2> <?

echo $this->Form->input('group', array(
    'type' => 'select',
    'empty' => 'All',
    'label' => false,
    'selected' => $groupid,
    'id' => "emailgroup2",
    'div' => array(
        'style' => 'display:inline'
    )
));

?>
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
		<td><?php echo h($email['Email']['id']); ?>&nbsp;</td>
		<td><?php echo h($email['Email']['subject']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $email['Email']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $email['Email']['id']), null, __('Are you sure you want to delete # %s?', $email['Email']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Go back to Settings'), '/members?email=1'); ?></li>
	</ul>
</div>
	</div>
</div>