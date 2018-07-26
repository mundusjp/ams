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
                                <h4 class="card-title">Data Kebutuhan</h4>
                                <h6 class="card-subtitle">Data table example</h6>
                                <?php echo form_open('kebutuhan/add'); ?>
                                <!--        -->
                                <!-- Modals -->
                                <!--        -->
                                <div class="modal fade" id="ModalTambahKebutuhan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3 class="modal-title w-100 font-weight-bold">Tambah Kebutuhan</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body mx-3">
                                        <form class="floating-labels m-t-40">
                                          <div class="form-group m-b-40">
                                              <label><h6 class="font-weight-bold">Nama Divisi</h6></label>
                                              <select name="id_divisi" class="form-control" >
                                              <option value="">select divisi</option>
			                                    <?php 
			                                    foreach($all_divisi as $divisi)
			                                    {
				                                    $selected = ($divisi['id_divisi'] == $this->input->post('id_divisi')) ? ' selected="selected"' : "";
				                                    echo '<option value="'.$divisi['id_divisi'].'" '.$selected.'>'.$divisi['nama'].'</option>';
			                                    } 
			                                    ?>
                                              </select>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <label><h6 class="font-weight-bold">Nama Barang</h6></label>
                                              <input type="text" class="form-control" name="nama_barang" value="<?php echo $this->input->post('nama_barang'); ?>" />
                                              <span class="bar"></span>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <label><h6 class="font-weight-bold">Jumlah</h6></label>
                                              <input type="text" class="form-control" name="jumlah" value="<?php echo $this->input->post('jumlah'); ?>" />
                                              <span class="bar"></span>
                                          </div>
                                        </div>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Tambah</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <?php echo form_close(); ?>


                                <!--        -->
                                <!-- Button -->
                                <!--        -->
                                <div class="row">
                                  <div class="col-3">
                                    <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#ModalTambahKebutuhan" > add </button>
                                  </div>
                                </div>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
										<tr>
										<th>Nomor</th>
										<th>Nama Barang</th>
										<th>Jumlah</th>
										<th>Divisi</th>
                    <th>User</th>
                    <th>Action</th>
									</tr>
									</thead>
									<tbody>
                                    <?php $no = 1;
                                    foreach($kebutuhan as $k){ ?>
									<tr>
                                        <td><?php echo $no; $no++; ?></td>
										<td><?php echo $k['nama_barang']; ?></td>
										<td><?php echo $k['jumlah']; ?></td>
                                        <td><?php
                                        foreach($all_divisi as $d){
                                            if($d['id_divisi']==$k['id_divisi']) {echo $d['nama'];}
                                        }?></td>
                                        <td><?php
                                        foreach($all_user as $u){
                                            if($u['id_user']==$k['id_user']) {echo $u['nama'];}
                                        }?></td>
										<td>
                                            <a data-toggle="modal" href="#edit<?php echo $k['id_kebutuhan']; ?>">Edit</a>
											                      <a href="<?php echo site_url('kebutuhan/remove/'.$k['id_kebutuhan']); ?>">Delete</a>
										</td>
									</tr>
                  
                                <div class="modal fade" id="edit<?php echo $k['id_kebutuhan'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3 class="modal-title w-100 font-weight-bold">Edit Kebutuhan</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body mx-3">
                                      <?php echo form_open('kebutuhan/edit/'.$k['id_kebutuhan']); ?>
                                        <form class="floating-labels m-t-40">
                                          <div class="form-group m-b-40">
                                              <label><h6 class="font-weight-bold">Nama Divisi</h6></label>
                                              <select name="id_divisi" class="form-control" >
                                              <option value="">select divisi</option>
			                                    <?php 
			                                        foreach($all_divisi as $divisi)
			                                        {
				                                        $selected = ($divisi['id_divisi'] == $k['id_divisi']) ? ' selected="selected"' : "";
				                                        echo '<option value="'.$divisi['id_divisi'].'" '.$selected.'>'.$divisi['nama'].'</option>';
			                                        } 
			                                    ?>
                                              </select>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <label><h6 class="font-weight-bold">Nama Barang</h6></label>
                                              <input type="text" class="form-control" name="nama_barang" value="<?php echo ($this->input->post('nama_barang') ? $this->input->post('nama_barang') : $k['nama_barang']); ?>" />
                                              <span class="bar"></span>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <label><h6 class="font-weight-bold">Jumlah</h6></label>
                                              <input type="text" class="form-control" name="jumlah" value="<?php echo ($this->input->post('jumlah') ? $this->input->post('jumlah') : $k['jumlah']); ?>" />
                                              <span class="bar"></span>
                                          </div>
                                        </div>
                                        
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Ubah</button>
                                        <?php echo form_close(); ?>
                                      </div>
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
