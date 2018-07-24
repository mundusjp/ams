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
                <h4 class="text-themecolor">Divisi</h4>
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
                                <h4 class="card-title">Data divisi</h4>
                                <h6 class="card-subtitle">Data table example</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
								<tr>
									<th>Id Divisi</th>
									<th>Id Kantor</th>
									<th>Nama</th>
									<th>Gedung</th>
									<th>Lantai</th>
									<th>Actions</th>
								</tr>
								</thead>
																<tbody>
								<?php foreach($divisi as $d){ ?>
								<tr>
									<td><?php echo $d['id_divisi']; ?></td>
									<td><?php echo $d['id_kantor']; ?></td>
									<td><?php echo $d['nama']; ?></td>
									<td><?php echo $d['gedung']; ?></td>
									<td><?php echo $d['lantai']; ?></td>
									<td>
										<a href="<?php echo site_url('divisi/edit/'.$d['id_divisi']); ?>">Edit</a> | 
										<a href="<?php echo site_url('divisi/remove/'.$d['id_divisi']); ?>">Delete</a>
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