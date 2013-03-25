<div class="users view">
<h2><?php  echo __('User');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fname'); ?></dt>
		<dd>
			<?php echo h($user['User']['fname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lname'); ?></dt>
		<dd>
			<?php echo h($user['User']['lname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip'); ?></dt>
		<dd>
			<?php echo h($user['User']['ip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stripe'); ?></dt>
		<dd>
			<?php echo h($user['User']['stripe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($user['User']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($user['User']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($user['User']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($user['User']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($user['User']['phone']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clinics'), array('controller' => 'clinics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clinic'), array('controller' => 'clinics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mailers'), array('controller' => 'mailers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mailer'), array('controller' => 'mailers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patients'), array('controller' => 'patients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Texts'), array('controller' => 'texts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Text'), array('controller' => 'texts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clinics');?></h3>
	<?php if (!empty($user['Clinic'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Logo'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Zip'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Clinic'] as $clinic): ?>
		<tr>
			<td><?php echo $clinic['id'];?></td>
			<td><?php echo $clinic['user_id'];?></td>
			<td><?php echo $clinic['created'];?></td>
			<td><?php echo $clinic['modified'];?></td>
			<td><?php echo $clinic['logo'];?></td>
			<td><?php echo $clinic['address'];?></td>
			<td><?php echo $clinic['city'];?></td>
			<td><?php echo $clinic['state'];?></td>
			<td><?php echo $clinic['zip'];?></td>
			<td><?php echo $clinic['phone'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clinics', 'action' => 'view', $clinic['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clinics', 'action' => 'edit', $clinic['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clinics', 'action' => 'delete', $clinic['id']), null, __('Are you sure you want to delete # %s?', $clinic['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Clinic'), array('controller' => 'clinics', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Emails');?></h3>
	<?php if (!empty($user['Email'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Subject'); ?></th>
		<th><?php echo __('Text Content'); ?></th>
		<th><?php echo __('Html Content'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Email'] as $email): ?>
		<tr>
			<td><?php echo $email['id'];?></td>
			<td><?php echo $email['user_id'];?></td>
			<td><?php echo $email['created'];?></td>
			<td><?php echo $email['modified'];?></td>
			<td><?php echo $email['subject'];?></td>
			<td><?php echo $email['text_content'];?></td>
			<td><?php echo $email['html_content'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'emails', 'action' => 'view', $email['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'emails', 'action' => 'edit', $email['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'emails', 'action' => 'delete', $email['id']), null, __('Are you sure you want to delete # %s?', $email['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Mailers');?></h3>
	<?php if (!empty($user['Mailer'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Filename'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Mailer'] as $mailer): ?>
		<tr>
			<td><?php echo $mailer['id'];?></td>
			<td><?php echo $mailer['user_id'];?></td>
			<td><?php echo $mailer['created'];?></td>
			<td><?php echo $mailer['modified'];?></td>
			<td><?php echo $mailer['filename'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mailers', 'action' => 'view', $mailer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mailers', 'action' => 'edit', $mailer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mailers', 'action' => 'delete', $mailer['id']), null, __('Are you sure you want to delete # %s?', $mailer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mailer'), array('controller' => 'mailers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Patients');?></h3>
	<?php if (!empty($user['Patient'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Zip'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Patient'] as $patient): ?>
		<tr>
			<td><?php echo $patient['id'];?></td>
			<td><?php echo $patient['user_id'];?></td>
			<td><?php echo $patient['created'];?></td>
			<td><?php echo $patient['modified'];?></td>
			<td><?php echo $patient['email'];?></td>
			<td><?php echo $patient['address'];?></td>
			<td><?php echo $patient['city'];?></td>
			<td><?php echo $patient['state'];?></td>
			<td><?php echo $patient['zip'];?></td>
			<td><?php echo $patient['phone'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'patients', 'action' => 'view', $patient['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'patients', 'action' => 'edit', $patient['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'patients', 'action' => 'delete', $patient['id']), null, __('Are you sure you want to delete # %s?', $patient['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Patient'), array('controller' => 'patients', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Texts');?></h3>
	<?php if (!empty($user['Text'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Text'] as $text): ?>
		<tr>
			<td><?php echo $text['id'];?></td>
			<td><?php echo $text['user_id'];?></td>
			<td><?php echo $text['created'];?></td>
			<td><?php echo $text['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'texts', 'action' => 'view', $text['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'texts', 'action' => 'edit', $text['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'texts', 'action' => 'delete', $text['id']), null, __('Are you sure you want to delete # %s?', $text['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Text'), array('controller' => 'texts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
