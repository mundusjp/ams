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
                                  <option value="0">Pilih Kantor</option><?php
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
                               <div class="modal fade" id="ModalTambahKantor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h3 class="modal-title w-100 font-weight-bold">Tambah Barang Tidak Habis Pakai</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                            </div>
                                            <div class="modal-body mx-3">


                                               <?php echo form_open('inventory/add_bthp'); ?>
                                                    <div class="form-group m-b-40">
                                                        <label for="serial_id"><h6 class="font-weight-bold">Serial Id</h6></label>
                                                        <input type="text" class="form-control" name="serial_id" value="<?php echo $this->input->post('serial_id'); ?>">
                                                        <span class="bar"></span>
                                                    </div>
                                                    <div class="form-group m-b-40">
                                                        <label for="id_kantor"><h6 class="font-weight-bold">Nama</h6></label>
                                                        <input type="text" class="form-control" name="nama" value="<?php echo $this->input->post('nama'); ?>">
                                                        <span class="bar"></span>
                                                    </div>
                                                    <div class="form-group m-b-40" style="display:none;">
                                                        <label for="jenis"><h6 class="font-weight-bold">Jenis</h6></label>
                                                        <input type="text" class="form-control" name="jenis" value="2">
                                                        <span class="bar"></span>
                                                    </div>
                                                    <div class="form-group m-b-40">
                                                        <label for="merk"><h6 class="font-weight-bold">Merek</h6></label>
                                                        <input type="text" class="form-control" name="merk" value="<?php echo $this->input->post('merk'); ?>">
                                                        <span class="bar"></span>
                                                    </div>
                                                    <div class="form-group m-b-40">
                                                        <label for="nama_divisi_pengada"><h6 class="font-weight-bold">Divisi Pengada</h6></label>
                                                        <select name="nama_divisi_pengada" class="form-control">
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
                                                    <div class="form-group m-b-40">
                                                        <label for="tanggal"><h6 class="font-weight-bold">Tanggal</h6></label>
                                                        <input type="date" class="form-control" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>">
                                                        <span class="bar"></span>
                                                    </div>
                                                    <div class="form-group m-b-40">
                                                        <label for="kategori"><h6 class="font-weight-bold">Kategori</h6></label><br>
                                                        <!-- <input type="text" class="form-control" name="kategori" value="<?php echo $this->input->post('kategori'); ?>"> -->
                                                        <input type="radio" name="kategori" value="beli" checked> Beli<br>
                                                        <input type="radio" name="kategori" value="sewa"> Sewa<br>
                                                        <span class="bar"></span>

                                                    </div>
                                                    <div class="form-group m-b-40">
                                                        <label for="id_transaksi"><h6 class="font-weight-bold">Transaksi</h6></label>
                                                        <input type="text" class="form-control" name="id_transaksi" value="<?php echo $this->input->post('id_transaksi'); ?>">
                                                        <span class="bar"></span>
                                                    </div>
                                                    <div class="form-group m-b-40">
                                                        <label for="kondisi"><h6 class="font-weight-bold">Kondisi</h6></label>
                                                        <input type="text" class="form-control" name="kondisi" value="<?php echo $this->input->post('kondisi'); ?>">
                                                        <span class="bar"></span>
                                                    </div>
                                                    <div class="form-group m-b-40">
                                                        <label for="durability"><h6 class="font-weight-bold">Durability</h6></label>
                                                        <input type="number" class="form-control" name="durability" value="<?php echo $this->input->post('durability'); ?>">
                                                        <span class="bar"></span>
                                                    </div>
                                                    <div class="form-group m-b-40">
                                                        <label for="durability"><h6 class="font-weight-bold">Harga Perolehan</h6></label>
                                                        <input type="number" class="form-control" name="harga" value="<?php echo $this->input->post('harga'); ?>">
                                                        <span class="bar"></span>
                                                    </div>
                                                    <div class="form-group m-b-40" style="display:none;">
                                                        <label for="status"><h6 class="font-weight-bold">Status</h6></label>
                                                        <input type="text" class="form-control" name="status" value="ada">s
                                                    </div>

                                                    <div class="form-group">
                                                        <label><h6 class="font-weight-bold">Divisi Penerima</h6></label>

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
                                                    </div>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <button type="submit" class="btn btn-info waves-effect waves-light">Tambah</button>
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
                                    $inv=$tidakhabis;
                                  }
                                  else if($user['status']==2){
                                    $inv=$tidakhabis2;
                                  }
                                if (count($inv)){?>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Serial Id</th>
                                                <th>Nama</th>
                                                <th>Divisi Penerima</th>
                                                <th>Kantor</th>
                                                <th>Merk</th>
                                                <th>Divisi Pengada</th>
                                                <th>Tanggal</th>
                                                <th>Kategori</th>
                                                <th>Kondisi</th>
                                                <th>Durability</th>
                                                <th>Harga Perolehan</th>
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
                                                  }?>
                                                </td>
                                                <td><?php echo $i->merk; ?></td>
                                                <td><?php echo $i->nama_divisi_pengada; ?></td>
                                                <td><?= date('d-m-Y', strtotime($i->tanggal)) ?></td>
                                                <td><?php echo $i->kategori; ?></td>
                                                <td><?php echo $i->kondisi; ?></td>
                                                <td><?php echo $i->durability; ?></td>
                                                <td><?php echo $i->harga; ?></td>
                                                <!-- <td><?php echo $i->status; ?></td> -->
                                                <td>
                                                <a class="btn btn-outline-info waves-effect waves-light" data-toggle="modal" href="#edit-<?php echo $i->id_inventory;?>">Ubah</a>
                                                    <!-- <a href="<?php echo site_url('inventory/remove_bthp/'.$i->id_inventory); ?>">Delete</a> -->
                                                    <a class="btn btn-outline-warning" data-toggle="modal" href="#ubah-<?php echo $i->id_inventory;?>">Pemeliharaan</a>
                                                </td>
                                            </tr>
                                              <!-- modal menambahkan fungsi  -->
                                              <div class="modal fade" id="edit-<?php echo $i->id_inventory;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-center">
                                                            <h3 class="modal-title w-100 font-weight-bold">Ubah Barang Tidak Habis Pakai</h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body mx-3">
                                                            <?php echo form_open('inventory/edit_bthp/'.$i->id_inventory); ?>
                                                            <form class="floating-labels m-t-40">

                                                                <div class="form-group">
                                                                  <label><h6 class="font-weight-bold">Divisi Pengada</h6></label>
                                                                  <select name="nama_divisi_pengada">
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
                                                                <div>
                                                                    <span class="text-danger">*</span>Serial ID :
                                                                    <input type="text" name="serial_id" value="<?php echo ($this->input->post('serial_id') ? $this->input->post('serial_id') : $i->serial_id); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('serial_id');?></span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-danger">*</span>Nama :
                                                                    <input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $i->nama); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('nama');?></span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-danger">*</span>Jenis :
                                                                    <input type="text" name="jenis" value="<?php echo ($this->input->post('jenis') ? $this->input->post('jenis') : $i->jenis); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('jenis');?></span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-danger">*</span>Merk :
                                                                    <input type="text" name="merk" value="<?php echo ($this->input->post('merk') ? $this->input->post('merk') : $i->merk); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('merk');?></span>
                                                                </div>
                                                                <div>
                                                                  <label><h6 class="font-weight-bold">Divisi Penerima</h6></label>
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
                                                                <?php $date = explode(" ",$i->tanggal);$date = $date[0]; ?>
                                                                <div>
                                                                    <span class="text-danger">*</span>Tanggal :
                                                                    <input type="date" name="tanggal" value="<?php echo ($this->input->post('tanggal') ? $this->input->post('tanggal') : $date); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('tanggal');?></span>
                                                                </div>

                                                                <div>

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
                                                               <div>
                                                                    <span class="text-danger">*</span>Kondisi :
                                                                    <input type="text" name="kondisi" value="<?php echo ($this->input->post('kondisi') ? $this->input->post('kondisi') : $i->kondisi); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('kondisi');?></span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-danger">*</span>Durability :
                                                                    <input type="text" name="durability" value="<?php echo ($this->input->post('durability') ? $this->input->post('durability') : $i->durability); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('durability');?></span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-danger">*</span>Harga Perolehan :
                                                                    <input type="text" name="harga" value="<?php echo ($this->input->post('harga') ? $this->input->post('harga') : $i->harga); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('harga');?></span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-danger">*</span>Status :
                                                                    <input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $i->status); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('status');?></span>
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer d-flex justify-content-center">
                                                            <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                                                        </div>
                                                        <?php echo form_close(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- modal menambahkan fungsi  -->
                                <div class="modal fade" id="ubah-<?php echo $i->id_inventory;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h3 class="modal-title w-100 font-weight-bold">Tambah Pemeliharaan</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                            </div>
                                            <div class="modal-body mx-3">
                                                <?php echo form_open('stock/addpemeliharaan'); ?>
                                                <form class="floating-labels m-t-40">
                                                    <div >
                                                        <span class="text-danger">*</span>Inventory :
                                                        <input disabled type="text" name="serial_id" value="<?php echo ($this->input->post('serial_id') ? $this->input->post('serial_id') : $i->serial_id); ?>" />
                                                        <span class="text-danger"><?php echo form_error('serial_id');?></span>
                                                    </div>
                                                    <div style="display:none;">
                                                        <span class="text-danger">*</span>Inventory :
                                                        <input  type="text" name="id_inventory" value="<?php echo ($this->input->post('id_inventory') ? $this->input->post('id_inventory') : $i->id_inventory); ?>" />
                                                        <span class="text-danger"><?php echo form_error('serial_id');?></span>
                                                    </div>
                                                    <div class="form-group m-b-40">
                                                        <label for="namakantor"><h6 class="font-weight-bold">Biaya</h6></label>
                                                        <span class="bar"></span>
                                                        <input type="number" class="form-control" name="biaya" value="<?php echo $this->input->post('biaya'); ?>" />
                                                        <span class="text-danger"><?php echo form_error('biaya');?></span>
                                                    </div>
                                                    <div class="form-group m-b-40">
                                                        <label for="id_kantor"><h6 class="font-weight-bold">Tanggal </h6></label>
                                                        <span class="bar"></span>
                                                        <input type="date" class="form-control" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>" />
                                                        <span class="text-danger"><?php echo form_error('tanggal');?></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><h6 class="font-weight-bold">Vendor :</h6></label>
                                                        <select class="form-control" name="id_vendor">
                                                        <option value="">select vendor</option>
                                                        <?php
                                                        foreach($all_vendor as $vendor)
                                                        {
                                                            $selected = ($vendor['id_vendor'] == $this->input->post('id_vendor')) ? ' selected="selected"' : "";
                                                            echo '<option value="'.$vendor['id_vendor'].'" '.$selected.'>'.$vendor['nama'].'</option>';
                                                        }
                                                        ?>
                                                        </select>
                                                        </div>
                                                    <div class="form-group m-b-40">
                                                        <label for="alamatkantor"><h6 class="font-weight-bold">Deskripsi</h6></label>
                                                        <span class="bar"></span>
                                                        <textarea rows="4" class="form-control" type="text" name="deskripsi" value="<?php echo $this->input->post('deskripsi'); ?>"></textarea>
                                                        <span class="text-danger"><?php echo form_error('deskripsi');?></span>
                                                    </div>
                                            </div>

                                            <div class="modal-footer d-flex justify-content-center">
                                                <button class="btn btn-info waves-effect waves-light" type="submit">Tambah</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php echo form_close(); ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                              <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
