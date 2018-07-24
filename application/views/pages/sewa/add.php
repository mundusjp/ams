<?php echo form_open('sewa/add'); ?>

	<div>
		Supplier : 
		<select name="id_supplier">
			<option value="">select supplier</option>
			<?php 
			foreach($all_supplier as $supplier)
			{
				$selected = ($supplier['id_supplier'] == $this->input->post('id_supplier')) ? ' selected="selected"' : "";

				echo '<option value="'.$supplier['id_supplier'].'" '.$selected.'>'.$supplier['nama'].'</option>';
			} 
			?>
		</select>
	</div>
	<div>
		<span class="text-danger">*</span>Tanggal Transaksi : 
		<input type="text" name="tanggal_transaksi" value="<?php echo $this->input->post('tanggal_transaksi'); ?>" />
		<span class="text-danger"><?php echo form_error('tanggal_transaksi');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Periode Start : 
		<input type="text" name="periode_start" value="<?php echo $this->input->post('periode_start'); ?>" />
		<span class="text-danger"><?php echo form_error('periode_start');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Periode End : 
		<input type="text" name="periode_end" value="<?php echo $this->input->post('periode_end'); ?>" />
		<span class="text-danger"><?php echo form_error('periode_end');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Biaya : 
		<input type="text" name="biaya" value="<?php echo $this->input->post('biaya'); ?>" />
		<span class="text-danger"><?php echo form_error('biaya');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Deskripsi : 
		<input type="text" name="deskripsi" value="<?php echo $this->input->post('deskripsi'); ?>" />
		<span class="text-danger"><?php echo form_error('deskripsi');?></span>
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>