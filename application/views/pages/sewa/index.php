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
                <h4 class="text-themecolor">Sewa</h4>
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
                                <h4 class="card-title">Data penyewaan</h4>
                                <h6 class="card-subtitle">Data table example</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
										<tr>
											<th>Id Sewa</th>
											<th>Id Supplier</th>
											<th>Tanggal Transaksi</th>
											<th>Periode Start</th>
											<th>Periode End</th>
											<th>Biaya</th>
											<th>Deskripsi</th>
											<th>Actions</th>
										</tr>
										</thead>
										<tbody>
										<?php foreach($sewa as $s){ ?>
										<tr>
											<td><?php echo $s['id_sewa']; ?></td>
											<td><?php echo $s['id_supplier']; ?></td>
											<td><?php echo $s['tanggal_transaksi']; ?></td>
											<td><?php echo $s['periode_start']; ?></td>
											<td><?php echo $s['periode_end']; ?></td>
											<td><?php echo $s['biaya']; ?></td>
											<td><?php echo $s['deskripsi']; ?></td>
											<td>
												<a href="<?php echo site_url('sewa/edit/'.$s['id_sewa']); ?>">Edit</a> | 
												<a href="<?php echo site_url('sewa/remove/'.$s['id_sewa']); ?>">Delete</a>
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
			</div>`