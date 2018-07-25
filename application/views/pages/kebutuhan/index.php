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
                                <!--        -->
                                <!-- Modals -->
                                <!--        -->
                                <div class="modal fade" id="ModalTambahDivisi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3 class="modal-title w-100 font-weight-bold">Tambah Kebutuhan</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body mx-3">
                                        <form class="floating-labels m-t-40">
                                          <div class="form-group m-b-40">
                                              <label><h6 class="font-weight-bold">Nama Divisi</h6></label>
                                              <select name="status" class="form-control" >
                                                  <option value="1">Pusat</option>
                                                    <?php $selected = (1 == $this->input->post('status')) ? ' selected="selected"' : ""; ?>
                                                  <option value="2">Cabang</option>
                                                    <?php $selected = (2 == $this->input->post('status')) ? ' selected="selected"' : ""; ?>
                                              </select>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <label><h6 class="font-weight-bold">Nama Barang</h6></label>
                                              <input type="text" class="form-control" name="nama" value="<?php echo $this->input->post('nama'); ?>" />
                                              <span class="bar"></span>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <label><h6 class="font-weight-bold">Jumlah</h6></label>
                                              <input type="text" class="form-control" name="nama" value="<?php echo $this->input->post('nama'); ?>" />
                                              <span class="bar"></span>
                                          </div>
                                        </div>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Tambah</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--        -->
                                <!-- Button -->
                                <!--        -->
                                <div class="row">
                                  <div class="col-3">
                                    <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#ModalTambahDivisi" > add </button>
                                  </div>
                                </div>
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
