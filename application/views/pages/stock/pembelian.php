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
                <h4 class="text-themecolor">Beli</h4>
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
                                <h4 class="card-title">Data pembelian</h4>
                                <h6 class="card-subtitle">Data table example</h6>
								<!-- modal menambahkan fungsi  -->
								<div class="modal fade" id="ModalTambahKantor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3 class="modal-title w-100 font-weight-bold">Tambah Pembelian</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body mx-3">
                                      <?php echo form_open('stock/addbeli'); ?>
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
                                              <input type="date" class="form-control" name="tanggal_transaksi" value="<?php echo $this->input->post('tanggal_transaksi'); ?>" />
	                                          	<span class="text-danger"><?php echo form_error('tanggal_transaksi');?></span>
                                          </div>
                                          <div class="form-group m-b-40">
                                          <label for="namakantor"><h6 class="font-weight-bold">Total Harga</h6></label>
                                          <span class="bar"></span>
                                          <input type="text" class="form-control" name="total_harga" value="<?php echo $this->input->post('total_harga'); ?>" />
		                                      <span class="text-danger"><?php echo form_error('total_harga');?></span>
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
									<th>Id Beli</th>
									<th>Nama Supplier</th>
									<th>Tanggal Transaksi</th>
									<th>Total Harga</th>
									<th>Deskripsi</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($beli as $b){ ?>
								<tr>
									<td><?php echo $b['id_beli']; ?></td>
                  <td>
                  <?php
                   foreach($all_supplier as $supplier)
                   {
                    if ($supplier['id_supplier'] == $b['id_supplier'])
                     echo $supplier['nama'];
                   }
                   ?>
                  </td>
									<td><?php echo $b['tanggal_transaksi']; ?></td>
									<td><?php echo $b['total_harga']; ?></td>
									<td><?php echo $b['deskripsi']; ?></td>
									<td>
										<a data-toggle="modal" href="#edit<?php echo $b['id_beli']; ?>">Edit</a> |
										<a href="<?php echo site_url('stock/removebeli/'.$b['id_beli']); ?>">Delete</a>
									</td>
								</tr>
                <!-- modal menambahkan fungsi  -->
								<div class="modal fade" id="edit<?php echo $b['id_beli'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3 class="modal-title w-100 font-weight-bold">Edit Pembelian</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body mx-3">
                                      <?php echo form_open('stock/editbeli/'.$b['id_beli']); ?>
                                        <form class="form-body m-t-40">
                                          <div class="form-group m-b-40">
                                          <label for="id_kantor"><h6 class="font-weight-bold">Tanggal Transaksi</h6></label>
                                          <span class="bar"></span>
	                                        	<input type="date" class="form-control" name="tanggal_transaksi" value="<?php echo ($this->input->post('tanggal_transaksi') ? $this->input->post('tanggal_transaksi') : $b['tanggal_transaksi']); ?>" />
                                            <!-- <input type="text" class="form-control" id="id_kantor"> -->
                                          </div>
                                          <div class="form-group m-b-40">
                                              <label for="namakantor"><h6 class="font-weight-bold">Total Harga :</h6></label>
                                              <span class="bar"></span>
                                            	<input type="text" class="form-control" name="total_harga" value="<?php echo ($this->input->post('total_harga') ? $this->input->post('total_harga') : $b['total_harga']); ?>" />
                                          </div>
                                          <div class="form-group m-b-40">
                                          <label for="deskripso"><h6 class="font-weight-bold">Deskripsi :</h6></label>
		                                            <input type="text" class="form-control" name="deskripsi" value="<?php echo ($this->input->post('deskripsi') ? $this->input->post('deskripsi') : $b['deskripsi']); ?>" />
		                                        <span class="text-danger"><?php echo form_error('deskripsi');?></span>
                                          </div>
                                          <div class="form-group">
                                              <label><h6 class="font-weight-bold">Supplier</h6></label>
                                              <select   class="form-control" name="id_supplier">
                                                <option value="">select supplier</option>
                                              <?php
                                              foreach($all_supplier as $supplier)
                                              {
                                                $selected = ($supplier['id_supplier'] == $b['id_supplier']) ? ' selected="selected"' : "";

                                                echo '<option value="'.$supplier['id_supplier'].'" '.$selected.'>'.$supplier['nama'].'</option>';
                                              }
                                              ?>
                                            </select>
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
			</div>
