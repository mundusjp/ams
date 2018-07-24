<?php echo form_open('divisi/add'); ?>

	<div>
		<span class="text-danger">*</span>Kantor :
		<select name="id_kantor">
			<option value="">select kantor</option>
			<?php
			foreach($all_kantor as $kantor)
			{
				$selected = ($kantor['id_kantor'] == $this->input->post('id_kantor')) ? ' selected="selected"' : "";

				echo '<option value="'.$kantor['id_kantor'].'" '.$selected.'>'.$kantor['nama'].'</option>';
			}
			?>
		</select>
		<span class="text-danger"><?php echo form_error('id_kantor');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Nama :
		<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" />
		<span class="text-danger"><?php echo form_error('nama');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Gedung :
		<input type="text" name="gedung" value="<?php echo $this->input->post('gedung'); ?>" />
		<span class="text-danger"><?php echo form_error('gedung');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Lantai :
		<input type="text" name="lantai" value="<?php echo $this->input->post('lantai'); ?>" />
		<span class="text-danger"><?php echo form_error('lantai');?></span>
	</div>

	<button type="submit">Save</button>

<?php echo form_close(); ?>
