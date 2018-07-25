<?php echo form_open('kebutuhan/edit/'.$kebutuhan['id_kebutuhan']); ?>
    <div>
		Id Divisi : 
		<select name="id_divisi">
			<option value="">select divisi</option>
			<?php 
			foreach($all_divisi as $divisi)
			{
				$selected = ($divisi['id_divisi'] == $kebutuhan['id_divisi']) ? ' selected="selected"' : "";

				echo '<option value="'.$divisi['id_divisi'].'" '.$selected.'>'.$divisi['nama'].'</option>';
			} 
			?>
		</select>
	</div>
	<div>
		<span class="text-danger">*</span>Nama Barang: 
		<input type="text" name="nama_barang" value="<?php echo ($this->input->post('nama_barang') ? $this->input->post('nama_barang') : $kebutuhan['nama_barang']); ?>" />
		<span class="text-danger"><?php echo form_error('nama_barang');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Jumlah : 
		<input type="text" name="jumlah" value="<?php echo ($this->input->post('jumlah') ? $this->input->post('jumlah') : $kebutuhan['jumlah']); ?>" />
		<span class="text-danger"><?php echo form_error('jumlah');?></span>
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>