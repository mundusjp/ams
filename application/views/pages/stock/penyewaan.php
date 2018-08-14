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
                                <h4 class="card-title">Data penyewaan</h4>
                                <h6 class="card-subtitle">Data table example</h6>
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
                                        <?php echo form_open('stock/addsewa'); ?>
                                        <form class="floating-labels m-t-40">
                                        <div class="row">
                                          <div class="col-md-3">
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
                                          </div>
                                          <div class="col-md-3">
                                            <div class="form-group m-b-40">
                                              <label for="namakantor"><h6 class="font-weight-bold">No Nota</h6></label>
                                              <span class="bar"></span>
                                              <input type="text" class="form-control" name="no_nota" value="<?php echo $this->input->post('no_nota'); ?>" />
      		                                    <span class="text-danger"><?php echo form_error('no_nota');?></span>
                                            </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="form-group m-b-40">
                                              <label for="namakantor"><h6 class="font-weight-bold">Biaya</h6></label>
                                              <span class="bar"></span>
                                              <input type="text" class="form-control" name="biaya" value="<?php echo $this->input->post('biaya'); ?>" />
    		                                      <span class="text-danger"><?php echo form_error('biaya');?></span>
                                            </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="form-group m-b-40">
                                                <label for="id_kantor"><h6 class="font-weight-bold">Tanggal Transaksi</h6></label>
                                                <span class="bar"></span>
                                                <input type="text" class="form-control mydatepicker" name="tanggal_transaksi" value="<?php echo $this->input->post('tanggal_transaksi'); ?>" />
  	                                          	<span class="text-danger"><?php echo form_error('tanggal_transaksi');?></span>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-8">
                                            <label for="id_kantor"><h6 class="font-weight-bold">Periode Sewa</h6></label>
                                            <div class="form-group m-b-40">
                                                <div class="input-daterange input-group" id="date-range">
                                                  <span class="bar"></span>
                                                  <input type="text" class="form-control mydatepicker" name="periode_start" value="<?php echo $this->input->post('periode_start'); ?>" />
    	                                          	<span class="text-danger"><?php echo form_error('periode_start');?></span>
                                                  <div class="input-group-append">
                                                    <span class="input-group-text b-0 bg-info text-white">s.d.</span>
                                                  </div>
                                                  <span class="bar"></span>
                                                  <input type="text" class="form-control mydatepicker" name="periode_end" value="<?php echo $this->input->post('periode_end'); ?>" />
    	                                          	<span class="text-danger"><?php echo form_error('periode_end');?></span>
                                              </div>
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
                                <?php $no=1; foreach($sewa as $s){ ?>
                                <div class="modal fade bs-example-modal-lg" id="edit<?php echo $s['id_transaksi'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h3 class="modal-title w-100 font-weight-bold">Edit Pembelian</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body"><div class="row"><div class="col-lg-12">
                                    <?php echo form_open('stock/editsewa/'.$s['id_transaksi']); ?>
                                    <form class="form-body m-b-40">
                                      <div class="row">
                                        <div class="col-md-3">
                                          <div class="form-group">
                                              <label><h6 class="font-weight-bold">Vendor</h6></label>
                                              <select   class="form-control" name="id_vendor">
                                                  <option value="">select vendor</option>
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
                                        <div class="col-md-3">
                                          <div class="form-group m-b-40">
                                            <label for="namakantor"><h6 class="font-weight-bold">No Nota</h6></label>
                                            <span class="bar"></span>
                                            <input type="text" class="form-control" name="no_nota" value="<?php echo ($this->input->post('no_nota') ? $this->input->post('no_nota') : $s['no_nota']); ?>" />
                                            <span class="text-danger"><?php echo form_error('no_nota');?></span>
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group m-b-40">
                                            <label for="namakantor"><h6 class="font-weight-bold">Biaya</h6></label>
                                            <span class="bar"></span>
                                            <input type="text" class="form-control" name="biaya" value="<?php echo ($this->input->post('biaya') ? $this->input->post('biaya') : $s['biaya']); ?>" />
                                            <span class="text-danger"><?php echo form_error('biaya');?></span>
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group m-b-40">
                                              <label for="id_kantor"><h6 class="font-weight-bold">Tanggal Transaksi</h6></label>
                                              <span class="bar"></span>
                                              <input type="text" class="form-control mydatepicker"  name="tanggal_transaksi" value="<?php echo ($this->input->post('tanggal_transaksi') ? $this->input->post('tanggal_transaksi') : $s['tanggal_transaksi']); ?>" />
                                              <span class="text-danger"><?php echo form_error('tanggal_transaksi');?></span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-8">
                                          <label for="id_kantor"><h6 class="font-weight-bold">Periode Sewa</h6></label>
                                          <div class="form-group m-b-40">
                                              <div class="input-daterange input-group" id="date-range">
                                                <span class="bar"></span>
                                                <input type="text" class="form-control mydatepicker"  name="periode_start" value="<?php echo ($this->input->post('periode_start') ? $this->input->post('periode_start') : $s['periode_start']); ?>" />
                                                <span class="text-danger mydatepicker"><?php echo form_error('periode_start');?></span>
                                                <div class="input-group-append">
                                                  <span class="input-group-text b-0 bg-info text-white">s.d.</span>
                                                </div>
                                                <span class="bar"></span>
                                                <input type="text" class="form-control mydatepicker" name="periode_end" value="<?php echo ($this->input->post('periode_end') ? $this->input->post('periode_end') : $s['periode_end']); ?>" />
                                                <span class="text-danger"><?php echo form_error('periode_end');?></span>
                                            </div>
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
                                    <button type="button" class="btn btn-info waaves-effect waves-light" data-toggle="modal" data-target="#ModalTambahKantor" > add </button>
                                  </div>
                                </div>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
										<tr>
											<th>No.</th>
                                            <th>No Nota</th>
											<th>Nama Vendor</th>
                                            <th>Biaya</th>
                                            <th>Tanggal Transaksi</th>
											<th>Periode Start</th>
                                            <th>Periode End</th>
											<th>Deskripsi</th>
											<th>Actions</th>
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
											                      <td><?php echo $s['biaya']; ?></td>
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
												                        <a class="text-info" data-toggle="modal" href="#edit<?php echo $s['id_transaksi']; ?>">Edit</a> |
                                                <a href="<?php echo site_url('inventory/detail_sewa/'.$s['id_transaksi']); ?>">Detail</a>
												                        <!-- <a href="<?php echo site_url('stock/removesewa/'.$s['id_transaksi']); ?>">Delete</a> -->
											                      </td>
										                      </tr>

										<?php } ?>
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
