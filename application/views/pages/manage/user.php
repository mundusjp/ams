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
                <?php echo form_open("manage/user");?>
                <select name="pilih_cabang" class="select2 form-control custom-select col-6" style="width: 40%; height:36px;">
                  <option value="">Pilih Kantor</option><?php
                  foreach($all_kantor as $kantor)
                  {
                    echo '<option value="'.$kantor['id_kantor'].'">'.$kantor['nama_kantor'].'</option>';
                  }
                  ?>
                </select>
                <button type="submit" class="btn btn-info waves-effect waves-light">Pilih</button>
                <?php echo form_close();?>
                <br>

                <div class="row">
                  <div class="col-3">
                    <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#ModalAddUser" > Tambah Admin </button>
                  </div>
                </div>
                <?php if(count($records)){?>
                <?php echo form_open('admin/add'); ?>
                <div class="modal fade" id="ModalAddUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header text-center">
                        <h3 class="modal-title w-100 font-weight-bold">Tambah Admin</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body mx-3">
                        <form class="floating-labels m-t-40">
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Nama Lengkap</h6></label>
                              <input type="text" class="form-control" name="nama" value="<?php echo $this->input->post('nama'); ?>" />
                          </div>
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Username</h6></label>
                              <input type="text" class="form-control" name="username" value="<?php echo $this->input->post('username'); ?>" />
                          </div>
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Password</h6></label>
                              <div class="controls">
                              <input type="password" class="form-control" name="password" value="<?php echo $this->input->post('password'); ?>" /></div>
                          </div>
                          <!-- <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Konfirmasi Password</h6></label>
                              <div class="controls">
                                <input type="password" name="password2" data-validation-match-match="password" class="form-control" required value="<?php echo $this->input->post('nama'); ?>" /></div>
                              <span class="bar"></span>
                          </div> -->
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Status</h6></label>
                              <select name="status" class="form-control" >
                                  <option value="1">Master</option>
                                    <?php $selected = (1 == $this->input->post('status')) ? ' selected="selected"' : ""; ?>
                                  <option value="2">Reporter</option>
                                    <?php $selected = (2 == $this->input->post('status')) ? ' selected="selected"' : ""; ?>
                              </select>
                          </div>
                          <div class="form-group m-b-40">
                              <span class="bar"></span>
                              <label><h6 class="font-weight-bold">Nama Divisi</h6></label>
                              <select name="id_divisi" class="form-control">
                                <option value="">Pilih Divisi</option>
                                <?php
                                foreach($all_divisi as $div)
                                {
                                  $selected = ($div['id_divisi'] == $this->input->post('id_divisi')) ? ' selected="selected"' : "";

                                  echo '<option value="'.$div['id_divisi'].'" '.$selected.'>'.$div['nama'].'</option>';
                                }
                                ?>
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
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Divisi</th>
                                <th>Kantor</th>
                                <th>Status</th>
                                <th>Email</th>
                                <th>No. Handphone</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $no = 1;
                          foreach($records as $rec){ ?>
                          <tr>
                            <td><?php echo $no; $no++; ?></td>
                            <td><?php echo $rec['nama']; ?></td>
                            <td><?php
                                foreach($all_divisi as $div){
                                    if($div['id_divisi']==$rec['id_divisi']) {
                                      echo $div['nama_divisi'];}
                                }?></td>
                                <td><?php foreach($all_kantor as $k){
                                        if($k['id_kantor']==$rec['id_kantor']) {
                                          echo $k['nama_kantor'];}
                                      }?>
                                      </td>
                            <td><?php if ($rec['status'] == 1) echo ('Master');
                                      else if ($rec['status'] == 2) echo ('Reporter');
                                ?></td>

                            <td><?php echo $rec['email']; ?></td>
                            <td><?php echo $rec['no_hp']; ?></td>
                            <td>
                              <a data-toggle="modal" class="btn btn-outline-info waves-effect waves-light" href="#edit<?php echo $rec['id_user']; ?>" >Ubah</a> |
                              <a class="btn btn-outline-danger" href="<?php echo site_url('admin/remove/'.$rec['id_user']); ?>">Hapus</a>
                            </td>
                          </tr>

                <div class="modal fade" id="edit<?php echo $rec['id_user'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header text-center">
                        <h3 class="modal-title w-100 font-weight-bold">Edit User</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body mx-3">
                        <?php echo form_open('admin/edit/'.$rec['id_user']); ?>
                        <form class="floating-labels m-t-40">
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Nama Lengkap</h6></label>
                              <input type="text" class="form-control" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $rec['nama']); ?>" />
                              <span class="bar"></span>
                          </div>
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Username</h6></label>
                              <input type="text" class="form-control" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $rec['username']); ?>" />
                              <span class="bar"></span>
                          </div>
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Password</h6></label>
                              <div class="controls">
                              <input type="password" name="password" class="form-control" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $rec['password']); ?>" /></div>
                              <span class="bar"></span>
                          </div>
                          <!-- <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Confirm Password</h6></label>
                              <div class="controls">
                                <input type="password" name="password2" data-validation-match-match="password" class="form-control" required value="<?php echo $this->input->post('nama'); ?>" /></div>
                              <span class="bar"></span>
                          </div> -->
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Status</h6></label>
                              <select name="status" class="form-control" >
                                  <option value="1">Master</option>
                                    <?php $selected = (1 == $this->input->post('status')) ? ' selected="selected"' : ""; ?>
                                  <option value="2">Reporter</option>
                                    <?php $selected = (2 == $this->input->post('status')) ? ' selected="selected"' : ""; ?>
                              </select>
                          </div>
                          <div class="form-group m-b-40">
                              <span class="bar"></span>
                              <label><h6 class="font-weight-bold">Nama Divisi</h6></label>
                              <select name="id_divisi" class="form-control">
                                <option value="">Pilih Divisi</option>
                                <?php
                                foreach($all_divisi as $div)
                                {
                                  $selected = ($div['id_divisi'] == $rec['id_divisi']) ? ' selected="selected"' : "";

                                  echo '<option value="'.$div['id_divisi'].'" '.$selected.'>'.$div['nama_divisi'].'</option>';
                                }
                                ?>
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
                <!--        -->
                <!-- Button -->
                <!--        -->

                <!-- <h6 class="card-subtitle"> List inventaris semua divisi periode 2018 </h6> -->

              <?php }
            }
            else{

            }?>
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
