<center>
		<h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'inventories/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
    <center>
    <?php echo form_open('inventory/add'); ?>

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
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>
</center>
