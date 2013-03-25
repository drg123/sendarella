<style>
.disabled {
	opacity:0.1;
	filter:alpha(opacity=10); /* For IE8 and earlier */
}
</style>

<div class="patients index">
<div class="actions" style="float: right;">
	<ul>
		<li style=""><a style = "float:left;" href="/members/patients/add/">New Patient</a>
		<!--<a style = "float:right;position:relative;top:-30px;" href="/members/groups/add/">New Group</a>-->
		</li>
	</ul>
</div>
	<h2><?php echo __('Patients');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('?');?></th>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('fname');?></th>
			<th><?php echo $this->Paginator->sort('lname');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('phone');?></th>
			<th><?php echo $this->Paginator->sort('gender');?></th>
			<th><?php echo $this->Paginator->sort('condition');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
<!--			<th><?php echo $this->Paginator->sort('email_on');?></th>
			<th><?php echo $this->Paginator->sort('mail_on');?></th>
			<th><?php echo $this->Paginator->sort('text_on');?></th>-->
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($patients as $patient): ?>
	<tr>
		<td><input type="checkbox">&nbsp;</td>
		<td><?php echo h($patient['Patient']['id']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['fname']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['lname']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['email']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['phone']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['gender']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['condition']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['created']); ?>&nbsp;</td>
<!--		<td><?php if ($patient['Patient']['email_on']) {$class = "";} else  {$class = "disabled";} echo $this->Form->postLink($this->Html->image('email.png', array('alt' => 'Change E-Mail Setting')), array('controller' => 'patients', 'action' => 'change_email', $patient['Patient']['id']), array('class' => $class, 'escape' => false)); ?></td>
		<td><?php if ($patient['Patient']['mail_on']) {$class = "";} else  {$class = "disabled";} echo $this->Form->postLink($this->Html->image('mail.png', array('alt' => 'Change Mail Setting')), array('controller' => 'patients', 'action' => 'change_mail', $patient['Patient']['id']), array('class' => $class, 'escape' => false)); ?></td>
		<td><?php if ($patient['Patient']['text_on']) {$class = "";} else  {$class = "disabled";} echo $this->Form->postLink($this->Html->image('text.png', array('alt' => 'Change Texting Setting')), array('controller' => 'patients', 'action' => 'change_text', $patient['Patient']['id']), array('class' => $class, 'escape' => false)); ?></td>
		-->
		<td class="actions">
			<?php echo $this->Html->link(__('View/Edit'), array('action' => 'edit', $patient['Patient']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $patient['Patient']['id']), null, __('Are you sure you want to delete patient #%s?', $patient['Patient']['id'])); ?>
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
