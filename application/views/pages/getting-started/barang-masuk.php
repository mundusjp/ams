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
                <h4 class="text-themecolor">Getting Started - Barang Masuk</h4>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Ini working space teman teman                                  -->
        <!-- ============================================================== -->
        <style>
        .vl{
            border-left: 1px solid;
            height: 500px;}
          a.link { color: #FFFFFF; }
          a.link:hover { color: #dddddd; }
        </style>
        <!-- MODALS -->
        <div class="modal fade bd-example-modal-lg" id="ModalTambahBHP" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                            foreach($all_nota as $nota)
                            {
                                $selected = ($nota['id_transaksi'] == $this->input->post('id_transaksi')) ? ' selected="selected"' : "";
                                echo '<option value="'.$nota['id_transaksi'].'" '.$selected.'>'.$nota['no_nota'].'</option>';
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
                            <div class="col-3">
                              <div class="form-group">
                                  <label><h6 class="font-weight-bold">Diterima Oleh:</h6></label>

                                  <select name="id_divisi_penerima" class="form-control">
                                  <option value="">Pilih Divisi</option>
                                  <?php
                                  $status = $this->session->userdata('level');
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
                               <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Kode :</h6></label>
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
                               <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Jumlah :</h6></label>
                               <div class="controls">
                               <input required min="1" class="form-control" type="text" name="jumlah" value="<?php echo $this->input->post('jumlah'); ?>" />
                               </div>
                               <span class="text-danger"><?php echo form_error('jumlah');?></span>
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
                                  <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Kode :</h6></label>
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
                                  <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Jumlah :</h6></label>
                                  <div class="controls">
                                  <input required min="1" class="form-control" type="text" name="jumlah" value="<?php echo $this->input->post('jumlah'); ?>" />
                                  </div>
                                  <span class="text-danger"><?php echo form_error('jumlah');?></span>
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
        <!-- ./ MODALS -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <!-- ============================================================== -->
                <!-- tinggal masukin kodingan html disini                           -->
                <!-- ============================================================== -->
                <div class="card-body wizard-content">
                    <h4 class="card-title">Langkah - Langkah</h4>
                    <h6 class="card-subtitle">Ikuti Langkah untuk Memasukkan List Barang Baru</a></h6>
                    <form action="#" class="tab-wizard wizard-circle">
                        <!-- Step 1 -->
                        <h6>Barang Masuk</h6>
                        <section>
                          <div class="row">
                            <div class="col-lg-12 content-mid">
                              <div class="card">
                                <img class="card-img" src="<?php echo base_url('assets/vertical/images/background/terima.jpg')?>">
                                <div class="card-img-overlay card-inverse">
                                  <span class="text-white" style="
                                  /* font-size: 30px; */
                                  position: absolute;
                                  top: 50%;
                                  left: 50%;
                                  transform: translate(-50%, -50%);
                                  -ms-transform: translate(-50%, -50%);
                                  text-align: center;"><h3 class="font-weight-bold">Barang Masuk. Lalu apa?</h3><br><h4 class="text-white">Ikuti dan isi form sesuai langkah yang disediakan. Ready? Click "Next" Di bawah!</h4></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                        <!-- Step 2 -->
                        <h6>Kategori Barang</h6>
                        <section>
                          <h4 class="font-weight-bold" style="text-align: center;"> Apakah Barangnya Berupa: </h4>
                          <h5 class="text-muted" style="text-align: center;">Silahkan Click Salah Satu Gambar Di Bawah</h5>
                          <hr>
                            <div class="row">
                                <div class="col-md-6">
                                  <h6 class="font-weight-bold"> Barang <span class="text-danger">Habis</span> Pakai</h6>
                                  <div class="card">
                                    <img class="card-img" src="<?php echo base_url('assets/vertical/images/custom/terima-kuning.jpg')?>">
                                    <div class="card-img-overlay card-inverse">
                                      <span class="display-2">
                                        <i class="icon-fire" style="
                                        color: white;
                                        position: absolute;
                                        top: 50%;
                                        left: 50%;
                                        transform: translate(-50%, -50%);
                                        -ms-transform: translate(-50%, -50%);
                                        text-align: center;"><br><a class="btn btn-info"data-toggle="modal" data-target="#ModalTambahBHP">Click Me</a></i>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <h6 class="font-weight-bold" style="text-align: right;"> Barang <span class="text-danger">Tidak Habis</span> Pakai</h6>
                                  <div class="card">
                                    <img class="card-img" src="<?php echo base_url('assets/vertical/images/custom/terima.jpg')?>">
                                    <div class="card-img-overlay card-inverse">
                                      <span class="display-2">
                                        <i class="icon-reload" style="
                                        color: white;
                                        position: absolute;
                                        top: 50%;
                                        left: 50%;
                                        transform: translate(-50%, -50%);
                                        -ms-transform: translate(-50%, -50%);
                                        text-align: center;"><br><a class="btn btn-warning" data-toggle="modal" data-target="#ModalTambahKantor1">Penyewaan</a>&nbsp;<a class="btn btn-primary"  data-toggle="modal" data-target="#ModalTambahKantor">Pembelian </a></i>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </section>
                        <!-- Step 3 -->
                        <h6>Interview</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="int1">Interview For :</label>
                                        <input type="text" class="form-control" id="int1"> </div>
                                    <div class="form-group">
                                        <label for="intType1">Interview Type :</label>
                                        <select class="custom-select form-control" id="intType1" data-placeholder="Type to search cities" name="intType1">
                                            <option value="Banquet">Normal</option>
                                            <option value="Fund Raiser">Difficult</option>
                                            <option value="Dinner Party">Hard</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Location1">Location :</label>
                                        <select class="custom-select form-control" id="Location1" name="location">
                                            <option value="">Select City</option>
                                            <option value="India">India</option>
                                            <option value="USA">USA</option>
                                            <option value="Dubai">Dubai</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jobTitle2">Interview Date :</label>
                                        <input type="date" class="form-control" id="jobTitle2">
                                    </div>
                                    <div class="form-group">
                                        <label>Requirements :</label>
                                        <div class="c-inputs-stacked">
                                            <label class="inline custom-control custom-checkbox block">
                                                <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Employee</span> </label>
                                            <label class="inline custom-control custom-checkbox block">
                                                <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">Contract</span> </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Step 4 -->
                        <h6>Remark</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="behName1">Behaviour :</label>
                                        <input type="text" class="form-control" id="behName1">
                                    </div>
                                    <div class="form-group">
                                        <label for="participants1">Confidance</label>
                                        <input type="text" class="form-control" id="participants1">
                                    </div>
                                    <div class="form-group">
                                        <label for="participants1">Result</label>
                                        <select class="custom-select form-control" id="participants1" name="location">
                                            <option value="">Select Result</option>
                                            <option value="Selected">Selected</option>
                                            <option value="Rejected">Rejected</option>
                                            <option value="Call Second-time">Call Second-time</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="decisions1">Comments</label>
                                        <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Rate Interviwer :</label>
                                        <div class="c-inputs-stacked">
                                            <label class="inline custom-control custom-checkbox block">
                                                <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">1 star</span> </label>
                                            <label class="inline custom-control custom-checkbox block">
                                                <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">2 star</span> </label>
                                            <label class="inline custom-control custom-checkbox block">
                                                <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">3 star</span> </label>
                                            <label class="inline custom-control custom-checkbox block">
                                                <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">4 star</span> </label>
                                            <label class="inline custom-control custom-checkbox block">
                                                <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">5 star</span> </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <h6>Test</h6>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="behName1">Behaviour :</label>
                                        <input type="text" class="form-control" id="behName1">
                                    </div>
                                    <div class="form-group">
                                        <label for="participants1">Confidance</label>
                                        <input type="text" class="form-control" id="participants1">
                                    </div>
                                    <div class="form-group">
                                        <label for="participants1">Result</label>
                                        <select class="custom-select form-control" id="participants1" name="location">
                                            <option value="">Select Result</option>
                                            <option value="Selected">Selected</option>
                                            <option value="Rejected">Rejected</option>
                                            <option value="Call Second-time">Call Second-time</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="decisions1">Comments</label>
                                        <textarea name="decisions" id="decisions1" rows="4" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Rate Interviwer :</label>
                                        <div class="c-inputs-stacked">
                                            <label class="inline custom-control custom-checkbox block">
                                                <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">1 star</span> </label>
                                            <label class="inline custom-control custom-checkbox block">
                                                <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">2 star</span> </label>
                                            <label class="inline custom-control custom-checkbox block">
                                                <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">3 star</span> </label>
                                            <label class="inline custom-control custom-checkbox block">
                                                <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">4 star</span> </label>
                                            <label class="inline custom-control custom-checkbox block">
                                                <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description ml-0">5 star</span> </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </form>
                </div>

              </div>
            </div>
          </div>
        </div>





        <!-- ============================================================== -->
        <!-- Ini adalah akhir dari working space. No more coding below      -->
        <!-- ============================================================== -->
