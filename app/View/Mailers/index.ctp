<div class="emails index">
<div class="actions" style="float: right;">
	<ul>
		<li><?php echo $this->Html->link(__('New Mailer'), array('action' => 'add')); ?></li>
	</ul>
</div>

	<h2 style="display:inline;">Pending Print Newsletters for Group: </h2><?

echo $this->Form->input('group', array(
    'type' => 'select',
    'empty' => 'All',
    'label' => false,
    'selected' => $groupid,
    'id' => "mailgroup1",
    'div' => array(
        'style' => 'display:inline'
    )
));
?>
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
		<td><?php echo h($email['Mailer']['id']); ?>&nbsp;</td>
		<td><?php echo h($email['Mailer']['name']); ?>&nbsp;<?php if ($email['Mailer']['admin']) {echo "<img src='/img/1338520558_031.png'>";} ?></span></td>
		<td class="actions">
			<?php echo $this->Form->postLink(__('Send'), array('action' => 'send', $email['Mailer']['id']), null, __('Are you sure you want to send Mailer #%s? Your credit card will be charged $1.25 per mailer sent.', $email['Mailer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $email['Mailer']['id'])); ?>
			<?php echo $this->Html->link(__('Preview'), array('action' => 'view2', $email['Mailer']['id'])); ?>
			<?php if ($email['Mailer']['admin']) {echo $this->Form->postLink(__('Reset'), array('action' => 'reset', $email['Mailer']['id']),null, __('Are you sure you want to reset Mailer #%s?', $email['Mailer']['id']));} else {echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";} ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $email['Mailer']['id']), null, __('Are you sure you want to delete # %s?', $email['Mailer']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
<br><br>
<div class="emails index">
	<h2 style="display:inline;">Sent Print Newsletters for Group:</h2> <?

echo $this->Form->input('group', array(
    'type' => 'select',
    'empty' => 'All',
    'label' => false,
    'selected' => $groupid,
    'id' => "mailgroup2",
    'div' => array(
        'style' => 'display:inline'
    )
));

?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sent as $email): ?>
	<tr>
		<td><?php echo h($email['Mailer']['id']); ?>&nbsp;</td>
		<td><?php echo h($email['Mailer']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $email['Mailer']['id'])); ?>
			<?php echo $this->Html->link(__('Download'), array('action' => 'download', $email['Mailer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $email['Mailer']['id']), null, __('Are you sure you want to delete # %s?', $email['Mailer']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Go back to Settings'), '/members?print=1'); ?></li>
	</ul>
</div>
	</div>
</div>