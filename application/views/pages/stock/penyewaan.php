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
                                <div class="modal fade" id="ModalTambahKantor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3 class="modal-title w-100 font-weight-bold">Tambah Penyewaan</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body mx-3">
                                      <?php echo form_open('stock/addsewa'); ?>
                                        <form class="floating-labels m-t-40">
                                        <div class="form-group">
                                              <label><h6 class="font-weight-bold">Supplier :</h6></label>
                                              <select class="form-control" name="id_supplier">
                                              <option value="">select supplier</option>
                                              <?php
                                              foreach($all_supplier as $supplier)
                                              {
                                                $selected = ($supplier['id_supplier'] == $this->input->post('id_supplier')) ? ' selected="selected"' : "";
                                                echo '<option value="'.$supplier['id_supplier'].'" '.$selected.'>'.$supplier['nama'].'</option>';
                                              }
                                              ?>
                                            </select>
                                            </div>
                                          <div class="form-group m-b-40">
                                              <label for="id_kantor"><h6 class="font-weight-bold">Tanggal Transaksi</h6></label>
                                              <span class="bar"></span>
                                              <input type="text" class="form-control" name="tanggal_transaksi" value="<?php echo $this->input->post('tanggal_transaksi'); ?>" />
	                                          	<span class="text-danger"><?php echo form_error('tanggal_transaksi');?></span>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <label for="id_kantor"><h6 class="font-weight-bold">Periode Start</h6></label>
                                              <span class="bar"></span>
                                              <input type="text" class="form-control" name="periode_start" value="<?php echo $this->input->post('periode_start'); ?>" />
	                                          	<span class="text-danger"><?php echo form_error('periode_start');?></span>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <label for="id_kantor"><h6 class="font-weight-bold">Periode End</h6></label>
                                              <span class="bar"></span>
                                              <input type="text" class="form-control" name="periode_end" value="<?php echo $this->input->post('periode_end'); ?>" />
	                                          	<span class="text-danger"><?php echo form_error('periode_end');?></span>
                                          </div>
                                          <div class="form-group m-b-40">
                                          <label for="namakantor"><h6 class="font-weight-bold">Biaya</h6></label>
                                          <span class="bar"></span>
                                          <input type="text" class="form-control" name="biaya" value="<?php echo $this->input->post('biaya'); ?>" />
		                                      <span class="text-danger"><?php echo form_error('biaya');?></span>
                                          </div>

                                          <div class="form-group m-b-40">
                                          <label for="alamatkantor"><h6 class="font-weight-bold">Deskripsi</h6></label>
                                          <span class="bar"></span>
                                              <textarea rows="4" class="form-control" type="text" name="deskripsi" value="<?php echo $this->input->post('deskripsi'); ?>" ></textarea>
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
											<th>Nama Supplier</th>
											<th>Tanggal Transaksi</th>
											<th>Periode Start</th>
											<th>Periode End</th>
											<th>Biaya</th>
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
											<td><?php
                                            foreach($all_supplier as $supplier)
                                            {
                                                if ($supplier['id_supplier'] == $s['id_supplier'])
                                                echo $supplier['nama'];
                                            }
                                            ?>
                                            </td>
											<td><?php echo $s['tanggal_transaksi']; ?></td>
											<td><?php echo $s['periode_start']; ?></td>
											<td><?php echo $s['periode_end']; ?></td>
											<td><?php echo $s['biaya']; ?></td>
											<td><?php echo $s['deskripsi']; ?></td>
											<td>
												<a data-toggle="modal" href="#edit<?php echo $s['id_sewa']; ?>">Edit</a> |
												<a href="<?php echo site_url('stock/removesewa/'.$s['id_sewa']); ?>">Delete</a>
											</td>
										</tr>
                                                        <!-- modal menambahkan fungsi  -->
                                                <div class="modal fade" id="edit<?php echo $s['id_sewa'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header text-center">
                                                        <h3 class="modal-title w-100 font-weight-bold">Edit Pembelian</h3>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body mx-3">
                                                    <?php echo form_open('stock/editsewa/'.$s['id_sewa']); ?>
                                                        <form class="form-body m-t-40">
                                                        <div class="form-group">
                                                            <label><h6 class="font-weight-bold">Supplier</h6></label>
                                                            <select   class="form-control" name="id_supplier">
                                                                <option value="">select supplier</option>
                                                            <?php
                                                            foreach($all_supplier as $supplier)
                                                            {
                                                                $selected = ($supplier['id_supplier'] == $s['id_supplier']) ? ' selected="selected"' : "";
                                                                echo '<option value="'.$supplier['id_supplier'].'" '.$selected.'>'.$supplier['nama'].'</option>';
                                                            }
                                                            ?>
                                                            </select>
                                                            </div>

                                                        <div class="form-group m-b-40">
                                                        <label for="id_kantor"><h6 class="font-weight-bold">Tanggal Transaksi</h6></label>
                                                        <span class="bar"></span>
                                                                <input type="text" class="form-control" name="tanggal_transaksi" value="<?php echo ($this->input->post('tanggal_transaksi') ? $this->input->post('tanggal_transaksi') : $s['tanggal_transaksi']); ?>" />
                                                                <span class="text-danger"><?php echo form_error('tanggal_transaksi');?></span>
                                                        </div>
                                                        <div class="form-group m-b-40">
                                                        <label for="id_kantor"><h6 class="font-weight-bold">Periode Start</h6></label>
                                                        <span class="bar"></span>
                                                                <input type="text" class="form-control" name="periode_start" value="<?php echo ($this->input->post('periode_start') ? $this->input->post('periode_start') : $s['periode_start']); ?>" />
                                                                <span class="text-danger"><?php echo form_error('periode_start');?></span>
                                                        </div>
                                                        <div class="form-group m-b-40">
                                                        <label for="id_kantor"><h6 class="font-weight-bold">Periode End</h6></label>
                                                        <span class="bar"></span>
                                                                <input type="text" class="form-control" name="periode_end" value="<?php echo ($this->input->post('periode_end') ? $this->input->post('periode_end') : $s['periode_end']); ?>" />
                                                                <span class="text-danger"><?php echo form_error('periode_end');?></span>
                                                        </div>
                                                        <div class="form-group m-b-40">
                                                            <label for="namakantor"><h6 class="font-weight-bold">Biaya</h6></label>
                                                            <span class="bar"></span>
                                                                <input type="text" class="form-control" name="biaya" value="<?php echo ($this->input->post('biaya') ? $this->input->post('biaya') : $s['biaya']); ?>" />
                                                                <span class="text-danger"><?php echo form_error('biaya');?></span>
                                                        </div>
                                                        <div class="form-group m-b-40">
                                                        <label for="deskripso"><h6 class="font-weight-bold">Deskripsi :</h6></label>
                                                                    <input type="text" class="form-control" name="deskripsi" value="<?php echo ($this->input->post('deskripsi') ? $this->input->post('deskripsi') : $s['deskripsi']); ?>" />
                                                                <span class="text-danger"><?php echo form_error('deskripsi');?></span>
                                                        </div>
                                                        </div>
                                                        <div class="modal-footer d-flex justify-content-center">
                                                        <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                                                    </div>
                                                        <?php echo form_close(); ?>

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
			</div>`
