<div class="texts form">
<?php echo $this->Form->create('Text');?>
	<fieldset>
		<legend><?php echo __('Add Text'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('subject');
		echo $this->Form->input('text_content');
		echo $this->Form->input('html_content');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Texts'), array('action' => 'index'));?></li>
	</ul>
</div>
