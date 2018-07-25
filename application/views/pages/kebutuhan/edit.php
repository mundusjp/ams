<?php echo form_open('supplier/edit/'.$supplier['id_supplier']); ?>

	<div>
		<span class="text-danger">*</span>Nama : 
		<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $supplier['nama']); ?>" />
		<span class="text-danger"><?php echo form_error('nama');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Alamat : 
		<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $supplier['alamat']); ?>" />
		<span class="text-danger"><?php echo form_error('alamat');?></span>
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>