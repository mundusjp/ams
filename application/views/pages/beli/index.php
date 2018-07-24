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
                <h4 class="text-themecolor">Beli</h4>
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
                                <h4 class="card-title">Data pembelian</h4>
                                <h6 class="card-subtitle">Data table example</h6>
                                <div class="table-responsive m-t-40">
                            <table id="myTable" class="table table-bordered table-striped">
                            <thead>
								<tr>
									<th>Id Beli</th>
									<th>Id Supplier</th>
									<th>Tanggal Transaksi</th>
									<th>Total Harga</th>
									<th>Deskripsi</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($beli as $b){ ?>
								<tr>
									<td><?php echo $b['id_beli']; ?></td>
									<td><?php echo $b['id_supplier']; ?></td>
									<td><?php echo $b['tanggal_transaksi']; ?></td>
									<td><?php echo $b['total_harga']; ?></td>
									<td><?php echo $b['deskripsi']; ?></td>
									<td>
										<a href="<?php echo site_url('beli/edit/'.$b['id_beli']); ?>">Edit</a> | 
										<a href="<?php echo site_url('beli/remove/'.$b['id_beli']); ?>">Delete</a>
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