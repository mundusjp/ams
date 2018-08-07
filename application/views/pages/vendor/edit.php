<?php echo form_open('vendor/edit/'.$vendor['id_vendor'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nama" class="col-md-4 control-label"><span class="text-danger">*</span>Nama</label>
		<div class="col-md-8">
			<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $vendor['nama']); ?>" class="form-control" id="nama" />
			<span class="text-danger"><?php echo form_error('nama');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="alamat" class="col-md-4 control-label"><span class="text-danger">*</span>Alamat</label>
		<div class="col-md-8">
			<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $vendor['alamat']); ?>" class="form-control" id="alamat" />
			<span class="text-danger"><?php echo form_error('alamat');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="no_hp" class="col-md-4 control-label"><span class="text-danger">*</span>No Hp</label>
		<div class="col-md-8">
			<input type="text" name="no_hp" value="<?php echo ($this->input->post('no_hp') ? $this->input->post('no_hp') : $vendor['no_hp']); ?>" class="form-control" id="no_hp" />
			<span class="text-danger"><?php echo form_error('no_hp');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-4 control-label"><span class="text-danger">*</span>Email</label>
		<div class="col-md-8">
			<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $vendor['email']); ?>" class="form-control" id="email" />
			<span class="text-danger"><?php echo form_error('email');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>