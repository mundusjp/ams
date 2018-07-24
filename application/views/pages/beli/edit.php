<?php echo form_open('beli/edit/'.$beli['id_beli']); ?>

	<div>
		Supplier : 
		<select name="id_supplier">
			<option value="">select supplier</option>
			<?php 
			foreach($all_supplier as $supplier)
			{
				$selected = ($supplier['id_supplier'] == $beli['id_supplier']) ? ' selected="selected"' : "";

				echo '<option value="'.$supplier['id_supplier'].'" '.$selected.'>'.$supplier['id_supplier'].'</option>';
			} 
			?>
		</select>
	</div>
	<div>
		<span class="text-danger">*</span>Tanggal Transaksi : 
		<input type="text" name="tanggal_transaksi" value="<?php echo ($this->input->post('tanggal_transaksi') ? $this->input->post('tanggal_transaksi') : $beli['tanggal_transaksi']); ?>" />
		<span class="text-danger"><?php echo form_error('tanggal_transaksi');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Total Harga : 
		<input type="text" name="total_harga" value="<?php echo ($this->input->post('total_harga') ? $this->input->post('total_harga') : $beli['total_harga']); ?>" />
		<span class="text-danger"><?php echo form_error('total_harga');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Deskripsi : 
		<input type="text" name="deskripsi" value="<?php echo ($this->input->post('deskripsi') ? $this->input->post('deskripsi') : $beli['deskripsi']); ?>" />
		<span class="text-danger"><?php echo form_error('deskripsi');?></span>
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>