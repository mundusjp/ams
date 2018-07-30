<?php echo form_open('expired/perpanjang/'.$inventory['id_inventory']); ?>
	<div>
		<span class="text-danger">*</span>Durability sebelumnya: 
		<?php $sebelumnya = $tidakhabis['durability'] ?>
		<input type="text" name="durability" disabled value="<?php echo ($this->input->post('durability') ? $this->input->post('durability') : $tidakhabis['durability']); ?>" />
		<span class="text-danger"><?php echo form_error('durability');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Tambah Durability: 
		<input type="text" name="durability2" value="<?php echo $this->input->post('durability2'); ?>" />
		<span class="text-danger"><?php echo form_error('durability');?></span>
	</div>
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>