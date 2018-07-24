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
                <h4 class="text-themecolor">Supplier</h4>
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
                                <h4 class="card-title">Data supplier</h4>
                                <h6 class="card-subtitle">Data table example</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
										<tr>
										<th>Id Supplier</th>
										<th>Nama</th>
										<th>Alamat</th>
										<th>Actions</th>
									</tr>
									</thead>
									<tbody>
									<?php foreach($supplier as $s){ ?>
									<tr>
										<td><?php echo $s['id_supplier']; ?></td>
										<td><?php echo $s['nama']; ?></td>
										<td><?php echo $s['alamat']; ?></td>
										<td>
											<a href="<?php echo site_url('supplier/edit/'.$s['id_supplier']); ?>">Edit</a> | 
											<a href="<?php echo site_url('supplier/remove/'.$s['id_supplier']); ?>">Delete</a>
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