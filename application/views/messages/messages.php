<?php if ($this->session->flashdata('msg_success')): ?>
	<div class="alert alert-success">
		<?php echo $this->session->flashdata('msg_success') ?>
	</div>
<?php endif ?>

<?php if ($this->session->flashdata('msg_error')): ?>
	<div class="alert alert-danger">
		<?php echo $this->session->flashdata('msg_error') ?>
	</div>
<?php endif ?>