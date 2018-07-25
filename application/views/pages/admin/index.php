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
                <h4 class="text-themecolor">Admin</h4>
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
          										<a class="btn btn-info" href="">Edit</a> |
          										<a class="btn btn-danger" href="<?php echo site_url('admin/remove/'.$u['id_user']); ?>">Hapus</a>
          									</td>
                          </tr>
                          <?php } ?>
                          </tbody>
                      </table>
                  </div>
                  <div class="form-group text-center m-t-20">
                      <div class="col-xs-6">
                          <button class="btn btn-block btn-primary btn-block waves-effect waves-light" type="submit">Edit</button>
                      </div>
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
