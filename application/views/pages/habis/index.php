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
                                <h4 class="card-title">Data Barang Habis Pakai</h4>
                                <?php if ($user['status'] == 1){
                                  echo form_open("inventory/bhp");?>
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
                                <div class="modal fade bd-example-modal-lg" id="ModalTambahKantor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h3 class="modal-title w-100 font-weight-bold">Tambah Barang Habis Pakai</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body"><?php echo form_open('inventory/add_bhp'); ?><div class="row"><div class="col-12">
                                              <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group m-b-40">
                                                        <label for="id_kantor"><h6 class="font-weight-bold">Nama Barang</h6></label>
                                                        <div class="controls">
                                                        <input type="text" required  data-validation-required-message="This field is required" class="form-control" name="nama" value="<?php echo $this->input->post('nama'); ?>"></div>
                                                        <span class="bar"></span>
                                                    </div>
                                                  </div>
                                                  <div class="col-3">
                                                    <div class="form-group m-b-40">
                                                        <label for="merk"><h6 class="font-weight-bold">Merek</h6></label>
                                                        <div class="controls">
                                                        <input type="text"  required  data-validation-required-message="This field is required" class="form-control" name="merk" value="<?php echo $this->input->post('merk'); ?>"></div>
                                                        <span class="bar"></span>
                                                    </div>
                                                  </div>
                                                  <div class="col-1">
                                                    <div class="form-group m-b-40">
                                                        <label for="jumlah"><h6 class="font-weight-bold">Jumlah</h6></label>
                                                        <div class="controls">
                                                        <input type="text" required  data-validation-required-message="This field is required" class="form-control" name="jumlah" value="<?php echo $this->input->post('jumlah'); ?>"> </div>
                                                        <span class="bar"></span>
                                                    </div>
                                                  </div>
                                                  <div class="col-1">
                                                    <div class="form-group m-b-40">
                                                        <label for="satuan"><h6 class="font-weight-bold">Satuan</h6></label>
                                                        <div class="controls">
                                                        <input type="text" required  data-validation-required-message="This field is required" class="form-control" name="satuan" value="<?php echo $this->input->post('satuan'); ?>"></div>
                                                        <span class="bar"></span>
                                                    </div>
                                                  </div>
                                                  <div class="col-3">
                                                    <div class="form-group m-b-40">
                                                        <label for="harga"><h6 class="font-weight-bold">Harga</h6></label>
                                                        <div class="controls">
                                                        <input required  data-validation-required-message="This field is required" type="number" class="form-control" name="harga" value="<?php echo $this->input->post('harga'); ?>"></div>
                                                        <span class="bar"></span>
                                                    </div>
                                                  </div>
                                                    <div class="form-group m-b-40 " style="display:none;">
                                                        <label for="jenis"><h6 class="font-weight-bold">Jenis</h6></label>
                                                        <div class="controls">
                                                        <input required  data-validation-required-message="This field is required" type="text" class="form-control" name="jenis" value="1"></div>
                                                        <span class="bar"></span>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-3">
                                                    <div class="form-group m-b-40">
                                                    <label><h6 class="font-weight-bold">No Nota:</h6></label>
                                                    <select class="form-control" name="id_transaksi">
                                                    <option value="">Pilih Nota</option>
                                                    <?php
                                                      if($user['status']==1){
                                                        $nota=$nota1;
                                                      }
                                                      else if($user['status']==2){
                                                        $nota=$nota2;
                                                      }

                                                    foreach($nota as $n)
                                                    {
                                                        $selected = ($n['id_transaksi'] == $this->input->post('id_transaksi')) ? ' selected="selected"' : "";
                                                        echo '<option value="'.$n['id_transaksi'].'" '.$selected.'>'.$n['no_nota'].'</option>';
                                                    }
                                                    ?>
                                                    </select>
                                                    </div>
                                                    </div>
                                                    <div class="col-3">

                                                    </div>
                                                    <div class="col-3">
                                                      <div class="form-group m-b-40">
                                                          <label for="nama_divisi_pengada"><h6 class="font-weight-bold">Diadakan Oleh:</h6></label>
                                                          <select name="nama_divisi_pengada" class="form-control">
                                                          <option value="">Pilih Divisi</option>
                                                          <?php
                                                          $status = $this->session->userdata('level');
                                                            if($status == 1){
                                                              $divisi = $divisi1;
                                                            }
                                                            else if ($status == 2){
                                                              $divisi = $divisi2;
                                                            }
                                                            foreach($divisi as $div)
                                                            {
                                                              $selected = ($div['nama_divisi'] == $i->nama_divisi_pengada) ? ' selected="selected"' : "";
                                                                  foreach($all_kantor as $kan){
                                                                      if($kan['id_kantor']==$div['id_kantor']) {
                                                                      echo '<option value="'.$div['nama_divisi'].'" '.$selected.'>'.$kan['nama_kantor'].' - '.$div['nama_divisi'].'</option>';
                                                                      }
                                                                  }
                                                            }
                                                          ?>
                                                      </select>
                                                          <span class="bar"></span>
                                                      </div>
                                                    </div>
                                                    <div class="col-3">
                                                      <div class="form-group">
                                                          <label><h6 class="font-weight-bold">Diterima Oleh:</h6></label>

                                                          <select name="id_divisi_penerima" class="form-control">
                                                          <option value="">Pilih Divisi</option>
                                                          <?php
                                                          if($status == 1){
                                                            $divisi = $divisi1;
                                                          }
                                                          else if ($status == 2){
                                                            $divisi = $divisi2;
                                                          }
                                                          foreach($divisi as $div)
                                                          {
                                                            $selected = ($div['id_divisi'] == $i->id_divisi_penerima) ? ' selected="selected"' : "";
                                                                foreach($all_kantor as $kan){
                                                                    if($kan['id_kantor']==$div['id_kantor']) {
                                                                    echo '<option value="'.$div['id_divisi'].'" '.$selected.'>'.$kan['nama_kantor'].' - '.$div['nama_divisi'].'</option>';
                                                                    }
                                                                }
                                                          }
                                                        ?>
                                                      </select>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="modal-footer d-flex">
                                                <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal" aria-label="Close"> Batal </button>
                                                <button type="submit" class="btn btn-info waves-effect waves-light text-left">Tambah</button>
                                            </div>
                                            <?php echo form_close(); ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- button add -->
                                <div class="row">
                                    <div class="col-3">
                                        <button type="button" class="btn btn-info waaves-effect waves-light" data-toggle="modal" data-target="#ModalTambahKantor"> Tambah Barang </button>
                                    </div>
                                </div>
                                <?php
                                  if($user['status']==1){
                                    $inv=$habis;
                                  }
                                  else if($user['status']==2){
                                    $inv=$habis2;
                                  }
                                if (count($inv)){?>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="tablesaw table-striped table-hover table-bordered table" data-tablesaw-mode="columntoggle" >
                                        <thead>
                                            <tr>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist" >No.</th>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Nama</th>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Merk</th>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">Divisi Pengada</th>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Divisi Penerima</th>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">Kantor</th>
                                                <!-- <th>Jenis</th> -->
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">Tanggal</th>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">Kategori</th>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">Jumlah</th>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">Harga satuan</th>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1;
                                            foreach ($inv as $i) { ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $i->nama; ?></td>
                                                <td><?php echo $i->merk; ?></td>
                                                <td><?php echo $i->nama_divisi_pengada; ?></td>
                                                <td>
                                                    <?php
                                                    foreach($all_divisi as $divisi)
                                                    {
                                                        if ($divisi['id_divisi'] == $i->id_divisi_penerima)
                                                        echo $divisi['nama_divisi'];
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    foreach($all_kantor as $kan){
                                                    if($kan['id_kantor']==$i->id_kantor) {echo $kan['nama_kantor'];}
                                                    }
                                                    ?>
                                                </td>
                                                <td><?= date('d-m-Y', strtotime($i->tanggal)) ?></td>
                                                <td><?php echo $i->kategori; ?></td>
                                                <td><?php echo $i->jumlah.' '.$i->satuan; ?></td>
                                                <td><?php echo 'Rp' .number_format($i->harga); ?></td>

                                                <td>
                                                    <a class="text-info waves-effect waves-light" data-toggle="modal" href="#edit-<?php echo $i->id_inventory;?>">Ubah</a>
                                                    <a class="text-warning waves-effect waves-light" data-toggle="modal" href="#update-<?php echo $i->id_inventory;?>">Update</a>
                                                    <!-- <a class="btn btn-outline-danger" href="<?php echo site_url('inventory/remove_bhp/'.$i->id_inventory); ?>">Hapus</a> -->
                                                </td>
                                            </tr>
                                            <!-- modal mengedit   -->
                                            <div class="modal fade bd-example-modal-lg" id="edit-<?php echo $i->id_inventory;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-center">
                                                            <h3 class="modal-title w-100 font-weight-bold">Ubah Barang Habis Pakai</h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body"><?php echo form_open('inventory/edit_bhp/'.$i->id_inventory); ?><div class="row"><div class="col-12">
                                                          <div class="row">
                                                            <div class="col-4">
                                                                <div class="form-group m-b-40">
                                                                    <label for="id_kantor"><h6 class="font-weight-bold">Nama Barang</h6></label>
                                                                    <div class="controls">
                                                                    <input type="text" required  data-validation-required-message="This field is required" class="form-control" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $i->nama); ?>"></div>
                                                                    <span class="bar"></span>
                                                                </div>
                                                              </div>
                                                              <div class="col-3">
                                                                <div class="form-group m-b-40">
                                                                    <label for="merk"><h6 class="font-weight-bold">Merek</h6></label>
                                                                    <div class="controls">
                                                                    <input type="text"  required  data-validation-required-message="This field is required" class="form-control" name="merk" value="<?php echo ($this->input->post('merk') ? $this->input->post('merk') : $i->merk); ?>"></div>
                                                                    <span class="bar"></span>
                                                                </div>
                                                              </div>
                                                              <div class="col-1">
                                                                <div class="form-group m-b-40">
                                                                    <label for="jumlah"><h6 class="font-weight-bold">Jumlah</h6></label>
                                                                    <div class="controls">
                                                                    <input type="text" required  data-validation-required-message="This field is required" class="form-control" name="jumlah" value="<?php echo ($this->input->post('jumlah') ? $this->input->post('jumlah') : $i->jumlah); ?>"> </div>
                                                                    <span class="bar"></span>
                                                                </div>
                                                              </div>
                                                              <div class="col-1">
                                                                <div class="form-group m-b-40">
                                                                    <label for="satuan"><h6 class="font-weight-bold">Satuan</h6></label>
                                                                    <div class="controls">
                                                                    <input type="text" required  data-validation-required-message="This field is required" class="form-control" name="satuan" value="<?php echo ($this->input->post('satuan') ? $this->input->post('satuan') : $i->satuan); ?>"></div>
                                                                    <span class="bar"></span>
                                                                </div>
                                                              </div>
                                                              <div class="col-3">
                                                                <div class="form-group m-b-40">
                                                                    <label for="harga"><h6 class="font-weight-bold">Harga</h6></label>
                                                                    <div class="controls">
                                                                    <input required  data-validation-required-message="This field is required" type="number" class="form-control" name="harga" value="<?php echo ($this->input->post('harga') ? $this->input->post('harga') : $i->harga); ?>"></div>
                                                                    <span class="bar"></span>
                                                                </div>
                                                              </div>
                                                                <div class="form-group m-b-40 " style="display:none;">
                                                                    <label for="jenis"><h6 class="font-weight-bold">Jenis</h6></label>
                                                                    <div class="controls">
                                                                    <input required  data-validation-required-message="This field is required" type="text" class="form-control" name="jenis" value="1"></div>
                                                                    <span class="bar"></span>
                                                                </div>
                                                              </div>
                                                              <div class="row">
                                                                <div class="col-3">
                                                                  <div class="form-group m-b-40">
                                                                  <label><h6 class="font-weight-bold">No Nota:</h6></label>
                                                                    <select class="form-control" name="id_transaksi">
                                                                    <option value="">Pilih Nota</option>
                                                                    <?php
                                                                    if($user['status']==1){
                                                                      $nota=$nota1;
                                                                    }
                                                                    else if($user['status']==2){
                                                                      $nota=$nota2;
                                                                    }
                                                                    foreach($nota as $n)
                                                                    {
                                                                        $selected = ($n['id_transaksi'] == $i->id_transaksi) ? ' selected="selected"' : "";
                                                                        echo '<option value="'.$n['id_transaksi'].'" '.$selected.'>'.$n['no_nota'].'</option>';
                                                                    }
                                                                    ?>
                                                                    </select>
                                                                  </div>
                                                                </div>
                                                                <div class="col-3">
                                                                    <?php $date = explode(" ",$i->tanggal);$date = $date[0]; ?>
                                                                    <div class="form-group m-b-40" style="display:none;">
                                                                        <label for="id_transaksi"><h6 class="font-weight-bold"><span class="text-danger">*</span>Tanggal : </h6></label>
                                                                      <input type="date" class="form-control" name="tanggal" value="<?php echo ($this->input->post('tanggal') ? $this->input->post('tanggal') : $date); ?>" />
                                                                      <span class="text-danger"><?php echo form_error('tanggal');?></span>
                                                                  </div>
                                                                </div>
                                                                <div class="col-3">
                                                                  <div class="form-group m-b-40">
                                                                      <label><h6 class="font-weight-bold">Divisi Pengada</h6></label>
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
                                                                <div class="col-3">
                                                                  <div class="form-group m-b-40">
                                                                      <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Divisi Penerima</h6></label>
                                                                      <select name="id_divisi_penerima" class="form-control">
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
                                                                      <span class="text-danger"><?php echo form_error('nama_divisi_pengada');?></span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="modal-footer d-flex">
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal" aria-label="Close"> Batal </button>
                                                            <button type="submit" class="btn btn-info waves-effect waves-light text-left">Ubah</button>
                                                        </div>
                                                        <?php echo form_close(); ?>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- modal menambahkan fungsi  -->

                                            <div class="modal fade" id="update-<?php echo $i->id_inventory;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-center">
                                                            <h3 class="modal-title w-100 font-weight-bold">Perbaharui Persediaan Barang</h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body"><div class="row"><div class="col-lg-12">
                                                          <?php echo form_open('inventory/update_bhp/'.$i->id_inventory); ?>
                                                          <form class="floating-labels m-t-40">
                                                          <h4 class="text-primary">Info Stock Saat Ini</h4>
                                                          <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group m-b-40">
                                                                    <label><h6 class="font-weight-bold">Nama :</h6></label>
                                                                    <input class="form-control" type="text" readonly name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $i->nama); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('nama');?></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group m-b-40">
                                                                    <label><h6 class="font-weight-bold">Qty:</h6></label>
                                                                    <input class="form-control" type="number" readonly  name="jumlah" value="<?php echo ($this->input->post('jumlah') ? $this->input->post('jumlah') : $i->jumlah); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('jumlah');?></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group m-b-40">
                                                                    <label><h6 class="font-weight-bold">Satuan : </h6></label>
                                                                    <input class="form-control" type="text" readonly name="satuan" value="<?php echo ($this->input->post('satuan') ? $this->input->post('satuan') : $i->satuan); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('satuan');?></span>
                                                                </div>
                                                            </div>
                                                          </div>
                                                          <hr><h4 class="text-primary">Update Stock</h4>
                                                          <div class="row">

                                                            <div class="col-md-3">
                                                              <div class="form-group m-b-40">
                                                                  <label><h6 class="font-weight-bold">Qty:</h6></label>
                                                                  <input class="form-control" type="number" readonly  name="jumlah" value="<?php echo ($this->input->post('jumlah') ? $this->input->post('jumlah') : $i->jumlah); ?>" />
                                                                  <span class="text-danger"><?php echo form_error('jumlah');?></span>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group m-b-40">
                                                                    <label><h6 class="font-weight-bold">Satuan :</h6></label>
                                                                    <input class="form-control" type="text" readonly name="satuan" value="<?php echo ($this->input->post('satuan') ? $this->input->post('satuan') : $i->satuan); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('satuan');?></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group m-b-40">
                                                                <label for="tanda"><h6 class="font-weight-bold">Action</h6></label>
                                                                  <br>
                                                        <!-- <input type="text" class="form-control" name="kategori" value="<?php echo $this->input->post('tanda'); ?>"> -->
                                                                    <input type="radio" name="tanda" value="+" checked>&nbsp;<i class="ti-plus"></i> Stock<br>
                                                                    <input type="radio" name="tanda" value="-">&nbsp;<i class="ti-minus"></i> Stock<br>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group m-b-40">
                                                                    <label><h6 class="font-weight-bold"><span class="text-danger ">*</span>Jumlah</h6></label>
                                                                    <input class="form-control" type="number"  name="jumlah1" value="<?php echo $this->input->post('jumlah1') ; ?>" />
                                                                    <span class="text-danger"><?php echo form_error('jumlah1');?></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div  style="display:none;">
                                                                    <span class="text-danger ">*</span>id_divisi_penerima
                                                                    <input type="number"   name="id_divisi" value="<?php echo ($this->input->post('id_divisi') ? $this->input->post('id_divisi') : $i->id_divisi_penerima); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('id_divisi');?></span>
                                                                </div>
                                                                <div  style="display:none;">
                                                                    <span class="text-danger ">*</span>nama barang:
                                                                    <input type="text"   name="nama_barang" value="<?php echo ($this->input->post('nama_barang') ? $this->input->post('nama_barang') : $i->nama); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('nama_barang');?></span>
                                                                </div>
                                                                <?php $id=$this->session->userdata('id_user');?>
                                                                <div  style="display:none;">
                                                                    <span class="text-danger ">*</span>id user:
                                                                    <input type="number"name="id_user" value="<?php echo $id;?>" />
                                                                    <span class="text-danger"><?php echo form_error('nama_barang');?></span>
                                                                </div>
                                                            </div>
                                                          </div></div></div>
                                                        <div class="modal-footer d-flex justify-content-center">
                                                            <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
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
                              <?php }
                              else{?> <br>
                                     <?php
                                     if($by_kantor == 0){
                                       echo('Tidak ada data barang habis pakai');
                                     }
                                     else{
                                       echo ('Tidak ada data barang habis pakai untuk kantor ');
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
