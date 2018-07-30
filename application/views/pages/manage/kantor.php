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
                            <?php echo form_open('kantor/add'); ?>
                                <div class="modal fade" id="ModalTambahKantor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3 class="modal-title w-100 font-weight-bold">Tambah Kantor</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body mx-3">
                                        <form class="floating-labels m-t-40">
                                          <div class="form-group m-b-40">
                                              <label for="namakantor"><h6 class="font-weight-bold">Nama Kantor</h6></label>
                                              <input type="text" class="form-control" name="nama_kantor" value="<?php echo $this->input->post('nama_kantor'); ?>" />
                                              <span class="bar"></span>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <label for="alamatkantor"><h6 class="font-weight-bold">Alamat Kantor</h6></label>
                                              <input type="text" class="form-control" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" />
                                              <!-- <textarea rows="4" type="text" class="form-control" id="alamatkantor"></textarea> -->
                                              <span class="bar"></span>
                                          </div>
                                          <div class="form-group">
                                              <label><h6 class="font-weight-bold">Status</h6></label>
                                              <select name="status" class="form-control" >
                                                  <option value="1">Pusat</option>
                                                    <?php $selected = (1 == $this->input->post('status')) ? ' selected="selected"' : ""; ?>
                                                  <option value="2">Cabang</option>
                                                    <?php $selected = (2 == $this->input->post('status')) ? ' selected="selected"' : ""; ?>
                                              </select>
                                            </div>
                                        </div>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Tambah</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <?php echo form_close(); ?>
                                <div class="row">
                                  <div class="col-3">
                                    <button type="button" class="btn btn-info waaves-effect waves-light" data-toggle="modal" data-target="#ModalTambahKantor" > add </button>
                                  </div>
                                </div>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                    <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                    foreach ($kantor as $k){ ?>
                  <tr>
                    <td><?php echo $no; $no++; ?></td>
                    <td><?php echo $k['nama_kantor']; ?></td>
                    <td><?php echo $k['alamat']; ?></td>
                    <td><?php if($k['status'] == 1) echo 'Pusat';
                              else if($k['status'] == 2) echo 'Cabang';?></td>
                    <td>
                      <a class="btn btn-outline-info waves-effect waves-light" data-toggle="modal" href="#edit<?php echo $k['id_kantor']; ?>">Ubah</a>
                      <a class="btn btn-outline-danger waves-effect waves-light" href="<?php echo site_url('kantor/remove/'.$k['id_kantor']); ?>">Hapus</a
                    </td>
                  </tr>
                                <div class="modal fade" id="edit<?php echo $k['id_kantor'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3 class="modal-title w-100 font-weight-bold">Tambah Kantor</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body mx-3">
                                        <?php echo form_open('kantor/edit/'.$k['id_kantor']); ?>
                                        <form class="floating-labels m-t-40">
                                          <div class="form-group m-b-40">
                                              <label for="namakantor"><h6 class="font-weight-bold">Nama Kantor</h6></label>
                                              <input type="text" class="form-control" name="nama_kantor" value="<?php echo ($this->input->post('nama_kantor') ? $this->input->post('nama_kantor') : $k['nama_kantor']); ?>" />
                                              <span class="bar"></span>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <label for="alamatkantor"><h6 class="font-weight-bold">Alamat Kantor</h6></label>
                                              <input type="text" class="form-control" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $k['alamat']); ?>" />
                                              <!-- <textarea rows="4" type="text" class="form-control" id="alamatkantor"></textarea> -->
                                              <span class="bar"></span>
                                          </div>
                                          <div class="form-group">
                                              <label><h6 class="font-weight-bold">Status</h6></label>
                                              <select name="status" class="form-control" >
                                                  <option value="1">Pusat</option>
                                                    <?php $selected = (1 == $this->input->post('status')) ? ' selected="selected"' : ""; ?>
                                                  <option value="2">Cabang</option>
                                                    <?php $selected = (2 == $this->input->post('status')) ? ' selected="selected"' : ""; ?>
                                              </select>
                                            </div>
                                        </div>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
                                      </div>
                                      <?php echo form_close(); ?>
                                    </div>
                                  </div>
                                  </div>


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
