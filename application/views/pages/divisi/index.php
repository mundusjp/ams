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
                <h4 class="text-themecolor">Divisi</h4>
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
                                <h4 class="card-title">Data divisi</h4>
                                <h6 class="card-subtitle">Data table example</h6>
                              <?php echo form_open('divisi/add'); ?>
                                <div class="modal fade" id="ModalTambahDivisi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3 class="modal-title w-100 font-weight-bold">Tambah Divisi</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body mx-3">
                                        <form class="floating-labels m-t-40">
                                          <div class="form-group m-b-40">
                                              <label for="namakantor"><h6 class="font-weight-bold">Nama Divisi </h6></label>
                                              <input type="text" class="form-control" name="nama" value="<?php echo $this->input->post('nama'); ?>" />
                                              <span class="bar"></span>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <span class="bar"></span>
                                              <label><h6 class="font-weight-bold">Nama Kantor</h6></label>
                                              <select name="id_kantor" class="form-control">
                                          			<option value="">Pilih Kantor</option>
                                          			<?php
                                          			foreach($all_kantor as $kantor)
                                          			{
                                          				$selected = ($kantor['id_kantor'] == $this->input->post('id_kantor')) ? ' selected="selected"' : "";

                                          				echo '<option value="'.$kantor['id_kantor'].'" '.$selected.'>'.$kantor['nama'].'</option>';
                                          			}
                                          			?>
                                          		</select>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <label><h6 class="font-weight-bold">Gedung Kantor</h6></label>
                                              <input type="text" class="form-control" name="gedung" value="<?php echo $this->input->post('gedung'); ?>" />
                                              <!-- <textarea rows="4" type="text" class="form-control" id="alamatkantor"></textarea> -->
                                              <span class="bar"></span>
                                          </div>
                                          <div class="form-group">
                                              <label><h6 class="font-weight-bold">Lantai Kantor</h6></label>
                                              <select name="lantai" class="form-control">
                                                  <option value="1">1</option>
                                                    <?php $selected = (1 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                                  <option value="2">2</option>
                                                    <?php $selected = (2 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                                  <option value="3">3</option>
                                                    <?php $selected = (3 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                                  <option value="4">4</option>
                                                    <?php $selected = (4 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                                  <option value="5">5</option>
                                                    <?php $selected = (5 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                                  <option value="6">6</option>
                                                    <?php $selected = (6 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                                  <option value="7">7</option>
                                                    <?php $selected = (7 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                                  <option value="8">8</option>
                                                    <?php $selected = (8 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                                  <option value="9">9</option>
                                                    <?php $selected = (9 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                                  <option value="10">10</option>
                                                    <?php $selected = (10 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                                  <option value="11">11</option>
                                                    <?php $selected = (11 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                                  <option value="12">12</option>
                                                    <?php $selected = (12 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                              </select>
                                            </div>
                                        </div>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Tambah</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              <?php echo form_close();
                                    // echo form_open('divisi/edit/'.$divisi['id_divisi']); ?>
                                <div class="modal fade" id="ModalEditDivisi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3 class="modal-title w-100 font-weight-bold">Edit Divisi</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body mx-3">
                                        <form class="floating-labels m-t-40">
                                          <div class="form-group m-b-40">
                                              <label for="namakantor"><h6 class="font-weight-bold">Nama Divisi </h6></label>
                                              <input type="text" class="form-control" name="nama" value="<?php echo $this->input->post('nama'); ?>" />
                                              <span class="bar"></span>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <span class="bar"></span>
                                              <label><h6 class="font-weight-bold">Nama Kantor</h6></label>
                                              <select name="id_kantor" class="form-control">
                                          			<option value="">Pilih Kantor</option>
                                          			<?php
                                          			foreach($all_kantor as $kantor)
                                          			{
                                          				$selected = ($kantor['id_kantor'] == $this->input->post('id_kantor')) ? ' selected="selected"' : "";

                                          				echo '<option value="'.$kantor['id_kantor'].'" '.$selected.'>'.$kantor['nama'].'</option>';
                                          			}
                                          			?>
                                          		</select>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <label><h6 class="font-weight-bold">Gedung Kantor</h6></label>
                                              <input type="text" class="form-control" name="gedung" value="<?php echo $this->input->post('gedung'); ?>" />
                                              <!-- <textarea rows="4" type="text" class="form-control" id="alamatkantor"></textarea> -->
                                              <span class="bar"></span>
                                          </div>
                                          <div class="form-group">
                                              <label><h6 class="font-weight-bold">Lantai Kantor</h6></label>
                                              <select name="lantai" class="form-control">
                                                  <option value="1">1</option>
                                                    <?php $selected = (1 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                                  <option value="2">2</option>
                                                    <?php $selected = (2 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                                  <option value="3">3</option>
                                                    <?php $selected = (3 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                                  <option value="4">4</option>
                                                    <?php $selected = (4 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                                  <option value="5">5</option>
                                                    <?php $selected = (5 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                                  <option value="6">6</option>
                                                    <?php $selected = (6 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                                  <option value="7">7</option>
                                                    <?php $selected = (7 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                                  <option value="8">8</option>
                                                    <?php $selected = (8 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                                  <option value="9">9</option>
                                                    <?php $selected = (9 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                                  <option value="10">10</option>
                                                    <?php $selected = (10 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                                  <option value="11">11</option>
                                                    <?php $selected = (11 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                                  <option value="12">12</option>
                                                    <?php $selected = (12 == $this->input->post('lantai')) ? ' selected="selected"' : ""; ?>
                                              </select>
                                            </div>
                                        </div>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button class="btn btn-info waves-effect waves-light">Tambah</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-3">
                                    <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#ModalTambahDivisi" > add </button>
                                  </div>
                                </div>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
								<tr>
									<th>No.</th>
                  <th>Nama Divisi</th>
									<th>Nama Kantor</th>
									<th>Gedung</th>
									<th>Lantai</th>
									<th>Tindakan</th>
								</tr>
								</thead>
																<tbody>
                <?php $no = 1;
								      foreach($divisi as $d){ ?>
								<tr>
									<td><?php echo $no; $no++; ?></td>
                  <td><?php echo $d['nama']; ?></td>
									<td><?php
                      foreach($all_kantor as $k){
                          if($k['id_kantor']==$d['id_kantor']) {echo $k['nama'];}
                      }?></td>

									<td><?php echo $d['gedung']; ?></td>
									<td><?php echo $d['lantai']; ?></td>
									<td>
										<a class="btn btn-outline-info waves-effect waves-light" data-toggle="modal" data-target="#ModalEditDivisi" href="<?php echo site_url('divisi/edit/'.$d['id_divisi']); ?>">Edit</a>
										<a class="btn btn-outline-danger" href="<?php echo site_url('divisi/remove/'.$d['id_divisi']); ?>">Hapus</a>
									</td>
								</tr>
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
