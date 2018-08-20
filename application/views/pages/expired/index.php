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
                <h4 class="text-themecolor">Expired</h4>
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
                                <h4 class="card-title">Data barang yang sudah expired</h4>
                                <!-- <h6 class="card-subtitle">Data table example</h6> -->
                                <?php if ($user['status'] == 1){
                                  echo form_open("Expired/index");?>
                                <select name="pilih_cabang" class="select2 form-control custom-select col-6" style="width: 40%; height:36px;">
                                  <option value="0">Semua Kantor</option><?php
                                  foreach($all_kantor as $kantor)
                                  {
                                    $selected = ($kantor['id_kantor'] == $by_kantor) ? ' selected="selected"' : "";
                                    echo '<option value="'.$kantor['id_kantor'].'" '.$selected.'>'.$kantor['nama_kantor'].'</option>';
                                  }
                                  ?>
                                </select>
                                <button type="submit" class="btn btn-info waves-effect waves-light">Pilih</button>
                                <br>
                                <br>
                                <?php echo form_close();}?>
                                <?php if($user['status']==1){
                                  $exp=$expired;
                                }
                                else if($user['status']==2){
                                  $exp=$expired2;
                                }
                    if (count($exp)){?>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                      <th>No.</th>
											<th>Serial Id</th>
											<th>Divisi Penerima</th>
											<th>Nama</th>
											<th>Merk</th>
											<th>Divisi Pengada</th>
                      <th>Kantor</th>
											<th>Tanggal</th>
											<th>Kategori</th>
											<th>Kondisi</th>
											<th>Durability</th>
											<th>Status</th>
                      <th>Usia</th>


											<!-- <th>Id Beli/sewa</th> -->
											<th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php $no = 1;
                    foreach($exp as $i){ ?>
    									<tr>
                      <?php $date = explode(" ",$i->tanggal);
                            $date = $date[0]; ?>
                      <?php $datetime = new DateTime($i->tanggal); ?>
                      <?php $diff = date_diff( $datetime, $date2 ); ?>
                      <?php $selisih = $diff->m + ($diff->y * 12); ?>
                      <?php if (($i->durability - $selisih) <= 6 ){ ?>
                        <td><?php echo $no++;?>
                        <td><?php echo $i->serial_id; ?></td>
                        <td><?php
                        foreach($all_divisi as $d){
                            if($d['id_divisi']==$i->id_divisi_penerima) {echo $d['nama_divisi'];}
                        }?></td>
                        <td><?php echo $i->nama; ?></td>
                        <td><?php echo $i->merk; ?></td>
                        <td><?php echo $i->nama_divisi_pengada; ?></td>
                        <td><?php
                        foreach($all_kantor as $kan){
                            if($kan['id_kantor']==$i->id_kantor) {echo $kan['nama_kantor'];}
                        }?></td>
                        <td><?php echo $date; ?></td>
                        <td><?php echo $i->kategori; ?></td>
                        <td><?php echo $i->kondisi; ?></td>
                        <td><?php echo $i->durability; ?></td>
                        <td><?php echo $i->status; ?></td>
                        <td><?php echo $selisih; ?></td>

                        <?php if ($i->kategori == 'beli'){ ?>

                        <td>
                                <a href="<?php echo site_url('expired/buang/'.$i->id_inventory); ?>">Buang</a> |
                                <a data-toggle="modal" href="#addpenjualan<?php echo $i->id_inventory; ?>">Jual</a> |
                                <a data-toggle="modal" href="#addperpanjang<?php echo $i->id_inventory; ?>">Perpanjang</a>
                            </td>
                        <?php }
                            else { ?>
                            <td>
                                <a href="<?php echo site_url('expired/kembalikan/'.$i->id_inventory); ?>">Kembalikan</a> |
                                <a href="<?php echo site_url('expired/perpanjang/'.$i->id_inventory); ?>">Perpanjang</a>
                            </td>
                        <?php } ?>
                          </tr>
                          <!-- modal penjualan -->
                          <div class="modal fade" id="addpenjualan<?php echo $i->id_inventory;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3 class="modal-title w-100 font-weight-bold">Tambah Penjualan</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body mx-3">
                                      <?php echo form_open('expired/add/'.$i->id_inventory); ?>
                                        <form class="floating-labels m-t-40">
                                          <div class="form-group m-b-40">
                                              <label><h6 class="font-weight-bold">Serial ID</h6></label>
                                              <input type="text" class="form-control" readonly name="id_inventory" value="<?php echo ($this->input->post('id_inventory') ? $this->input->post('id_inventory') : $i->id_inventory); ?>" />
                                              <span class="bar"></span>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <label><h6 class="font-weight-bold">Serial ID</h6></label>
                                              <input type="text" class="form-control" readonly name="serial_id" value="<?php echo ($this->input->post('serial_id') ? $this->input->post('serial_id') : $i->serial_id); ?>" />
                                              <span class="bar"></span>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <label><h6 class="font-weight-bold">Pembeli</h6></label>
                                              <input type="text" class="form-control" name="pembeli" value="<?php echo $this->input->post('pembeli'); ?>" />
                                              <span class="bar"></span>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <label><h6 class="font-weight-bold">Harga</h6></label>
                                              <input type="text" class="form-control" name="harga" value="<?php echo $this->input->post('harga'); ?>" />
                                              <span class="bar"></span>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <label><h6 class="font-weight-bold">Tanggal</h6></label>
                                              <input type="text" class="form-control mydatepicker" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>" />
                                              <span class="bar"></span>
                                          </div>
                                        </div>

                                      <div class="modal-footer d-flex justify-content-center">
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Jual</button>
                                        </div>
                                        <?php echo form_close(); ?>
                                        </div>
                                        </div>
                                        </div>

                                <div class="modal fade" id="addperpanjang<?php echo $i->id_inventory;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3 class="modal-title w-100 font-weight-bold">Perpanjang</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body mx-3">
                                      <?php echo form_open('expired/perpanjang/'.$i->id_inventory); ?>
                                        <form class="floating-labels m-t-40">
                                          <div class="form-group m-b-40">
                                              <label><h6 class="font-weight-bold">Durability Sebelumnya</h6></label>
                                              <input type="text" class="form-control" readonly name="durability" value="<?php echo ($this->input->post('durability') ? $this->input->post('durability') : $i->durability); ?>" />
                                              <span class="bar"></span>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <label><h6 class="font-weight-bold">Tambah Durability</h6></label>
                                              <input type="text" class="form-control" name="durability2" value="<?php echo $this->input->post('durability2'); ?>" />
                                              <span class="bar"></span>
                                          </div>
                                        </div>

                                      <div class="modal-footer d-flex justify-content-center">
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Perpanjang</button>
                                        <?php echo form_close(); ?>

                      <?php } ?>

										<?php }
                  }
                  else{?> <br>
                    <?php
                    if($by_kantor == 0){
                      echo('Tidak ada data barang expired');
                    }
                    else {
                    echo ('Tidak ada data barang expired untuk kantor ');
                      foreach($all_kantor as $kan){
                        if($kan['id_kantor']==$by_kantor) echo $kan['nama_kantor'];
                      }
                    }?>
                    <br>
                    <?php
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
