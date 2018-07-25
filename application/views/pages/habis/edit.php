<?php echo form_open('inventory/edit/'.$inventory['id_inventory']); ?>

	<div>
		Divisi : 
		<select name="id_divisi_pengada">
			<option value="">select divisi</option>
			<?php 
			foreach($all_divisi as $divisi)
			{
				$selected = ($divisi['id_divisi'] == $inventory['id_divisi_pengada']) ? ' selected="selected"' : "";

				echo '<option value="'.$divisi['id_divisi'].'" '.$selected.'>'.$divisi['nama'].'</option>';
			} 
			?>
		</select>
	</div>
	<div>
		<span class="text-danger">*</span>Nama : 
		<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $inventory['nama']); ?>" />
		<span class="text-danger"><?php echo form_error('nama');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Jenis : 
		<input type="text" name="jenis" value="<?php echo ($this->input->post('jenis') ? $this->input->post('jenis') : $inventory['jenis']); ?>" />
		<span class="text-danger"><?php echo form_error('jenis');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Merk : 
		<input type="text" name="merk" value="<?php echo ($this->input->post('merk') ? $this->input->post('merk') : $inventory['merk']); ?>" />
		<span class="text-danger"><?php echo form_error('merk');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Nama Divisi Pengada : 
		<input type="text" name="nama_divisi_pengada" value="<?php echo ($this->input->post('nama_divisi_pengada') ? $this->input->post('nama_divisi_pengada') : $inventory['nama_divisi_pengada']); ?>" />
		<span class="text-danger"><?php echo form_error('nama_divisi_pengada');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Tanggal : 
		<input type="text" name="tanggal" value="<?php echo ($this->input->post('tanggal') ? $this->input->post('tanggal') : $inventory['tanggal']); ?>" />
		<span class="text-danger"><?php echo form_error('tanggal');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Kategori : 
		<input type="text" name="kategori" value="<?php echo ($this->input->post('kategori') ? $this->input->post('kategori') : $inventory['kategori']); ?>" />
		<span class="text-danger"><?php echo form_error('kategori');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Id Beli/sewa : 
		<input type="text" name="id_beli/sewa" value="<?php echo ($this->input->post('id_beli/sewa') ? $this->input->post('id_beli/sewa') : $inventory['id_beli/sewa']); ?>" />
		<span class="text-danger"><?php echo form_error('id_beli/sewa');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Jumlah : 
		<input type="text" name="jumlah" value="<?php echo ($this->input->post('jumlah') ? $this->input->post('jumlah') : $habis['jumlah']); ?>" />
		<span class="text-danger"><?php echo form_error('jumlah');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Satuan : 
		<input type="text" name="satuan" value="<?php echo ($this->input->post('satuan') ? $this->input->post('satuan') : $habis['satuan']); ?>" />
		<span class="text-danger"><?php echo form_error('satuan');?></span>
	</div>
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>