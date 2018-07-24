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
                <h4 class="text-themecolor">Pemeliharaan</h4>
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
                                <h4 class="card-title">Data Pemeliharaan</h4>
                                <h6 class="card-subtitle">Data table example</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
										<tr>
											<th>Id Pemeliharaan</th>
											<th>Id Inventory</th>
											<th>Biaya</th>
											<th>Tanggal</th>
											<th>Deskripsi</th>
											<th>Actions</th>
										</tr>
										</thead>
																		<tbody>
										<?php foreach($pemeliharaan as $p){ ?>
										<tr>
											<td><?php echo $p['id_pemeliharaan']; ?></td>
											<td><?php echo $p['id_inventory']; ?></td>
											<td><?php echo $p['biaya']; ?></td>
											<td><?php echo $p['tanggal']; ?></td>
											<td><?php echo $p['deskripsi']; ?></td>
											<td>
												<a href="<?php echo site_url('pemeliharaan/edit/'.$p['id_pemeliharaan']); ?>">Edit</a> | 
												<a href="<?php echo site_url('pemeliharaan/remove/'.$p['id_pemeliharaan']); ?>">Delete</a>
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
