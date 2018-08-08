
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Home</h4>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Ini working space teman teman                                  -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <!-- ============================================================== -->
                <!-- tinggal masukin kodingan html disini                           -->
                <!-- ============================================================== -->
				<div class="pull-right">
	<a href="<?php echo site_url('eventlog/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>No</th>
		<th>Id User</th>
		<th>Event</th>
		<th>Ref Id</th>
		<th>EventDesc</th>
		<th>EventTable</th>
		<th>EventTime</th>
		<th>Actions</th>
    </tr>
	<?php $no=1; foreach($eventlog as $e){ ?>
    <tr>
		<td><?php echo $no++; ?></td>
		<td>
		<?php 
				foreach($all_user as $user)
				{
				 if ($user['id_user'] == $e['id_user'])
				  echo $user['nama'];
				}
				?>
		</td>
		<td><?php echo $e['event']; ?></td>
		<td><?php echo $e['ref_id']; ?></td>
		<td><?php echo $e['eventDesc']; ?></td>
		<td><?php echo $e['eventTable']; ?></td>
		<td><?php echo $e['eventTime']; ?></td>
		<td>
            <a href="<?php echo site_url('eventlog/edit/'.$e['id_event']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('eventlog/remove/'.$e['id_event']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>

              </div>
            </div>
          </div>
        </div>