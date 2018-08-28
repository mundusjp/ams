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
                <h4 class="text-themecolor">Sewa</h4>
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
                              <h4 class="card-title">Data Penyewaan</h4>
                               <!-- <h6 class="card-subtitle">Data table example</h6> -->
                               <?php if ($user['status'] == 1){
                                 echo form_open("transaction/penyewaan");?>
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
								<!-- modal menambahkan fungsi  -->
                                <div class="modal fade bs-example-modal-lg" id="ModalTambahKantor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3 class="modal-title w-100 font-weight-bold">Tambah Penyewaan</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body"><div class="row"><div class="col-lg-12">
                                        <?php echo form_open('transaction/addsewa'); ?>
                                        <form class="floating-labels m-t-40">
                                        <div class="row">
                                          <div class="col-md-3">
                                            <div class="form-group">
                                                  <label><h6 class="font-weight-bold">Vendor :</h6></label>
                                                  <div class="controls">
                                                  <select required class="form-control" name="id_vendor">
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
                                          </div>
                                          <div class="col-md-3">
                                            <div class="form-group m-b-40">
                                              <label for="namakantor"><h6 class="font-weight-bold">No. Nota</h6></label>
                                              <span class="bar"></span>
                                              <div class="controls">
                                              <input required type="text" class="form-control" name="no_nota" value="<?php echo $this->input->post('no_nota'); ?>" />
      		                                    <span class="text-danger"><?php echo form_error('no_nota');?></span>
                                            </div>
                                            </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="form-group m-b-40">
                                              <label for="namakantor"><h6 class="font-weight-bold">Biaya</h6></label>
                                              <span class="bar"></span>
                                              <div class="controls">
                                              <input required type="number" class="form-control" name="biaya" value="<?php echo $this->input->post('biaya'); ?>" />
                                            </div>
                                              <span class="text-danger"><?php echo form_error('biaya');?></span>
                                            </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="form-group m-b-40">
                                                <label for="id_kantor"><h6 class="font-weight-bold">Tanggal Transaksi</h6></label>
                                                <span class="bar"></span>
                                                <div class="controls">
                                                 <input required type="date" class="form-control" name="tanggal_transaksi" value="<?php echo $this->input->post('tanggal_transaksi'); ?>" />
                                               </div>
                                                <span class="text-danger"><?php echo form_error('tanggal_transaksi');?></span>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <?php
                                          $status = $this->session->userdata('level');
                                          if($status == 1){?>
                                          <div class="col-md-4">
                                            <div class="form-group m-b-40">
                                                <label for="id_divisi"><h6 class="font-weight-bold">Diadakan Oleh:</h6></label>
                                                <div class="controls">
                                                <select required name="id_kantor" class="form-control">
                                                <option value="">Pilih Kantor</option>
                                                 <?php
                                                  foreach($all_kantor as $kan)
                                                  {
                                                    $selected = ($kan['id_kantor'] == $this->input->post('id_kantor')) ? ' selected="selected"' : "";
                                                    echo '<option value="'.$kan['id_kantor'].'" '.$selected.'>'.$kan['nama_kantor'].'</option>';
                                                  }
                                                ?>
                                                </select>
                                              </div>
                                                <span class="bar"></span>
                                            </div>
                                          </div><?php }?>
                                          <div class="col-md-8">
                                            <label for="id_kantor"><h6 class="font-weight-bold">Periode Sewa</h6></label>
                                            <div class="input-group form-group m-b-40">
                                                  <span class="bar"></span>
                                                  <div class="controls">
                                                   <input required type="date" class="form-control" name="periode_start" value="<?php echo $this->input->post('periode_start'); ?>" />
                                                 </div>
                                                  <span class="text-danger"><?php echo form_error('periode_start');?></span>
                                                  <div class="input-group-append">
                                                    <span class="input-group-text b-0 bg-info text-white">s.d.</span>
                                                  </div>
                                                  <span class="bar"></span>
                                                  <div class="controls">
                                                  <input required type="date" class="form-control" name="periode_end" value="<?php echo $this->input->post('periode_end'); ?>" />
                                                </div>
                                                  <span class="text-danger"><?php echo form_error('periode_end');?></span>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group m-b-40">
                                              <label for="alamatkantor"><h6 class="font-weight-bold">Deskripsi</h6></label>
                                              <span class="bar"></span>
                                              <textarea rows="4" class="form-control" type="text" name="deskripsi" value="<?php echo $this->input->post('deskripsi'); ?>" ></textarea>
  		                                          <span class="text-danger"><?php echo form_error('deskripsi');?></span>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <h6 class="text-muted font-weight-bold">Keterangan</h6>
                                            <p>1. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <p>2. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                          </div>
                                        </div></div></div>
                                        </div>

                                      <div class="modal-footer d-flex">
                                        <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal" aria-label="Close"> Batal </button>
                                        <button class="btn btn-info waves-effect waves-light" type="submit">Tambah</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <?php echo form_close(); ?>


                                <?php
                               if($user['status']==1){
                                 $sewa=$penyewaan;
                               }
                               else if($user['status']==2){
                                 $sewa=$penyewaan2;
                               }
                               $no=1; foreach($sewa as $s){ ?>
                                <div class="modal fade bs-example-modal-lg" id="edit<?php echo $s['id_transaksi'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h3 class="modal-title w-100 font-weight-bold">Ubah Penyewaan</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body"><div class="row"><div class="col-lg-12">
                                    <?php echo form_open('transaction/editsewa/'.$s['id_transaksi']); ?>
                                    <form class="form-body m-b-40">
                                      <div class="row">
                                        <div class="col-md-3">
                                          <div class="form-group">
                                              <label><h6 class="font-weight-bold">Vendor</h6></label>
                                              <div class="controls">
                                              <select  required class="form-control" name="id_vendor">
                                              <?php
                                              foreach($all_vendor as $vendor)
                                              {
                                                  $selected = ($vendor['id_vendor'] == $s['id_vendor']) ? ' selected="selected"' : "";
                                                  echo '<option value="'.$vendor['id_vendor'].'" '.$selected.'>'.$vendor['nama'].'</option>';
                                              }
                                              ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group m-b-40">
                                            <label for="namakantor"><h6 class="font-weight-bold">No. Nota</h6></label>
                                            <span class="bar"></span>
                                            <div class="controls">
                                            <input required type="text" class="form-control" name="no_nota" value="<?php echo ($this->input->post('no_nota') ? $this->input->post('no_nota') : $s['no_nota']); ?>" />
                                          </div>
                                            <span class="text-danger"><?php echo form_error('no_nota');?></span>
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group m-b-40">
                                            <label for="namakantor"><h6 class="font-weight-bold">Biaya</h6></label>
                                            <span class="bar"></span>
                                            <div class="controls">
                                            <input required type="number" class="form-control" name="biaya" value="<?php echo ($this->input->post('biaya') ? $this->input->post('biaya') : $s['biaya']); ?>" />
                                          </div>
                                            <span class="text-danger"><?php echo form_error('biaya');?></span>
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group m-b-40">
                                              <label for="id_kantor"><h6 class="font-weight-bold">Tanggal Transaksi</h6></label>
                                              <span class="bar"></span>
                                              <div class="controls">
                                              <input required type="date" class="form-control"  name="tanggal_transaksi" value="<?php echo ($this->input->post('tanggal_transaksi') ? $this->input->post('tanggal_transaksi') : $s['tanggal_transaksi']); ?>" />
                                            </div>
                                              <span class="text-danger"><?php echo form_error('tanggal_transaksi');?></span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <?php
                                        $status = $this->session->userdata('level');
                                        if($status == 1){?>
                                        <div class="col-md-4">
                                          <div class="form-group m-b-40">
                                              <label for="id_divisi"><h6 class="font-weight-bold">Diadakan Oleh:</h6></label>
                                              <div class="controls">
                                              <select required name="id_kantor" class="form-control">
                                               <?php
                                                foreach($all_kantor as $kan)
                                                {
                                                  $selected = ($kan['id_kantor'] == $s['id_kantor']) ? ' selected="selected"' : "";
                                                  echo '<option value="'.$kan['id_kantor'].'" '.$selected.'>'.$kan['nama_kantor'].'</option>';
                                                }
                                              ?>
                                              </select>
                                            </div>
                                              <span class="bar"></span>
                                          </div>
                                        </div><?php }?>
                                        <div class="col-md-8">
                                          <label for="id_kantor"><h6 class="font-weight-bold">Periode Sewa</h6></label>
                                          <div class="input-group form-group m-b-40">
                                                <span class="bar"></span>
                                                <div class="controls">
                                                <input required type="date" class="form-control"  name="periode_start" value="<?php echo ($this->input->post('periode_start') ? $this->input->post('periode_start') : $s['periode_start']); ?>" />
                                              </div>
                                                  <span class="text-danger"><?php echo form_error('periode_start');?></span>
                                                <div class="input-group-append">
                                                  <span class="input-group-text b-0 bg-info text-white">s.d.</span>
                                                </div>
                                                <span class="bar"></span>
                                              <div class="controls">
                                              <input required type="date" class="form-control" name="periode_end" value="<?php echo ($this->input->post('periode_end') ? $this->input->post('periode_end') : $s['periode_end']); ?>" />
                                            </div>
                                                <span class="text-danger"><?php echo form_error('periode_end');?></span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="form-group m-b-40">
                                            <label for="alamatkantor"><h6 class="font-weight-bold">Deskripsi</h6></label>
                                            <span class="bar"></span>
                                            <textarea rows="4" class="form-control" type="text" name="deskripsi" value="<?php echo ($this->input->post('deskripsi') ? $this->input->post('deskripsi') : $s['deskripsi']); ?>" ><?php echo $s['deskripsi']?></textarea>
                                              <span class="text-danger"><?php echo form_error('deskripsi');?></span>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <h6 class="text-muted font-weight-bold">Keterangan</h6>
                                          <p>1. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          <p>2. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                        </div>
                                      </div></div></div>
                                      </div>

                                    <div class="modal-footer d-flex">
                                      <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal" aria-label="Close"> Batal </button>
                                      <button class="btn btn-info waves-effect waves-light" type="submit">Simpan</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <?php echo form_close();
                              };
                              ?>

								<!-- button add -->
                                <div class="row">
                                  <div class="col-3">
                                  <button type="button" class="btn btn-info waaves-effect waves-light" data-toggle="modal" data-target="#ModalTambahKantor" > Tambah </button>
                                  </div>
                                </div>
                                <?php
                   if (count($sewa)){?>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
										<tr>
											<th>No.</th>
                                            <th>No.Nota&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
											<th>Nama Vendor&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
                         <th>Nama Kantor&emsp;&emsp;</th>
                                            <th>Biaya</th>
                                            <th>Tanggal Transaksi</th>
											<th>Periode_Start</th>
                                            <th>Periode_End</th>
											<th>Deskripsi&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</th>
											<th>Tindakan&emsp;&emsp;</th>
										</tr>
										</thead>
										<tbody>
										<?php $no=1; foreach($sewa as $s){ ?>
										<tr>
											<td>
                                                <?php echo $no++; ?>
                                            </td>
                                            <td>
                                                <?php echo $s['no_nota']; ?>
                                            </td>
											<td><?php
                                            foreach($all_vendor as $vendor)
                                            {
                                                if ($vendor['id_vendor'] == $s['id_vendor'])
                                                echo $vendor['nama'];
                                            }
                                            ?>
                                            </td>
                                            <td><?php
                                           foreach($all_kantor as $kan){
                                               if($kan['id_kantor']==$s['id_kantor']) {echo $kan['nama_kantor'];}
                                           }?></td>
											                      <td><?php echo 'Rp' . number_format($s['biaya']); ?></td>
                                            <?php $date = explode(" ",$s['tanggal_transaksi']);$date1 = $date[0]; ?>
                                            <?php $date2 = explode("-",$date1);?>
                                            <td><?php echo $date2[2].'-'.$date2[1].'-'.$date2[0]; ?></td>
                                            <?php $date = explode(" ",$s['periode_start']);$date1 = $date[0]; ?>
                                            <?php $date2 = explode("-",$date1);?>
                                            <td><?php echo $date2[2].'-'.$date2[1].'-'.$date2[0]; ?></td>
                                            <?php $date = explode(" ",$s['periode_end']);$date1 = $date[0]; ?>
                                            <?php $date2 = explode("-",$date1);?>
                                            <td><?php echo $date2[2].'-'.$date2[1].'-'.$date2[0]; ?></td>
                                            <td><?php echo $s['deskripsi']; ?></td>
                                            <td>
												                        <a class="text-info waves-effect waves-light" data-toggle="modal" href="#edit<?php echo $s['id_transaksi']; ?>">&nbsp;&nbsp;Ubah</a>&nbsp;|
                                                <a class="text-warning waves-effect waves-light" href="<?php echo site_url('inventory/detail_sewa/'.$s['id_transaksi']); ?>">&nbsp;Detail</a>
												                        <!-- <a href="<?php echo site_url('transaction/removesewa/'.$s['id_transaksi']); ?>">Delete</a> -->
											                      </td>
										                      </tr>

                                        <?php } }
                                         else{?> <br>
                                           <?php
                                           if($by_kantor == 0){
                                             echo('Tidak ada data penyewaan');
                                           }
                                           else {
                                           echo ('Tidak ada data penyewaan untuk kantor ');
                                             foreach($all_kantor as $kan){
                                               if($kan['id_kantor']==$by_kantor) echo $kan['nama_kantor'];
                                             }
                                           }?>
                                           <br>
                                           <?php
                                           }?>
										</tbody>
									</table>
                                    <!--  -->
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
			</div>
