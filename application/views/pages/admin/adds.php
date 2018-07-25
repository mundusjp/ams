<?php echo form_open('user/add'); ?>

	<div>
		<span class="text-danger">*</span>Divisi : 
		<select name="id_divisi">
			<option value="">select divisi</option>
			<?php 
			foreach($all_divisi as $divisi)
			{
				$selected = ($divisi['id_divisi'] == $this->input->post('id_divisi')) ? ' selected="selected"' : "";

				echo '<option value="'.$divisi['id_divisi'].'" '.$selected.'>'.$divisi['nama'].'</option>';
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('id_divisi');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Password : 
		<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" />
		<span class="text-danger"><?php echo form_error('password');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Username : 
		<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" />
		<span class="text-danger"><?php echo form_error('username');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Nama : 
		<input type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" />
		<span class="text-danger"><?php echo form_error('nama');?></span>
	</div>
	<div>
		Nipp : 
		<input type="text" name="nipp" value="<?php echo $this->input->post('nipp'); ?>" />
		<span class="text-danger"><?php echo form_error('nipp');?></span>
	</div>
	<div>
		Jabatan : 
		<input type="text" name="jabatan" value="<?php echo $this->input->post('jabatan'); ?>" />
		<span class="text-danger"><?php echo form_error('jabatan');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Status : 
		<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" />
		<span class="text-danger"><?php echo form_error('status');?></span>
	</div>
	<div>
		No Hp : 
		<input type="text" name="no_hp" value="<?php echo $this->input->post('no_hp'); ?>" />
		<span class="text-danger"><?php echo form_error('no_hp');?></span>
	</div>
	<div>
		Alamat : 
		<input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" />
		<span class="text-danger"><?php echo form_error('alamat');?></span>
	</div>
	<div>
		Email : 
		<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" />
		<span class="text-danger"><?php echo form_error('email');?></span>
	</div>
	<div>
		Photo : 
		<input type="text" name="photo" value="<?php echo $this->input->post('photo'); ?>" />
		<span class="text-danger"><?php echo form_error('photo');?></span>
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>