<?php echo form_open('expired/add/'.$inventory['id_inventory']); ?>
	<div>
		<span class="text-danger">*</span>Id_inventory : 
		<input type="text" name="id_inventory" disabled value="<?php echo ($this->input->post('id_inventory') ? $this->input->post('id_inventory') : $inventory['id_inventory']); ?>" />
		<span class="text-danger"><?php echo form_error('id_inventory');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Pembeli : 
		<input type="text" name="pembeli" value="<?php echo $this->input->post('pembeli'); ?>" />
		<span class="text-danger"><?php echo form_error('pembeli');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Harga : 
		<input type="text" name="harga" value="<?php echo $this->input->post('harga'); ?>" />
		<span class="text-danger"><?php echo form_error('harga');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Tanggal : 
		<input type="text" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>" />
		<span class="text-danger"><?php echo form_error('tanggal');?></span>
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>