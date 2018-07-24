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
                <h4 class="text-themecolor">Kantor</h4>
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
				<div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data kantor</h4>
                                <h6 class="card-subtitle">Data table example</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
										<tr>
										<th>Id Kantor</th>
										<th>Nama</th>
										<th>Alamat</th>
										<th>Status</th>
										<th>Actions</th>
									</tr>
									</thead>
									<tbody>
									<?php foreach($kantor as $k){ ?>
									<tr>
										<td><?php echo $k['id_kantor']; ?></td>
										<td><?php echo $k['nama']; ?></td>
										<td><?php echo $k['alamat']; ?></td>
										<td><?php echo $k['status']; ?></td>
										<td>
											<a href="<?php echo site_url('kantor/edit/'.$k['id_kantor']); ?>">Edit</a> | 
											<a href="<?php echo site_url('kantor/remove/'.$k['id_kantor']); ?>">Delete</a>
										</td>
									</tr>
									<?php } ?>
									</tbody>
								</table>
								</div>
								</div>
							</div>		
					</div>
				</div>
			</div>
			</div>