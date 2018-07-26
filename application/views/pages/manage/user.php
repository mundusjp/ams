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
                <h4 class="text-themecolor">Manage Admin</h4>
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
                <h4 class="card-title"> Data Admin </h4>
                <!--        -->
                <!-- Modals -->
                <!--        -->
                <div class="modal fade" id="ModalAddUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header text-center">
                        <h3 class="modal-title w-100 font-weight-bold">Edit Kebutuhan</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body mx-3">
                        <form class="floating-labels m-t-40">
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Nama Lengkap</h6></label>
                              <input type="text" class="form-control" name="nama" value="<?php echo $this->input->post('nama'); ?>" />
                              <span class="bar"></span>
                          </div>
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Username</h6></label>
                              <input type="text" class="form-control" name="nama" value="<?php echo $this->input->post('nama'); ?>" />
                              <span class="bar"></span>
                          </div>
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Password</h6></label>
                              <div class="controls">
                              <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required" value="<?php echo $this->input->post('nama'); ?>" /></div>
                              <span class="bar"></span>
                          </div>
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Confirm Password</h6></label>
                              <div class="controls">
                                <input type="password" name="password2" data-validation-match-match="password" class="form-control" required value="<?php echo $this->input->post('nama'); ?>" /></div>
                              <span class="bar"></span>
                          </div>
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Nama Divisi</h6></label>
                              <select name="status" class="form-control" >
                                  <option value="1">Pusat</option>
                                    <?php $selected = (1 == $this->input->post('status')) ? ' selected="selected"' : ""; ?>
                                  <option value="2">Cabang</option>
                                    <?php $selected = (2 == $this->input->post('status')) ? ' selected="selected"' : ""; ?>
                              </select>
                          </div>
                        </div>
                      <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-info waves-effect waves-light">Ubah</button>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="modal fade" id="ModalEditUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header text-center">
                        <h3 class="modal-title w-100 font-weight-bold">Edit User</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body mx-3">
                        <form class="floating-labels m-t-40">
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Nama Lengkap</h6></label>
                              <input type="text" class="form-control" name="nama" value="<?php echo $this->input->post('nama'); ?>" />
                              <span class="bar"></span>
                          </div>
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Username</h6></label>
                              <input type="text" class="form-control" name="nama" value="<?php echo $this->input->post('nama'); ?>" />
                              <span class="bar"></span>
                          </div>
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Password</h6></label>
                              <div class="controls">
                              <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required" value="<?php echo $this->input->post('nama'); ?>" /></div>
                              <span class="bar"></span>
                          </div>
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Confirm Password</h6></label>
                              <div class="controls">
                                <input type="password" name="password2" data-validation-match-match="password" class="form-control" required value="<?php echo $this->input->post('nama'); ?>" /></div>
                              <span class="bar"></span>
                          </div>
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Nama Divisi</h6></label>
                              <select name="status" class="form-control" >
                                  <option value="1">Pusat</option>
                                    <?php $selected = (1 == $this->input->post('status')) ? ' selected="selected"' : ""; ?>
                                  <option value="2">Cabang</option>
                                    <?php $selected = (2 == $this->input->post('status')) ? ' selected="selected"' : ""; ?>
                              </select>
                          </div>
                        </div>
                      <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-info waves-effect waves-light">Ubah</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!--        -->
                <!-- Button -->
                <!--        -->
                <div class="row">
                  <div class="col-3">
                    <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#ModalAddUser" > add </button>
                  </div>
                </div>
                <!-- <h6 class="card-subtitle"> List inventaris semua divisi periode 2018 </h6> -->
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Divisi</th>
                                <!-- <th>Kantor</th> -->
                                <th>Email</th>
                                <th>No. Handphone</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $no = 1;
                          foreach($user as $u){ ?>
                          <tr>
                            <td><?php echo $no; $no++; ?></td>
                            <td><?php echo $u['nama']; ?></td>
                            <td><?php
                                foreach($all_divisi as $div){
                                    if($div['id_divisi']==$u['id_divisi']) {
                                      echo $div['nama'];}
                                }?></td>
                            <td><?php echo $u['email']; ?></td>
                            <td><?php echo $u['no_hp']; ?></td>
                            <td>
          										<a data-toggle="modal" data-target="#ModalEditUser" class="btn btn-outline-info waves-effect waves-light" href="<?php echo site_url('admin/edit')?>" >Edit</a> |
          										<a class="btn btn-outline-danger" href="<?php echo site_url('admin/remove/'.$u['id_user']); ?>">Hapus</a>
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
          </div>
        </div>





        <!-- ============================================================== -->
        <!-- Ini adalah akhir dari working space. No more coding below      -->
        <!-- ============================================================== -->
