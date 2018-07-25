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
                                <h4 class="card-title">Data Kebutuhan</h4>
                                <h6 class="card-subtitle">Data table example</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
										<tr>
										<th>Id Kebutuhan</th>
										<th>Nama Barang</th>
										<th>Jumlah</th>
										<th>Divisi</th>
                                        <th>User</th>
									</tr>
									</thead>
									<tbody>
									<?php foreach($kebutuhan as $k){ ?>
									<tr>
										<td><?php echo $k['id_kebutuhan']; ?></td>
										<td><?php echo $k['nama_barang']; ?></td>
										<td><?php echo $k['jumlah']; ?></td>
                                        <td><?php
                                        foreach($all_divisi as $d){
                                            if($d['id_divisi']==$k['id_divisi']) {echo $d['nama'];}
                                        }?></td>
                                        <td><?php
                                        foreach($all_user as $u){
                                            if($u['id_user']==$k['id_user']) {echo $u['nama'];}
                                        }?></td>
										<td>
											<a href="<?php echo site_url('kebutuhan/edit/'.$k['id_kebutuhan']); ?>">Edit</a> | 
											<a href="<?php echo site_url('kebutuhan/remove/'.$k['id_kebutuhan']); ?>">Delete</a>
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