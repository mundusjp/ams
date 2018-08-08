<?php echo form_open('eventlog/add',array("class"=>"form-horizontal")); ?>

	<!-- <div class="form-group">
		<label for="id_user" class="col-md-4 control-label"><span class="text-danger">*</span>User</label>
		<div class="col-md-8">
			<select name="id_user" class="form-control">
				<option value="">select user</option>
				<?php 
				foreach($all_user as $user)
				{
					$selected = ($user['id_user'] == $this->input->post('id_user')) ? ' selected="selected"' : "";

					echo '<option value="'.$user['id_user'].'" '.$selected.'>'.$user['username'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('id_user');?></span>
		</div>
	</div> -->
	<div class="form-group">
		<label for="event" class="col-md-4 control-label"><span class="text-danger">*</span>Event</label>
		<div class="col-md-8">
			<input type="text" name="event" value="<?php echo $this->input->post('event'); ?>" class="form-control" id="event" />
			<span class="text-danger"><?php echo form_error('event');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="ref_id" class="col-md-4 control-label"><span class="text-danger">*</span>Ref Id</label>
		<div class="col-md-8">
			<input type="text" name="ref_id" value="<?php echo $this->input->post('ref_id'); ?>" class="form-control" id="ref_id" />
			<span class="text-danger"><?php echo form_error('ref_id');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="eventDesc" class="col-md-4 control-label">EventDesc</label>
		<div class="col-md-8">
			<input type="text" name="eventDesc" value="<?php echo $this->input->post('eventDesc'); ?>" class="form-control" id="eventDesc" />
			<span class="text-danger"><?php echo form_error('eventDesc');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="eventTable" class="col-md-4 control-label"><span class="text-danger">*</span>EventTable</label>
		<div class="col-md-8">
			<input type="text" name="eventTable" value="<?php echo $this->input->post('eventTable'); ?>" class="form-control" id="eventTable" />
			<span class="text-danger"><?php echo form_error('eventTable');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="eventTime" class="col-md-4 control-label"><span class="text-danger">*</span>EventTime</label>
		<div class="col-md-8">
			<input type="text" name="eventTime" value="<?php echo $this->input->post('eventTime'); ?>" class="form-control" id="eventTime" />
			<span class="text-danger"><?php echo form_error('eventTime');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>