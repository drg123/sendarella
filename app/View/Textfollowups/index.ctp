<div class="emails index">
	<div style="float: right;" class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('New Followup Text'), array('action' => 'add')); ?></li>
	</ul>
	</div>
	<h2 style="display:inline;">Follow Up Texts for Group: </h2><?

echo $this->Form->input('group', array(
    'type' => 'select',
    'empty' => 'All',
    'label' => false,
    'selected' => $groupid,
    'id' => 'textfgroup',
    'div' => array(
        'style' => 'display:inline'
    )
));

?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('content');?></th>
			<th><?php echo $this->Paginator->sort('days');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($emails as $email): ?>
	<tr>
		<td><?php echo h($email['Textfollowup']['id']); ?>&nbsp;</td>
		<td><?php echo h($email['Textfollowup']['content']); ?>&nbsp;</td>
		<td><?php echo h($email['Textfollowup']['days']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $email['Textfollowup']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $email['Textfollowup']['id']), null, __('Are you sure you want to delete # %s?', $email['Textfollowup']['id'])); ?>
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
