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
                <h4 class="text-themecolor">Profil</h4>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Ini working space teman teman                                  -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <?php echo form_open("admin/index");?>
                <img src="<?php echo base_url('assets/vertical/images/users/manager.png')?>" alt="user" class=""><br>
                <td>Username: <?php echo $user['username'];?></td><br>
                <td>Password: <?php echo $user['password'];?></td><br>
                <td>Nama: <?php echo $user['nama'];?></td><br>
                <td>NIPP: <?php echo $user['nipp'];?></td><br>
                <td>Jabatan: <?php echo $user['jabatan'];?></td><br>
                <td>No. Handphone: <?php echo $user['no_hp'];?></td><br>
                <td>Alamat: <?php echo $user['alamat'];?></td><br>
                <td>Email: <?php echo $user['email'];?></td><br>
                <?php echo form_close();?>
                <br>
                <a class="btn btn-outline-info waves-effect waves-light" data-toggle="modal" href="#edit<?php echo $user['id_user'];?>">Ubah</a>
                <div class="modal fade" id="edit<?php echo $user['id_user'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header text-center">
                        <h3 class="modal-title w-100 font-weight-bold">Edit Profil</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body mx-3">
                        <?php echo form_open('admin/editprofil/'.$user['id_user']); ?>
                        <form class="floating-labels m-t-40">
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Username</h6></label>
                              <input type="text" class="form-control" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $user['username']); ?>" />
                              <span class="bar"></span>
                          </div>
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Password</h6></label>
                              <div class="controls">
                              <input type="password" name="password" class="form-control" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $user['password']); ?>" /></div>
                              <span class="bar"></span>
                          </div>
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Nama</h6></label>
                              <input type="text" class="form-control" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $user['nama']); ?>" />
                              <span class="bar"></span>
                          </div>
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">NIPP</h6></label>
                              <input type="number" class="form-control" name="nipp" value="<?php echo ($this->input->post('nipp') ? $this->input->post('nipp') : $user['nipp']); ?>" />
                              <span class="bar"></span>
                          </div>
                          <div class="form-group m-b-40">
                              <label for="namakantor"><h6 class="font-weight-bold">Jabatan</h6></label>
                              <input type="text" class="form-control" name="jabatan" value="<?php echo ($this->input->post('jabatan') ? $this->input->post('jabatan') : $user['jabatan']); ?>" />
                              <span class="bar"></span>
                          </div>
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">No. Handphone</h6></label>
                              <input type="tel" class="form-control" name="no_hp" value="<?php echo ($this->input->post('no_hp') ? $this->input->post('no_hp') : $user['no_hp']); ?>" />
                              <span class="bar"></span>
                          </div>
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Alamat</h6></label>
                              <input type="text" class="form-control" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $user['alamat']); ?>" />
                              <span class="bar"></span>
                          </div>
                          <div class="form-group m-b-40">
                              <label><h6 class="font-weight-bold">Email</h6></label>
                              <input type="email" class="form-control" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $user['email']); ?>" />
                              <span class="bar"></span>
                          </div>
                        </div>
                      <div class="modal-footer d-flex justify-content-center">
                        <button type="submit "class="btn btn-info waves-effect waves-light">Simpan</button>
                      </div>
                      <?php echo form_close(); ?>
                <!-- ============================================================== -->
                <!-- tinggal masukin kodingan html disini                           -->
                <!-- ============================================================== -->


              </div>
            </div>
          </div>
        </div>





        <!-- ============================================================== -->
        <!-- Ini adalah akhir dari working space. No more coding below      -->
        <!-- ============================================================== -->
