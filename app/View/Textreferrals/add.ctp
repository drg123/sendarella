<div class="emails form">
<?php echo $this->Form->create('Textreferral');?>
	<fieldset>
		<legend><?php echo __('New Referral Text'); ?></legend>
	<?php
		echo $this->Form->input('series');
		echo $this->Form->input('content', array('type' => 'textarea'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
