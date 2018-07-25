<?php echo form_open('inventory/add_bthp'); ?>

	<div>
		Divisi : 
		<select name="id_divisi_pengada">
			<option value="">select divisi</option>
			<?php 
			foreach($all_divisi as $divisi)
			{
				$selected = ($divisi['id_divisi'] == $this->input->post('id_divisi_pengada')) ? ' selected="selected"' : "";

				echo '<option value="'.$divisi['id_divisi'].'" '.$selected.'>'.$divisi['nama'].'</option>';
			} 
			?>
		</select>
	</div>
	<div>
		<span class="text-danger">*</span>Nama : 
		<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" />
		<span class="text-danger"><?php echo form_error('nama');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Jenis : 
		<input type="text" name="jenis" value="<?php echo $this->input->post('jenis'); ?>" />
		<span class="text-danger"><?php echo form_error('jenis');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Merk : 
		<input type="text" name="merk" value="<?php echo $this->input->post('merk'); ?>" />
		<span class="text-danger"><?php echo form_error('merk');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Nama Divisi Pengada : 
		<input type="text" name="nama_divisi_pengada" value="<?php echo $this->input->post('nama_divisi_pengada'); ?>" />
		<span class="text-danger"><?php echo form_error('nama_divisi_pengada');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Tanggal : 
		<input type="text" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>" />
		<span class="text-danger"><?php echo form_error('tanggal');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Kategori : 
		<input type="text" name="kategori" value="<?php echo $this->input->post('kategori'); ?>" />
		<span class="text-danger"><?php echo form_error('kategori');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Id Beli/sewa : 
		<input type="text" name="id_beli/sewa" value="<?php echo $this->input->post('id_beli/sewa'); ?>" />
		<span class="text-danger"><?php echo form_error('id_beli/sewa');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Serial_id : 
		<input type="text" name="serial_id" value="<?php echo $this->input->post('serial_id'); ?>" />
		<span class="text-danger"><?php echo form_error('serial_id');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Kondisi : 
		<input type="text" name="kondisi" value="<?php echo $this->input->post('kondisi'); ?>" />
		<span class="text-danger"><?php echo form_error('kondisi');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Durability : 
		<input type="text" name="durability" value="<?php echo $this->input->post('durability'); ?>" />
		<span class="text-danger"><?php echo form_error('durability');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Status : 
		<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" />
		<span class="text-danger"><?php echo form_error('status');?></span>
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>