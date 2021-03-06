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
                <h4 class="text-themecolor">Pemeliharaan
                </h4>
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
                                <h4 class="card-title">Data Pemeliharaan
                                </h4>
                                <!-- <h6 class="card-subtitle">Data table example
                                </h6> -->
                                <?php if ($user['status'] == 1){
                                  echo form_open("transaction/pemeliharaan");?>
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
                                <?php echo form_close();}

                                if($user['status']==1){
                                  $pem=$pemeliharaan;
                                }
                                else if($user['status']==2){
                                  $pem=$pemeliharaan2;
                                }
                                if (count($pem)){?>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Tindakan</th>
                                                <th>Serial_id&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
                                                <th>Nama_Barang&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
                                                <th>Vendor&emsp;&emsp;</th>
                                                <th>Biaya</th>
                                                <th>Tanggal&emsp;</th>
                                                <th>Deskripsi&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                          foreach($pem as $p){ ?>
                                            <tr>
                                                <td>
                                                    <!-- <?php echo $p['id_pemeliharaan']; ?> -->
                                                    <?php $no=1; echo $no++; ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-outline-info waves-effect waves-light" data-toggle="modal" href="#edit<?php echo $p['id_pemeliharaan']; ?>">Ubah</a>
                                                    <!-- <a href="<?php echo site_url('pemeliharaan/remove/'.$p['id_pemeliharaan']); ?>">Delete</a> -->
                                                </td>
                                                <td>
                                                <?php
                                                    foreach($all_bthp as $bthp)
                                                    {
                                                        if ($bthp['id_inventory'] == $p['id_inventory'])
                                                        echo $bthp['serial_id'];
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    foreach($all_inventory as $inventory)
                                                    {
                                                        if ($inventory['id_inventory'] == $p['id_inventory'])
                                                        echo $inventory['nama'];
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                <?php
                                                    foreach($all_vendor as $vendor)
                                                    {
                                                        if ($vendor['id_vendor'] == $p['id_vendor'])
                                                        echo $vendor['nama'];
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php echo 'Rp' .number_format($p['biaya']); ?>
                                                </td>

                                                <?php $date = explode(" ",$p['tanggal']);$date1 = $date[0]; ?>
                                                <?php $date2 = explode("-",$date1);?>
                                                <td><?php echo $date2[2].'-'.$date2[1].'-'.$date2[0]; ?></td>

                                                <td>
                                                    <?php echo $p['deskripsi']; ?>
                                                </td>

                                            </tr>
                                            <!-- modal menambahkan fungsi  -->
                                            <div class="modal fade" id="edit<?php echo $p['id_pemeliharaan'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-center">
                                                            <h3 class="modal-title w-100 font-weight-bold">Ubah Pemeliharaan</h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body"><div class="row"><div class="col-lg-12">
                                                          <?php echo form_open('transaction/editpemeliharaan/'.$p['id_pemeliharaan']); ?>
                                                          <form class="form-body m-t-40">
                                                          <div class="row">
                                                            <div class="col-md-6">
                                                              <div class="form-group">
                                                                  <label><h6 class="font-weight-bold">Inventory</h6></label>
                                                                  <div class="controls">
                                                                  <select required class="form-control" name="id_inventory">
                                                                  <?php
                                                                  foreach($all_inventory as $inventory)
                                                                  {
                                                                    $selected = ($inventory['id_inventory'] == $p['id_inventory']) ? ' selected="selected"' : "";

                                                                    echo '<option value="'.$inventory['id_inventory'].'" '.$selected.'>'.$inventory['nama'].'</option>';
                                                                  }
                                                                  ?>
                                                                  </select>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group">
                                                                <label><h6 class="font-weight-bold">Vendor</h6></label>
                                                                <div class="controls">
                                                                <select required  class="form-control" name="id_vendor">
                                                                <?php
                                                                foreach($all_vendor as $vendor)
                                                                {
                                                                    $selected = ($vendor['id_vendor'] == $p['id_vendor']) ? ' selected="selected"' : "";

                                                                    echo '<option value="'.$vendor['id_vendor'].'" '.$selected.'>'.$vendor['nama'].'</option>';
                                                                }
                                                                ?>
                                                                </select>
                                                              </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row">
                                                            <div class="col-md-6">
                                                              <div class="form-group m-b-40">
                                                                  <label for="id_kantor"><h6 class="font-weight-bold">Biaya</h6></label>
                                                                  <span class="bar"></span>
                                                                  <div class="controls">
                                                                  <input required type="number" class="form-control" name="biaya" value="<?php echo ($this->input->post('biaya') ? $this->input->post('biaya') : $p['biaya']); ?>" />
                                                                </div>
                                                                <!-- <input type="text" class="form-control" id="id_kantor"> -->
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group m-b-40">
                                                                  <label for="namakantor"><h6 class="font-weight-bold">Tanggal :</h6></label>
                                                                  <span class="bar"></span>
                                                                  <div class="controls">
                                                                  <input required type="date" class="form-control " name="tanggal" value="<?php echo ($this->input->post('tanggal') ? $this->input->post('tanggal') : $p['tanggal']); ?>" />
                                                                </div>
                                                                </div>
                                                            </div>
                                                          </div>
                                                          <div class="row">
                                                            <div class="col-md-8">
                                                              <div class="form-group m-b-40">
                                                                  <label for="deskripso"><h6 class="font-weight-bold">Deskripsi :</h6></label>
                                                                  <textarea type="text" rows="4" class="form-control" name="deskripsi" value="<?php echo ($this->input->post('deskripsi') ? $this->input->post('deskripsi') : $p['deskripsi']); ?>" /><?php echo $p['deskripsi']?></textarea>
                                                                  <span class="text-danger"><?php echo form_error('deskripsi');?></span>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                              <h5 class="text-muted font-weight-bold">Keterangan </h5>
                                                              <p>Isi dengan sejujur-jujurnya yak</p>
                                                              <p>hehehehehehehe</p>
                                                            </div>
                                                          </div></div></div>
                                                        </div>
                                                        <div class="modal-footer d-flex">
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal" aria-label="Close"> Batal </button>
                                                            <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
                                                        </div>
                                                        <?php echo form_close(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php }
                                          }
                                          else{?> <br>
                                            <?php
                                            if($by_kantor == 0){
                                              echo('Tidak ada data pemeliharaan');
                                            }
                                            else {
                                            echo ('Tidak ada data pemeliharaan untuk kantor ');
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
    </div>
