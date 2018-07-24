<?php echo form_open('kantor/add'); ?>

	<div>
		<span class="text-danger">*</span>Nama : 
		<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" />
		<span class="text-danger"><?php echo form_error('nama');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Alamat : 
		<input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" />
		<span class="text-danger"><?php echo form_error('alamat');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Status : 
		<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" />
		<span class="text-danger"><?php echo form_error('status');?></span>
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>