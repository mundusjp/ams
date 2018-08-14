<?php echo form_open('inventory/add_bhp'); ?>

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
		<input type="text" name="id_transaksi" value="<?php echo $this->input->post('id_transaksi'); ?>" />
		<span class="text-danger"><?php echo form_error('id_transaksi');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Jumlah : 
		<input type="text" name="jumlah" value="<?php echo $this->input->post('jumlah'); ?>" />
		<span class="text-danger"><?php echo form_error('jumlah');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Satuan : 
		<input type="text" name="satuan" value="<?php echo $this->input->post('satuan'); ?>" />
		<span class="text-danger"><?php echo form_error('satuan');?></span>
	</div>
	<button type="submit">Save</button>

<?php echo form_close(); ?>