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
                                <h4 class="card-title">Data Vendor</h4>
                                <!-- modal menambahkan fungsi  -->
                                <div class="modal fade" id="ModalTambahKantor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h3 class="modal-title w-100 font-weight-bold">Tambah vendor</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                            </div>
                                            <div class="modal-body"><div class="row"><div class="col-lg-12">
                                              <?php echo form_open('vendor/add'); ?>
                                              <form id="registrasi" class="floating-labels m-t-40">
                                              <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group m-b-40">
                                                        <label for="id_kantor"><h6 class="font-weight-bold"><span class="text-danger">*</span>Nama</h6></label>
                                                        <span class="bar"></span>
                                                        <div class="controls">
                                                        <input required type="text" maxlength="50" class="form-control"  required name="nama"  value="<?php echo $this->input->post('nama'); ?>" /></div>
                                                        <span class="text-danger"><?php echo form_error('nama');?></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group m-b-40">
                                                        <label for="id_kantor"><h6 class="font-weight-bold"><span class="text-danger">*</span>No. Ponsel</h6></label>
                                                        <span class="bar"></span>
                                                        <div class="controls">
                                                        <input required type="number" minlength="11" maxlength="13" class="form-control "  required  name="no_hp" value="<?php echo $this->input->post('no_hp'); ?>" placeholder="08xx-xxxx-xxxx" />
                                                        </div>
                                                        <span class="text-danger"><?php echo form_error('no_hp');?></span>
                                                    </div>
                                                </div>
                                              </div>

                                              <div class="row">
                                                <div class="col-md-6">
                                                  <div class="form-group m-b-40">
                                                      <label for="id_kantor"><h6 class="font-weight-bold"><span class="text-danger">*</span>Email</h6></label>
                                                      <span class="bar"></span>
                                                      <div class="controls">
                                                       <input required type="email" name="email" class="form-control"  required  data-validation-required-message="This field is required" value="<?php echo $this->input->post('email'); ?>" placeholder="example@example.com"> </div>
                                                      <span class="text-danger"><?php echo form_error('email');?></span>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group m-b-40">
                                                        <label for="id_kantor"><h6 class="font-weight-bold"><span class="text-danger">*</span>Alamat</h6></label>
                                                        <span class="bar"></span>
                                                        <textarea required rows="4" type="text" class="form-control" maxlength="191" required  name="alamat" value="<?php echo $this->input->post('alamat'); ?>" placeholder="Jl. Contoh, Kecamatan, Kota, Kabupaten, Negara, Kode Pos" /></textarea>
                                                        <span class="text-danger"><?php echo form_error('alamat');?></span>
                                                    </div>
                                                </div>
                                            </div></div></div>

                                            <div class="modal-footer d-flex">
                                                <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal" aria-label="Close"> Batal </button>
                                                <button class="btn btn-info waves-effect waves-light" type="submit">Tambah</button>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <?php echo form_close(); ?>
                                <!-- button add -->
                                <div class="row">
                                    <div class="col-3">
                                        <button type="button" class="btn btn-info waaves-effect waves-light" data-toggle="modal" data-target="#ModalTambahKantor"> Tambah </button>
                                    </div>
                                </div>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="tablesaw table-striped table-hover table-bordered table" data-tablesaw-mode="columntoggle">
                                        <thead>
                                            <tr>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">No.</th>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Nama</th>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">No. Ponsel</th>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">Email</th>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Alamat</th>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">Tindakan &nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1;
                                     foreach($vendor as $s){ ?>
                                            <tr style="padding=10px 10px 10px 10px;">
                                                <td  style="padding=10px 10px 10px 10px;">
                                                    <?php echo $no++; ?>
                                                </td>
                                                <td  style="padding=10px 10px 10px 10px;">
                                                    <?php echo $s['nama']; ?>
                                                </td>
                                                <td  style="padding=10px 10px 10px 10px;">
                                                    <?php echo $s['no_hp']; ?>
                                                </td>
                                                <td  style="padding=10px 10px 10px 10px;">
                                                    <?php echo $s['email']; ?>
                                                </td>
                                                <td  style="padding=10px 10px 10px 10px;">
                                                    <?php echo $s['alamat']; ?>
                                                </td>
                                                <td  style="padding=10px 10px 10px 10px;"> &emsp; &emsp; &emsp;
                                                    <a class="btn btn-outline-info waves-effect waves-light" data-toggle="modal" href="#edit<?php echo $s['id_vendor']; ?>">Ubah</a> &nbsp;
                                                    <a class="btn btn-outline-danger hapus" href="<?php echo site_url('vendor/remove/'.$s['id_vendor']); ?>">Hapus</a>
                                                </td>
                                            </tr>
                                            <!-- modal menambahkan fungsi  -->
                                            <div class="modal fade" id="edit<?php echo $s['id_vendor'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-center">
                                                            <h3 class="modal-title w-100 font-weight-bold">Ubah Vendor</h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="modal-body"><div class="row"><div class="col-lg-12">
                                                              <?php echo form_open('vendor/edit/'.$s['id_vendor']); ?>
                                                              <form id="editvendor" class="floating-labels m-t-40">
                                                              <div class="row">
                                                                <div class="col-md-8">
                                                                  <div class="form-group m-b-40">
                                                                      <label for="id_kantor"><h6 class="font-weight-bold"><span class="text-danger">*</span>Nama</h6></label>
                                                                      <span class="bar"></span>
                                                                      <input required type="text" class="form-control" required name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $s['nama']); ?>" />
                                                                      <span class="text-danger"><?php echo form_error('nama');?></span>
                                                                  </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                  <div class="form-group m-b-40">
                                                                      <label for="id_kantor"><h6 class="font-weight-bold"><span class="text-danger">*</span>No. Ponsel</h6></label>
                                                                      <span class="bar"></span>
                                                                      <input required type="text" class="form-control" required name="no_hp" value="<?php echo ($this->input->post('no_hp') ? $this->input->post('no_hp') : $s['no_hp']); ?>" />
                                                                      <span class="text-danger"><?php echo form_error('no_hp');?></span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                  <div class="form-group m-b-40">
                                                                      <label for="id_kantor"><h6 class="font-weight-bold"><span class="text-danger">*</span>Email</h6></label>
                                                                      <span class="bar"></span>
                                                                      <div class="controls">
                                                                      <input required type="email" class="form-control" required name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $s['email']); ?>" /> </div>
                                                                      <span class="text-danger"><?php echo form_error('email');?></span>
                                                                  </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="form-group m-b-40">
                                                                      <label for="id_kantor"><h6 class="font-weight-bold"><span class="text-danger">*</span>Alamat</h6></label>
                                                                      <span class="bar"></span>
                                                                      <textarea required rows="4" type="text" class="form-control" required name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $s['alamat']); ?>" /><?php echo $s['alamat']?></textarea>
                                                                      <span class="text-danger"><?php echo form_error('alamat');?></span>
                                                                  </div>
                                                                </div>
                                                            </div></div></div>
                                                                </div>
                                                                <div class="modal-footer d-flex">
                                                                    <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal" aria-label="Close"> Batal </button>
                                                                    <button type="submit" class="btn btn-info waves-effect waves-light ubah">Ubah</button>
                                                                </div>
                                                                <?php echo form_close(); ?>
                                                              </div>
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
