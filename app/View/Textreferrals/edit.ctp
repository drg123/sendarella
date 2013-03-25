<div class="emails form">
<?php echo $this->Form->create('Textreferral');?>
	<fieldset>
		<legend><?php echo __('Edit Text'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('series');
		echo $this->Form->input('content');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>