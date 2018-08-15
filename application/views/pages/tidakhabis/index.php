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
                <h4 class="text-themecolor">Inventory</h4>
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
                                <h4 class="card-title">Data Barang Tidak Habis Pakai</h4>
                                <?php if ($user['status'] == 1){
                                  echo form_open("inventory/bthp");?>
                                <select name="pilih_cabang" class="select2 form-control custom-select col-6" style="width: 40%; height:36px;">
                                  <option value="0">Semua Kantor</option><?php
                                  foreach($all_kantor as $kantor)
                                  {
                                    $selected = ($kantor['id_kantor'] == $by_kantor) ? ' selected="selected"' : "";
                                    echo '<option value="'.$kantor['id_kantor'].'"'.$selected.'>'.$kantor['nama_kantor'].'</option>';
                                  }
                                  ?>
                                </select>
                                <button type="submit" class="btn btn-info waves-effect waves-light">Pilih</button>
                                <br>
                                <br>
                                <?php echo form_close();
                              }?>
                                <!-- <h6 class="card-subtitle">Data table example</h6> -->
                               <!-- modal menambahkan fungsi  -->
                               <div class="modal fade bs-example-modal-lg" id="ModalTambahKantor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h3 class="modal-title w-100 font-weight-bold">Tambah Barang Tidak Habis Pakai</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">  <?php echo form_open('inventory/add_bthp'); ?><div class="row"><div class="col-lg-12">

                                              <!-- <form class="floating-labels m-t-40"> -->
                                              <div class="row">
                                                <div class="col-md-2">
                                                  <div class="form-group m-b-40">
                                                      <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Serial ID :</h6></label>
                                                      <div class="controls">
                                                      <input type="text" required class="form-control" name="serial_id" value="<?php echo $this->input->post('serial_id'); ?>">
                                                      </div>
                                                      <span class="text-danger"><?php echo form_error('serial_id');?></span>
                                                  </div>
                                                </div>
                                                <div class="col-md-3">
                                                  <div class="form-group m-b-40">
                                                      <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Nama :</h6></label>
                                                      <input required class="form-control" type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" />
                                                      <span class="text-danger"><?php echo form_error('nama');?></span>
                                                  </div>
                                                </div>
                                                <div class="col-md-3">
                                                  <div class="form-group m-b-40">
                                                      <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Merk :</h6></label>
                                                      <input required class="form-control" type="text" name="merk" value="<?php echo $this->input->post('merk'); ?>" />
                                                      <span class="text-danger"><?php echo form_error('merk');?></span>
                                                  </div>
                                                </div>
                                                <div class="col-md-2">
                                                  <div class="form-group m-b-40">
                                                      <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Kondisi :</h6></label>
                                                      <input required class="form-control" type="text" name="kondisi" value="<?php echo $this->input->post('kondisi'); ?>" />
                                                      <span class="text-danger"><?php echo form_error('kondisi');?></span>
                                                  </div>
                                                </div>
                                                <div class="col-md-2">
                                                  <div class="form-group m-b-40">
                                                      <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Durability :</h6></label>
                                                      <input required class="form-control" type="text" name="durability" value="<?php echo $this->input->post('durability'); ?>" />
                                                      <span class="text-danger"><?php echo form_error('durability');?></span>
                                                  </div>
                                                </div>
                                              </div>
                                              <div> <hr> </div>
                                              <div class="row">
                                              <div class="col-3">
                                                    <div class="form-group m-b-40">
                                                    <label><h6 class="font-weight-bold">No Nota:</h6></label>
                                                    <select required class="form-control" name="id_transaksi">
                                                    <option value="">Nota</option>
                                                    <?php
                                                    foreach($all_sewa as $nota)
                                                    {
                                                        $selected = ($nota['id_transaksi'] == $this->input->post('id_transaksi')) ? ' selected="selected"' : "";
                                                        echo '<option value="'.$nota['id_transaksi'].'" '.$selected.'>'.$nota['no_nota'].'</option>';
                                                    }
                                                    ?>
                                                    </select>
                                                    </div>
                                                    </div>
                                                <div class="col-md-3">
                                                  <div class="form-group m-b-40 " style="display:none;">
                                                  <label><h6 class="font-weight-bold"><span class="text-danger">*</span>kategori :</h6></label>
                                                        <input required type="text" name="kategori" value="sewa" />
                                                        <span class="text-danger"><?php echo form_error('kategori');?></span>
                                                   </div>
                                                </div>
                                                <div class="col-md-3">
                                                  <div class="form-group m-b-40">
                                                      <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Harga Perolehan :</h6></label>
                                                      <input required class="form-control" type="text" name="harga" value="<?php echo $this->input->post('harga'); ?>" />
                                                      <span class="text-danger"><?php echo form_error('harga');?></span>
                                                  </div>
                                                </div>
                                                <div class="col-md-3">
                                                  <div class="form-group m-b-40" style="display:none">
                                                        <label for="tanggal"><h6 class="font-weight-bold">Tanggal</h6></label>
                                                        <input type="date" class="form-control" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>">
                                                        <span class="bar"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                  <div class="form-group m-b-40" style="display:none;">
                                                      <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Status :</h6></label>
                                                      <input type="text" name="status" value="ada" />
                                                      <span class="text-danger"><?php echo form_error('status');?></span>
                                                  </div>
                                                  <div class="form-group m-b-40 " style="display:none;">
                                                    <label for="jenis"><h6 class="font-weight-bold">Jenis</h6></label>
                                                    <div class="controls">
                                                    <input required  data-validation-required-message="This field is required" type="text" class="form-control" name="jenis" value="2"></div>
                                                    <span class="bar"></span>
                                                </div>
                                                </div>
                                              </div>
                                              <div> <hr> </div>
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <div class="form-group m-b-40">
                                                      <label for="nama_divisi_pengada"><h6 class="font-weight-bold">Divisi Pengada</h6></label>
                                                      <select required name="nama_divisi_pengada" class="form-control">
                                                        <option value="">Pilih Divisi</option>
                                                        <?php
                                                        $status = $this->session->userdata('level');
                                                        if($status == 1){
                                                          foreach($all_divisi as $div)
                                                          {
                                                            $selected = ($div['nama_divisi'] == $i->nama_divisi_pengada) ? ' selected="selected"' : "";
                                                            foreach($all_kantor as $kan){
                                                              if($kan['id_kantor']==$div['id_kantor']) {
                                                                echo '<option value="'.$div['nama_divisi'].'" '.$selected.'>'.$kan['nama_kantor'].' - '.$div['nama_divisi'].'</option>';
                                                              }
                                                            }
                                                          }
                                                        }
                                                      else if ($status == 2){
                                                        foreach($divisi_by_kantor as $div)
                                                        {
                                                          $selected = ($div['nama_divisi'] == $i->nama_divisi_pengada) ? ' selected="selected"' : "";
                                                          echo '<option value="'.$div['nama_divisi'].'" '.$selected.'>'.$div['nama_divisi'].'</option>';
                                                        }
                                                      }
                                                      ?>
                                                    </select>
                                                    <span class="bar"></span>
                                                  </div>
                                                </div>
                                                <div class="col-md-3">
                                                  <div class="form-group">
                                                      <label><h6 class="font-weight-bold">Divisi Penerima</h6></label>

                                                      <select  required name="id_divisi_penerima" class="form-control">
                                                      <option value="">Pilih Divisi</option>
                                                      <?php
                                                      if($status == 1){
                                                        foreach($all_divisi as $div)
                                                        {
                                                          $selected = ($div['id_divisi'] == $i->id_divisi_penerima) ? ' selected="selected"' : "";
                                                              foreach($all_kantor as $kan){
                                                                  if($kan['id_kantor']==$div['id_kantor']) {
                                                                  echo '<option value="'.$div['id_divisi'].'" '.$selected.'>'.$kan['nama_kantor'].' - '.$div['nama_divisi'].'</option>';
                                                                  }
                                                              }
                                                        }
                                                      }
                                                      else if ($status == 2){
                                                      foreach($divisi_by_kantor as $div)
                                                      {
                                                        $selected = ($div['id_divisi'] == $i->id_divisi_penerima) ? ' selected="selected"' : "";
                                                        echo '<option value="'.$div['id_divisi'].'" '.$selected.'>'.$div['nama_divisi'].'</option>';
                                                      }
                                                    }
                                                      ?>
                                                    </select>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <label><h6 class="text-muted font-weight-bold">Keterangan</h6></label>
                                                  <p>1. Perubahan melalui beberapa proses birokrasi. Jika tidak Penting, Jangan Ubah apa-apa.</p>
                                                  <p>2. Ini cuma keterangan tambahan.</p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="modal-footer d-flex">
                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal" aria-label="Close"> Batal </button>
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Tambah</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <?php echo form_close(); ?>

                                  <!-- modal menambahkan fungsi  -->
                               <div class="modal fade bs-example-modal-lg" id="ModalTambahKantor1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h3 class="modal-title w-100 font-weight-bold">Tambah Barang Tidak Habis Pakai</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body"><div class="row"><div class="col-lg-12">
                                              <?php echo form_open('inventory/add_bthp'); ?>
                                              <form class="floating-labels m-t-40">
                                              <div class="row">
                                                <div class="col-md-2">
                                                  <div class="form-group m-b-40">
                                                      <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Serial ID :</h6></label>
                                                      <div class="control">
                                                      <input required type="text" class="form-control" name="serial_id" value="<?php echo $this->input->post('serial_id'); ?>">
                                                      </div>
                                                      <span class="text-danger"><?php echo form_error('serial_id');?></span>
                                                  </div>
                                                </div>
                                                <div class="col-md-3">
                                                  <div class="form-group m-b-40">
                                                      <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Nama :</h6></label>
                                                      <input required class="form-control" type="text" name="nama" value="<?php echo $this->input->post('nama'); ?>" />
                                                      <span class="text-danger"><?php echo form_error('nama');?></span>
                                                  </div>
                                                </div>
                                                <div class="col-md-3">
                                                  <div class="form-group m-b-40">
                                                      <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Merk :</h6></label>
                                                      <input required class="form-control" type="text" name="merk" value="<?php echo $this->input->post('merk'); ?>" />
                                                      <span class="text-danger"><?php echo form_error('merk');?></span>
                                                  </div>
                                                </div>
                                                <div class="col-md-2">
                                                  <div class="form-group m-b-40">
                                                      <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Kondisi :</h6></label>
                                                      <input required  class="form-control" type="text" name="kondisi" value="<?php echo $this->input->post('kondisi'); ?>" />
                                                      <span class="text-danger"><?php echo form_error('kondisi');?></span>
                                                  </div>
                                                </div>
                                                <div class="col-md-2">
                                                  <div class="form-group m-b-40">
                                                      <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Durability :</h6></label>
                                                      <input required class="form-control" type="text" name="durability" value="<?php echo $this->input->post('durability'); ?>" />
                                                      <span class="text-danger"><?php echo form_error('durability');?></span>
                                                  </div>
                                                </div>
                                              </div>
                                              <div> <hr> </div>
                                              <div class="row">
                                              <div class="col-3">
                                                    <div class="form-group m-b-40">
                                                    <label><h6 class="font-weight-bold">No Nota:</h6></label>
                                                    <select required class="form-control" name="id_transaksi">
                                                    <option value="">Nota</option>
                                                    <?php
                                                    foreach($all_beli as $nota)
                                                    {
                                                        $selected = ($nota['id_transaksi'] == $this->input->post('id_transaksi')) ? ' selected="selected"' : "";
                                                        echo '<option value="'.$nota['id_transaksi'].'" '.$selected.'>'.$nota['no_nota'].'</option>';
                                                    }
                                                    ?>
                                                    </select>
                                                    </div>
                                                    </div>
                                                <div class="col-md-3">
                                                  <div class="form-group m-b-40 " style="display:none;">
                                                  <label><h6 class="font-weight-bold"><span class="text-danger">*</span>kategori :</h6></label>
                                                        <input  type="text" name="kategori" value="beli" />
                                                        <span class="text-danger"><?php echo form_error('kategori');?></span>
                                                   </div>
                                                </div>
                                                <div class="col-md-3">
                                                  <div class="form-group m-b-40">
                                                      <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Harga Perolehan :</h6></label>
                                                      <input required class="form-control" type="text" name="harga" value="<?php echo $this->input->post('harga'); ?>" />
                                                      <span class="text-danger"><?php echo form_error('harga');?></span>
                                                  </div>
                                                </div>
                                                <div class="col-md-3">
                                                  <div class="form-group m-b-40" style="display:none">
                                                        <label for="tanggal"><h6 class="font-weight-bold">Tanggal</h6></label>
                                                        <input  type="date" class="form-control" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>">
                                                        <span class="bar"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                  <div class="form-group m-b-40" style="display:none;">
                                                      <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Status :</h6></label>
                                                      <input type="text" name="status" value="ada" />
                                                      <span class="text-danger"><?php echo form_error('status');?></span>
                                                  </div>
                                                  <div class="form-group m-b-40 " style="display:none;">
                                                        <label for="jenis"><h6 class="font-weight-bold">Jenis</h6></label>
                                                        <div class="controls">
                                                        <input required  data-validation-required-message="This field is required" type="text" class="form-control" name="jenis" value="1"></div>
                                                        <span class="bar"></span>
                                                    </div>
                                                </div>
                                              </div>
                                              <div> <hr> </div>
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <div class="form-group m-b-40">
                                                      <label for="nama_divisi_pengada"><h6 class="font-weight-bold">Divisi Pengada</h6></label>
                                                      <select required name="nama_divisi_pengada" class="form-control">
                                                        <option value="">Pilih Divisi</option>
                                                        <?php
                                                        $status = $this->session->userdata('level');
                                                        if($status == 1){
                                                          foreach($all_divisi as $div)
                                                          {
                                                            $selected = ($div['nama_divisi'] == $i->nama_divisi_pengada) ? ' selected="selected"' : "";
                                                            foreach($all_kantor as $kan){
                                                              if($kan['id_kantor']==$div['id_kantor']) {
                                                                echo '<option value="'.$div['nama_divisi'].'" '.$selected.'>'.$kan['nama_kantor'].' - '.$div['nama_divisi'].'</option>';
                                                              }
                                                            }
                                                          }
                                                        }
                                                      else if ($status == 2){
                                                        foreach($divisi_by_kantor as $div)
                                                        {
                                                          $selected = ($div['nama_divisi'] == $i->nama_divisi_pengada) ? ' selected="selected"' : "";
                                                          echo '<option value="'.$div['nama_divisi'].'" '.$selected.'>'.$div['nama_divisi'].'</option>';
                                                        }
                                                      }
                                                      ?>
                                                    </select>
                                                    <span class="bar"></span>
                                                  </div>
                                                </div>
                                                <div class="col-md-3">
                                                  <div class="form-group">
                                                      <label><h6 class="font-weight-bold">Divisi Penerima</h6></label>

                                                      <select required name="id_divisi_penerima" class="form-control">
                                                      <option value="">Pilih Divisi</option>
                                                      <?php
                                                      if($status == 1){
                                                        foreach($all_divisi as $div)
                                                        {
                                                          $selected = ($div['id_divisi'] == $i->id_divisi_penerima) ? ' selected="selected"' : "";
                                                              foreach($all_kantor as $kan){
                                                                  if($kan['id_kantor']==$div['id_kantor']) {
                                                                  echo '<option value="'.$div['id_divisi'].'" '.$selected.'>'.$kan['nama_kantor'].' - '.$div['nama_divisi'].'</option>';
                                                                  }
                                                              }
                                                        }
                                                      }
                                                      else if ($status == 2){
                                                      foreach($divisi_by_kantor as $div)
                                                      {
                                                        $selected = ($div['id_divisi'] == $i->id_divisi_penerima) ? ' selected="selected"' : "";
                                                        echo '<option value="'.$div['id_divisi'].'" '.$selected.'>'.$div['nama_divisi'].'</option>';
                                                      }
                                                    }
                                                      ?>
                                                    </select>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <label><h6 class="text-muted font-weight-bold">Keterangan</h6></label>
                                                  <p>1. Perubahan melalui beberapa proses birokrasi. Jika tidak Penting, Jangan Ubah apa-apa.</p>
                                                  <p>2. Ini cuma keterangan tambahan.</p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="modal-footer d-flex">
                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal" aria-label="Close"> Batal </button>
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Tambah</button>
                                          </div>
                                           <?php echo form_close(); ?>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                <!-- button add -->
                                <div class="row">
                                    <div class="col-2">
                                        <button type="button" class="btn btn-warning waaves-effect waves-light" data-toggle="modal" data-target="#ModalTambahKantor"> Penyewaan </button>
                                    </div>
                                    <div class="col-2 ">
                                        <button type="button" class="btn btn-danger waaves-effect waves-light" data-toggle="modal" data-target="#ModalTambahKantor1"> Pembelian </button>
                                    </div>
                                </div>
                                <?php
                                  if($user['status']==1){
                                    $inv=$tidakhabis;
                                  }
                                  else if($user['status']==2){
                                    $inv=$tidakhabis2;
                                  }
                                if (count($inv)){?>
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Serial ID</th>
                                                <th>Nama</th>
                                                <th>Merk</th>
                                                <th>Kategori</th>
                                                <th>Kondisi</th>
                                                <th>Durability</th>
                                                <th>Divisi Pengada</th>
                                                <th>Divisi Penerima</th>
                                                <th>Kantor</th>
                                                <th>Harga Perolehan</th>
                                                <th>Tanggal Pembelian</th>
                                                <!-- <th>Status</th> -->
                                                <th>Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1;
                                            foreach($inv as $i){ ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $i->serial_id; ?></td>
                                                <td><?php echo $i->nama; ?></td>
                                                <td><?php echo $i->merk; ?></td>
                                                <td><?php echo $i->kategori; ?></td>
                                                <td><?php echo $i->kondisi; ?></td>
                                                <td><?php echo $i->durability; ?></td>
                                                <td><?php echo $i->nama_divisi_pengada; ?></td>
                                                <td>
                                                    <?php
                                                    foreach($all_divisi as $divisi)
                                                    {
                                                        if ($divisi['id_divisi'] == $i->id_divisi_penerima)
                                                        echo $divisi['nama_divisi'];
                                                    }?>
                                                </td>
                                                <td>
                                                    <?php
                                                    foreach($all_kantor as $kan){
                                                      if($kan['id_kantor']==$i->id_kantor) {echo $kan['nama_kantor'];}
                                                    }?>
                                                </td>
                                                <td><?php echo $i->harga; ?></td>
                                                <td><?= date('d-m-Y', strtotime($i->tanggal)) ?></td>
                                                <!-- <td><?php echo $i->status; ?></td> -->
                                                <td>
                                                  <div class="row">
                                                    <a class="btn btn-outline-info waves-effect waves-light" data-toggle="modal"  href="#edit-<?php echo $i->id_inventory;?>">Ubah</a>
                                                  </div>
                                                  <div class="row">
                                                    <!-- <a href="<?php echo site_url('inventory/remove_bthp/'.$i->id_inventory); ?>">Delete</a> -->
                                                    <a class="btn btn-outline-warning waves-effect waves-light" data-toggle="modal"  href="#ubah-<?php echo $i->id_inventory;?>">Rawat</a>
                                                  </div>
                                                </td>
                                            </tr>
                                              <!-- modal menambahkan fungsi  -->
                                              <div class="modal fade bs-example-modal-lg" id="edit-<?php echo $i->id_inventory;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-center">
                                                            <h3 class="modal-title w-100 font-weight-bold">Ubah Barang Tidak Habis Pakai</h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body"><div class="row"><div class="col-lg-12">
                                                          <?php echo form_open('inventory/edit_bthp/'.$i->id_inventory); ?>
                                                          <form class="floating-labels m-t-40">
                                                          <div class="row">
                                                            <div class="col-md-2">
                                                              <div class="form-group m-b-40">
                                                                  <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Serial ID :</h6></label>
                                                                  <input class="form-control" type="text" name="serial_id" value="<?php echo ($this->input->post('serial_id') ? $this->input->post('serial_id') : $i->serial_id); ?>" />
                                                                  <span class="text-danger"><?php echo form_error('serial_id');?></span>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                              <div class="form-group m-b-40">
                                                                  <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Nama :</h6></label>
                                                                  <input class="form-control" type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $i->nama); ?>" />
                                                                  <span class="text-danger"><?php echo form_error('nama');?></span>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                              <div class="form-group m-b-40">
                                                                  <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Merk :</h6></label>
                                                                  <input class="form-control" type="text" name="merk" value="<?php echo ($this->input->post('merk') ? $this->input->post('merk') : $i->merk); ?>" />
                                                                  <span class="text-danger"><?php echo form_error('merk');?></span>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                              <div class="form-group m-b-40">
                                                                  <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Kondisi :</h6></label>
                                                                  <input  class="form-control" type="text" name="kondisi" value="<?php echo ($this->input->post('kondisi') ? $this->input->post('kondisi') : $i->kondisi); ?>" />
                                                                  <span class="text-danger"><?php echo form_error('kondisi');?></span>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                              <div class="form-group m-b-40">
                                                                  <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Durability :</h6></label>
                                                                  <input class="form-control" type="text" name="durability" value="<?php echo ($this->input->post('durability') ? $this->input->post('durability') : $i->durability); ?>" />
                                                                  <span class="text-danger"><?php echo form_error('durability');?></span>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div> <hr> </div>
                                                          <div class="row">
                                                            <div class="col-md-3">
                                                              <div class="form-group m-b-40">
                                                              <label><h6 class="font-weight-bold">Pembelian Dari:</h6></label>
                                                              <select   class="form-control" name="id_vendor">
                                                                <option value="">Pilih Nota Transaksi</option>
                                                                <?php if($i->kategori=='sewa') $all_nota=$all_sewa;
                                                                else $all_nota=$all_beli;
                                                                foreach($all_nota as $nota)
                                                                {
                                                                    $selected = ($nota['id_transaksi'] == $i->id_transaksi) ? ' selected="selected"' : "";
                                                                    echo '<option value="'.$nota['id_transaksi'].'" '.$selected.'>'.$nota['no_nota'].'</option>';
                                                                }
                                                                ?>
                                                              </select>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                              <div class="form-group m-b-40" style="display:none;">
                                                                 <!-- <input type="text" name="kategori" value="<?php echo ($this->input->post('kategori') ? $this->input->post('kategori') : $i->kategori); ?>" /> -->
                                                                 <label><h6 class="font-weight-bold">Kategori</h6></label>
                                                                 <select name="kategori" class="form-control" >
                                                                         <?php $selected = ("beli" === $i->kategori ) ? ' selected="selected"' : "";
                                                                         echo '<option value="beli" '.$selected.'>Beli</option>'; ?>
                                                                         <?php $selected = ("sewa"  === $i->kategori) ? ' selected="selected"' : "";
                                                                         echo '<option value="sewa" '.$selected.'>Sewa</option>'; ?>
                                                                 </select>
                                                                 <span class="text-danger"><?php echo form_error('kategori');?></span>
                                                               </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                              <div class="form-group m-b-40">
                                                                  <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Harga Perolehan :</h6></label>
                                                                  <input class="form-control" type="text" name="harga" value="<?php echo ($this->input->post('harga') ? $this->input->post('harga') : $i->harga); ?>" />
                                                                  <span class="text-danger"><?php echo form_error('harga');?></span>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                              <?php $date = explode(" ",$i->tanggal);$date = $date[0]; ?>
                                                              <div class="form-group m-b-40" style="display:none">
                                                                  <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Tanggal :</h6></label>
                                                                  <input  class="form-control" type="date" name="tanggal" value="<?php echo ($this->input->post('tanggal') ? $this->input->post('tanggal') : $date); ?>" />
                                                                  <span class="text-danger"><?php echo form_error('tanggal');?></span>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                              <div class="form-group m-b-40" style="display:none;">
                                                                  <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Status :</h6></label>
                                                                  <input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $i->status); ?>" />
                                                                  <span class="text-danger"><?php echo form_error('status');?></span>
                                                              </div>
                                                              <div class="form-group m-b-40" style="display:none;">
                                                                    <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Jenis :</h6></label>
                                                                    <input type="text" name="jenis" value="<?php echo ($this->input->post('jenis') ? $this->input->post('jenis') : $i->jenis); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('jenis');?></span>
                                                                </div>
                                                            </div>
                                                          </div>
                                                          <div> <hr> </div>
                                                          <div class="row">
                                                            <div class="col-md-3">
                                                              <div class="form-group m-b-40">
                                                                <label><h6 class="font-weight-bold">Diadakan Oleh:</h6></label>
                                                                <select name="nama_divisi_pengada" class="form-control">
                                                                <option value="">Pilih Divisi</option>
                                                                <?php
                                                                if($status == 1){
                                                                  foreach($all_divisi as $div)
                                                                  {
                                                                    $selected = ($div['nama_divisi'] == $i->nama_divisi_pengada) ? ' selected="selected"' : "";
                                                                        foreach($all_kantor as $kan){
                                                                            if($kan['id_kantor']==$div['id_kantor']) {
                                                                            echo '<option value="'.$div['nama_divisi'].'" '.$selected.'>'.$kan['nama_kantor'].' - '.$div['nama_divisi'].'</option>';
                                                                            }
                                                                        }
                                                                  }
                                                                }
                                                                else if ($status == 2){
                                                                  foreach($divisi_by_kantor as $div)
                                                                  {
                                                                    $selected = ($div['nama_divisi'] == $i->nama_divisi_pengada) ? ' selected="selected"' : "";
                                                                    echo '<option value="'.$div['nama_divisi'].'" '.$selected.'>'.$div['nama_divisi'].'</option>';
                                                                  }
                                                                }
                                                                ?>
                                                                </select>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                              <div class="form-group m-b-40">
                                                                  <label><h6 class="font-weight-bold">Diterima Oleh:</h6></label>
                                                                  <select name="id_divisi_penerima" class="form-control">
                                                                    <option value="">Pilih Divisi</option>
                                                                    <?php
                                                                    if($status == 1){
                                                                      foreach($all_divisi as $div)
                                                                      {
                                                                        $selected = ($div['id_divisi'] == $i->id_divisi_penerima) ? ' selected="selected"' : "";
                                                                        foreach($all_kantor as $kan)
                                                                        {
                                                                            if($kan['id_kantor']==$div['id_kantor']) {
                                                                            echo '<option value="'.$div['id_divisi'].'" '.$selected.'>'.$kan['nama_kantor'].' - '.$div['nama_divisi'].'</option>';
                                                                            }
                                                                        }
                                                                      }
                                                                    }
                                                                    else if ($status == 2){
                                                                      foreach($divisi_by_kantor as $div)
                                                                      {
                                                                        $selected = ($div['id_divisi'] == $i->id_divisi_penerima) ? ' selected="selected"' : "";
                                                                        echo '<option value="'.$div['id_divisi'].'" '.$selected.'>'.$div['nama_divisi'].'</option>';
                                                                      }
                                                                    }
                                                                    ?>
                                                                  </select>
                                                                  <span class="text-danger"><?php echo form_error('nama_divisi_pengada');?></span>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <label><h6 class="text-muted font-weight-bold">Keterangan</h6></label>
                                                              <p>1. Perubahan melalui beberapa proses birokrasi. Jika tidak Penting, Jangan Ubah apa-apa.</p>
                                                              <p>2. Ini cuma keterangan tambahan.</p>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="modal-footer d-flex">
                                                        <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal" aria-label="Close"> Batal </button>
                                                        <button type="submit" class="btn btn-info waves-effect waves-light">Ubah</button>
                                                      </div>
                                                      <?php echo form_close(); ?>
                                                  </div>
                                               </div>
                                            </div>
                                          </div>
                                          <!-- modal menambahkan fungsi  -->
                                          <div class="modal fade bs-example-modal-lg" id="ubah-<?php echo $i->id_inventory;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header text-center">
                                                      <h3 class="modal-title w-100 font-weight-bold">Tambah Pemeliharaan</h3>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body"><div class="row"><div class="col-lg-12">
                                                    <?php echo form_open('stock/addpemeliharaan'); ?>
                                                    <form class="floating-labels m-b-40">
                                                    <div class="row">
                                                      <div class="col-4">
                                                        <div class="form-group m-t-40">
                                                          <label><h6 class="font-weight-bold">Inventory :</h6></label>
                                                          <input disabled type="text" name="serial_id" value="<?php echo ($this->input->post('serial_id') ? $this->input->post('serial_id') : $i->serial_id); ?>" />
                                                          <span class="text-danger"><?php echo form_error('serial_id');?></span>
                                                        </div>
                                                      </div>
                                                      <div class="col-4">
                                                        <div class="form-group m-t-40">
                                                          <label><h6 class="font-weight-bold">Nama Barang :</h6></label>
                                                          <input disabled type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $i->nama); ?>" />
                                                          <span class="text-danger"><?php echo form_error('nama');?></span>
                                                        </div>
                                                      </div>
                                                      <div class="col-4">
                                                        <div class="form-group m-t-40">
                                                          <label><h6 class="font-weight-bold">Merek Barang :</h6></label>
                                                          <input disabled type="text" name="merk" value="<?php echo ($this->input->post('merk') ? $this->input->post('merk') : $i->merk); ?>" />
                                                          <span class="text-danger"><?php echo form_error('merk');?></span>
                                                        </div>
                                                      </div>
                                                      <!-- <div class="col-4">
                                                        <div class="form-group m-t-40">
                                                          <label><h6 class="font-weight-bold">Merek :</h6></label>
                                                          <input disabled type="text" name="merk" value="<?php echo ($this->input->post('merk') ? $this->input->post('merk') : $i->merk); ?>" />
                                                          <span class="text-danger"><?php echo form_error('merk');?></span>
                                                        </div>
                                                      </div> -->
                                                      <div class="col-4">
                                                        <div style="display:none;">
                                                          <span class="text-danger">*</span>Inventory :
                                                          <input  type="text" name="id_inventory" value="<?php echo ($this->input->post('id_inventory') ? $this->input->post('id_inventory') : $i->id_inventory); ?>" />
                                                          <span class="text-danger"><?php echo form_error('serial_id');?></span>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                      <div class="col-4">
                                                        <div class="form-group m-b-40">
                                                          <label><h6 class="font-weight-bold">Vendor :</h6></label>
                                                          <select class="form-control" name="id_vendor">
                                                            <option value="">Pilih Vendor</option>
                                                            <?php
                                                            foreach($all_vendor as $vendor)
                                                            {
                                                                $selected = ($vendor['id_vendor'] == $this->input->post('id_vendor')) ? ' selected="selected"' : "";
                                                                echo '<option value="'.$vendor['id_vendor'].'" '.$selected.'>'.$vendor['nama'].'</option>';
                                                              }
                                                              ?>
                                                            </select>
                                                          </div>
                                                        </div>
                                                        <div class="col-4">
                                                          <div class="form-group m-b-40">
                                                            <label for="namakantor"><h6 class="font-weight-bold">Biaya</h6></label>
                                                            <span class="bar"></span>
                                                            <input type="number" class="form-control" name="biaya" value="<?php echo $this->input->post('biaya'); ?>" />
                                                            <span class="text-danger"><?php echo form_error('biaya');?></span>
                                                          </div>
                                                        </div>
                                                        <div class="col-4">
                                                          <div class="form-group m-b-40">
                                                            <label for="id_kantor"><h6 class="font-weight-bold">Tanggal Perawatan </h6></label>
                                                            <span class="bar"></span>
                                                            <input type="date" class="form-control" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>" />
                                                            <span class="text-danger"><?php echo form_error('tanggal');?></span>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <hr>
                                                      <div class="row">
                                                        <div class="col-6">
                                                          <div class="form-group m-b-40">
                                                            <label for="alamatkantor"><h6 class="font-weight-bold">Detail Pemeliharaan:</h6></label>
                                                            <span class="bar"></span>
                                                            <textarea rows="4" class="form-control" type="text" name="deskripsi" value="<?php echo $this->input->post('deskripsi'); ?>"></textarea>
                                                            <span class="text-danger"><?php echo form_error('deskripsi');?></span>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                          <label><h6 class="text-muted font-weight-bold">Keterangan</h6></label>
                                                          <p>1. Perubahan melalui beberapa proses birokrasi. Jika tidak Penting, Jangan Ubah apa-apa.</p>
                                                          <p>2. Ini cuma keterangan tambahan.</p>
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
                                          <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                              <?php }
                              else{?> <br>
                                     <?php
                                     if($by_kantor == 0){
                                       echo('Tidak ada data barang tidak habis pakai');
                                     }
                                     else{
                                       echo ('Tidak ada data barang tidak habis pakai untuk kantor ');
                                       foreach($all_kantor as $kan){
                                         if($kan['id_kantor']==$by_kantor) echo $kan['nama_kantor'];
                                       }
                                     }
                               }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
