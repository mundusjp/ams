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
                <h4 class="text-themecolor">Manage Divisi</h4>
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
                                <h4 class="card-title">Data Divisi</h4>
                                <?php echo form_open("manage/divisi");?>
                                <select name="pilih_cabang" class="select2 form-control custom-select col-6" style="width: 40%; height:36px;">
                                  <option value="">Pilih Kantor</option><?php
                                  foreach($all_kantor as $kantor)
                                  {
                                    echo '<option value="'.$kantor['id_kantor'].'">'.$kantor['nama_kantor'].'</option>';
                                  }
                                  ?>
                                </select>
                                <button type="submit" class="btn btn-info waves-effect waves-light">Pilih</button>
                                <?php echo form_close();?>
                                <br>

                                <div class="row">
                                  <div class="col-3">
                                    <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#ModalTambahDivisi" > Tambah Divisi </button>
                                  </div>
                                </div>

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
                                              <input type="text" class="form-control" name="nama_divisi" value="<?php echo $this->input->post('nama_divisi'); ?>" />
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

                                          				echo '<option value="'.$kantor['id_kantor'].'" '.$selected.'>'.$kantor['nama_kantor'].'</option>';
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
                                if (count($records)){?>
                                    <div class="table-responsive m-t-40">
                                        <table id="myTable" class="table table-bordered table-striped">
                                            <thead>
    								                                  <tr>
    									                                           <th>No.</th>
                                                                 <th>Nama Divisi</th>
                                                                 <th>Nama Kantor</th>
    									                                           <th>Gedung</th>
    									                                           <th>Lantai</th>
    									                                           <th>Action</th>
    								                                   </tr>
    								                       </thead>
    								<tbody>
                    <?php
                            $no = 1;
    								        foreach($records as $rec){ ?>
    								<tr>
    									<td><?php echo $no; $no++; ?></td>
                      <td><?php echo $rec['nama_divisi']; ?></td>
                      <td><?php foreach($all_kantor as $k){
                              if($k['id_kantor']==$rec['id_kantor']) {
                                echo $k['nama_kantor'];}
                            }?>
                            </td>
                      <td><?php echo $rec['gedung']; ?></td>
    									<td><?php echo $rec['lantai']; ?></td>
    									<td>
    										<a class="btn btn-outline-info waves-effect waves-light" data-toggle="modal" href="#edit<?php echo $rec['id_divisi'];?>">Ubah</a>
    										<a href="<?php echo site_url('divisi/remove/'.$rec['id_divisi']); ?>" onclick="javasciprt: return confirm('Are You Sure ?')" value="<?php echo $rec['id_divisi']?>" class="btn btn-outline-danger">Hapus</a>
    									</td>

    								</tr>

                                <div class="modal fade" id="edit<?php echo $rec['id_divisi'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3 class="modal-title w-100 font-weight-bold">Edit Divisi</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body mx-3">
                                        <?php echo form_open('divisi/edit/'.$rec['id_divisi']); ?>
                                        <form class="floating-labels m-t-40">
                                          <div class="form-group m-b-40">
                                              <label for="namakantor"><h6 class="font-weight-bold">Nama Divisi </h6></label>
                                              <input type="text" class="form-control" name="nama_divisi" value="<?php echo ($this->input->post('nama_divisi') ? $this->input->post('nama_divisi') : $rec['nama_divisi']); ?>" />
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
                                          				$selected = ($kantor['id_kantor'] == $rec['id_kantor']) ? ' selected="selected"' : "";

                                          				echo '<option value="'.$kantor['id_kantor'].'" '.$selected.'>'.$kantor['nama_kantor'].'</option>';
                                          			}
                                          			?>
                                          		</select>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <label><h6 class="font-weight-bold">Gedung Kantor</h6></label>
                                              <input type="text" class="form-control" name="gedung" value="<?php echo ($this->input->post('gedung') ? $this->input->post('gedung') : $rec['gedung']); ?>" />
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
                                        <button type="submit "class="btn btn-info waves-effect waves-light">Simpan</button>
                                      </div>
                                      <?php echo form_close(); ?>
                                    </div>
                                  </div>
                                </div>

                              <?php }
                            }
                            else{

                                }
                            ?>
                              </tbody>
                              </table>
                              </div>
                            </div>
                          </div>
					</div>
				</div>
			</div>
			</div>
