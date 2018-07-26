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
                <h4 class="text-themecolor">Supplier</h4>
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
                                <h4 class="card-title">Data supplier</h4>
                                <h6 class="card-subtitle">Data table example</h6>
								<!-- modal menambahkan fungsi  -->
                                <div class="modal fade" id="ModalTambahKantor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3 class="modal-title w-100 font-weight-bold">Tambah Supplier</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body mx-3">
                                      <?php echo form_open('supplier/add'); ?>
                                        <form class="floating-labels m-t-40">
                    
                                          <div class="form-group m-b-40">
                                              <label for="id_kantor"><h6 class="font-weight-bold">Nama</h6></label>
                                              <span class="bar"></span>
                                              <input type="text" class="form-control" name="nama" value="<?php echo $this->input->post('nama'); ?>" />
	                                          	<span class="text-danger"><?php echo form_error('nama');?></span>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <label for="id_kantor"><h6 class="font-weight-bold">Alamat</h6></label>
                                              <span class="bar"></span>
                                              <input type="text" class="form-control" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" />
	                                          	<span class="text-danger"><?php echo form_error('alamat');?></span>
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
										<th>No</th>
										<th>Nama</th>
										<th>Alamat</th>
										<th>Actions</th>
									</tr>
									</thead>
									<tbody>
                                    <?php $no=1;
                                     foreach($supplier as $s){ ?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $s['nama']; ?></td>
										<td><?php echo $s['alamat']; ?></td>
										<td>
											<a data-toggle="modal" href="#edit<?php echo $s['id_supplier']; ?>">Edit</a> | 
											<a href="<?php echo site_url('supplier/remove/'.$s['id_supplier']); ?>">Delete</a>
										</td>
									</tr>
                                     <!-- modal menambahkan fungsi  -->
                                     <div class="modal fade" id="edit<?php echo $s['id_supplier'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header text-center">
                                                        <h3 class="modal-title w-100 font-weight-bold">Edit Pembelian</h3>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body mx-3">
                                                    <?php echo form_open('supplier/edit/'.$s['id_supplier']); ?>
                                                        <form class="form-body m-t-40">
                                                        <div class="form-group">
                                                            
                                                        <div class="form-group m-b-40">
                                                        <label for="id_kantor"><h6 class="font-weight-bold">Nama</h6></label>
                                                        <span class="bar"></span>
                                                                <input type="text" class="form-control" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $s['nama']); ?>" />
                                                                <span class="text-danger"><?php echo form_error('nama');?></span>
                                                        </div>
                                                        <div class="form-group m-b-40">
                                                        <label for="id_kantor"><h6 class="font-weight-bold">Alamat</h6></label>
                                                        <span class="bar"></span>
                                                                <input type="text" class="form-control" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $s['alamat']); ?>" />
                                                                <span class="text-danger"><?php echo form_error('alamat');?></span>
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