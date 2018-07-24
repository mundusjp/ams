<?php echo form_open('pemeliharaan/add'); ?>

	<div>
		<span class="text-danger">*</span>Inventory : 
		<select name="id_inventory">
			<option value="">select inventory</option>
			<?php 
			foreach($all_inventory as $inventory)
			{
				$selected = ($inventory['id_inventory'] == $this->input->post('id_inventory')) ? ' selected="selected"' : "";

				echo '<option value="'.$inventory['id_inventory'].'" '.$selected.'>'.$inventory['nama'].'</option>';
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('id_inventory');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Biaya : 
		<input type="text" name="biaya" value="<?php echo $this->input->post('biaya'); ?>" />
		<span class="text-danger"><?php echo form_error('biaya');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Tanggal : 
		<input type="text" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>" />
		<span class="text-danger"><?php echo form_error('tanggal');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Deskripsi : 
		<input type="text" name="deskripsi" value="<?php echo $this->input->post('deskripsi'); ?>" />
		<span class="text-danger"><?php echo form_error('deskripsi');?></span>
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>