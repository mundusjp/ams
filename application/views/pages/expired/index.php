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
                                <h4 class="card-title">Data barang yang kadaluarsa</h4>
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
											<th>Serial_ID&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
											<th>Divisi Penerima</th>
											<th>Nama&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
											<th>Merk</th>
											<th>Divisi_Pengada</th>
                      <th>Kantor&emsp;</th>
											<th>Tanggal&emsp;</th>
											<th>Kategori</th>
											<th>Kondisi</th>
											<th>Durability</th>
                      <th>Usia</th>


											<!-- <th>Id Beli/sewa</th> -->
											<th>Actions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
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
                      <?php if(!empty($i->durability)) { ?>
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
                        <td><?php echo $i->durability; ?>&nbsp;Bulan</td>
                        <td><?php echo $selisih; ?>&nbsp;Bulan</td>

                        <?php if ($i->kategori == 'beli'){ ?>

                        <td>
                                <a class="text-danger" href="<?php echo site_url('expired/buang/'.$i->id_inventory); ?>">Buang</a> &nbsp;|
                                <a class="text-warning waves-effect waves-light" data-toggle="modal" href="#addpenjualan<?php echo $i->id_inventory; ?>">Jual</a>&nbsp;|
                                <a class="text-info waves-effect waves-light" data-toggle="modal" href="#addperpanjang<?php echo $i->id_inventory; ?>">Perpanjang</a>
                            </td>
                        <?php }
                            else { ?>
                            <td>
                                <a class="text-danger" href="<?php echo site_url('expired/kembalikan/'.$i->id_inventory); ?>">Kembalikan</a>
                                <a class="text-info waves-effect waves-light" href="<?php echo site_url('expired/perpanjang/'.$i->id_inventory); ?>">Perpanjang</a>
                            </td>
                        <?php } ?>
                          </tr>
                          <!-- modal penjualan -->
                          <div class="modal fade bs-example-modal-lg" id="addpenjualan<?php echo $i->id_inventory;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg " role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3 class="modal-title w-100 font-weight-bold">Tambah Penjualan</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body"><div class="row"><div class="col-lg-12">
                                        <?php echo form_open('expired/add/'.$i->id_inventory); ?>
                                        <form class="floating-labels m-t-40">
                                        <div class="row">
                                          <div class="col-md-3">
                                            <div class="form-group m-b-40" style="display:none;">
                                                <label><h6 class="font-weight-bold">Serial ID</h6></label>
                                                <input type="text" class="form-control" readonly name="id_inventory" value="<?php echo ($this->input->post('id_inventory') ? $this->input->post('id_inventory') : $i->id_inventory); ?>" />
                                                <span class="bar"></span>
                                            </div>
                                            <div class="form-group m-b-40">
                                                <label><h6 class="font-weight-bold">Serial ID</h6></label>
                                                <input type="text" class="form-control" readonly name="serial_id" value="<?php echo ($this->input->post('serial_id') ? $this->input->post('serial_id') : $i->serial_id); ?>" />
                                                <span class="bar"></span>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group m-b-40">
                                                <label><h6 class="font-weight-bold">Nama Barang</h6></label>
                                                <input type="text" class="form-control" readonly name="barang_id" value="<?php echo ($this->input->post('serial_id') ? $this->input->post('serial_id') : $i->nama); ?>" />
                                                <span class="bar"></span>
                                            </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="form-group m-b-40">
                                                <label><h6 class="font-weight-bold">Usia Barang</h6></label>
                                                <input type="text" class="form-control" readonly name="selisih_id" value="<?php echo $selisih ?>&nbsp;Bulan" />
                                                <span class="bar"></span>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group m-b-40">
                                                <label><h6 class="font-weight-bold">Nama Perusahaan / Pembeli</h6></label>
                                                <input type="text" class="form-control" name="pembeli" value="<?php echo $this->input->post('pembeli'); ?>" placeholder="Cth: PT. Pelabuhan Indonesia / John Doe" />
                                                <span class="bar"></span>
                                            </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="form-group m-b-40">
                                                <label><h6 class="font-weight-bold">Harga Jual</h6></label>
                                                <input type="number" class="form-control" name="harga" value="<?php echo $this->input->post('harga'); ?>" />
                                                <span class="bar"></span>
                                            </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="form-group m-b-40">
                                                <label><h6 class="font-weight-bold">Tanggal Transaksi</h6></label>
                                                <input type="date" class="form-control" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>" />
                                                <span class="bar"></span>
                                            </div>
                                          </div>
                                        </div></div></div>
                                        <div class="modal-footer d-flex">
                                          <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal" aria-label="Close"> Batal </button>
                                          <button type="submit" class="btn btn-info waves-effect waves-light">Jual</button>
                                        </div>
                                        <?php echo form_close(); ?>
                                        </div>
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
                                      <div class="modal-body"><div class="row"><div class="col-lg-12">
                                        <?php echo form_open('expired/perpanjang/'.$i->id_inventory); ?>
                                        <form class="floating-labels m-t-40">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <label><h6 class="font-weight-bold">Durability Sebelumnya&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Tambah Durability</h6></label>
                                            <div class="input-group form-group m-b-40">
                                                <input type="text" class="form-control" readonly name="durability" value="<?php echo ($this->input->post('durability') ? $this->input->post('durability') : $i->durability); ?>" />
                                                <span class="bar"></span>
                                                <div class="input-group-append">
                                                  <span class="input-group-text b-0 bg-info text-white"><i class="ti-plus"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="durability2" value="<?php echo $this->input->post('durability2'); ?>" />
                                                <span class="bar"></span>
                                            </div>
                                          </div>
                                        </div>
                                      </div></div></div>
                                      <div class="modal-footer d-flex">
                                        <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal" aria-label="Close"> Batal </button>
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Perpanjang</button>
                                        <?php echo form_close(); ?>

                      <?php } ?>
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
