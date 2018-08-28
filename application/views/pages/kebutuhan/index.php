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
                <h4 class="text-themecolor">Kebutuhan</h4>
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
                                <?php if ($user['status'] == 1){
                                  echo form_open("Kebutuhan/index");?>
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
                                      <div class="modal-body"><div class="row"><div class="col-lg-12">
                                        <div class="row">
                                          <div class="col-6">
                                            <div class="form-group m-b-40">
                                                <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Nama Barang</h6></label>
                                                <input required type="text" class="form-control" name="nama_barang" value="<?php echo $this->input->post('nama_barang'); ?>" />
                                                <span class="bar"></span>
                                            </div>
                                          </div>
                                          <div class="col-3">
                                            <div class="form-group m-b-40">
                                                <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Jumlah</h6></label>
                                                <input required type="text" class="form-control" name="jumlah" value="<?php echo $this->input->post('jumlah'); ?>" />
                                                <span class="bar"></span>
                                            </div>
                                          </div>
                                          <div class="col-3">
                                            <div class="form-group m-b-40">
                                                <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Satuan</h6></label>
                                                <input required type="text" class="form-control" name="satuan" value="<?php echo $this->input->post('satuan'); ?>" />
                                                <span class="bar"></span>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-6">
                                            <form class="floating-labels m-t-40">
                                              <div class="form-group m-b-40">
                                              <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Nama Divisi</h6></label>
                                              <select name="id_divisi" class="form-control" >
                                              <option value="">Pilih Divisi</option>
			                                           <?php
                                                 $status = $this->session->userdata('level');
                                                 if($status == 1){
                                                   foreach($all_divisi as $div)
                                                   {
                                                     $selected = ($k['id_divisi'] == $this->input->post('id_divisi')) ? ' selected="selected"' : "";
                                                     foreach($all_kantor as $k){
                                                       if($k['id_kantor']==$div['id_kantor']) {
                                                         echo '<option value="'.$div['id_divisi'].'" '.$selected.'>'.$k['nama_kantor'].' - '.$div['nama_divisi'].'</option>';
                                                       }
                                                      }
                                                    }
                                                  }
                                                  else if ($status == 2){
                                                    foreach($divisi_by_kantor as $div)
                                                    {
                                                      $selected = ($div['id_divisi'] == $this->input->post('id_divisi')) ? ' selected="selected"' : "";
                                                      foreach($all_kantor as $k){
                                                        if($k['id_kantor']==$div['id_kantor']) {
                                                          echo '<option value="'.$div['id_divisi'].'" '.$selected.'>'.$div['nama_divisi'].'</option>';
                                                        }
                                                      }
                                                    }
                                                  }
			                                               ?>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-6">
                                            <h6 class="text-muted font-weight-bold">Keterangan </h6>
                                            <p>1. Permintaan Barang akan diproses dalam waktu secepatnya</p>
                                          </div>
                                        </div></div></div>
                                      <div class="modal-footer d-flex">
                                        <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal" aria-label="Close"> Batal </button>
                                        <button type="submit" class="btn btn-info waves-effect waves-light berhasil">Tambah</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                                <?php echo form_close();?>

                                <div class="row">
                                  <div class="col-3">
                                    <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#ModalTambahKebutuhan" > Tambah Kebutuhan </button>
                                  </div>
                                </div>
                                <?php if($user['status']==1){
                                  $keb=$kebutuhan;
                                }
                                else if($user['status']==2){
                                  $keb=$kebutuhan2;
                                }
                    if (count($keb)){?>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
										<tr>
										<th>No.</th>
										<th>Nama Barang</th>
										<th>Jumlah</th>
                    <th>Satuan</th>
										<th>Divisi</th>
                    <th>Kantor</th>
                    <th>User</th>
                    <th>Tanggal Input</th>
                    <th>Tindakan</th>
									</tr>
									</thead>
									<tbody>
                                    <?php $no = 1;
                                    foreach($keb as $k){ ?>
									<tr>
                                        <td><?php echo $no; $no++; ?></td>
										                    <td><?php echo $k['nama_barang']; ?></td>
										                    <td><?php echo $k['jumlah']; ?></td>
                                        <td><?php echo $k['satuan']; ?></td>
                                        <td><?php
                                        foreach($all_divisi as $d){
                                            if($d['id_divisi']==$k['id_divisi']) {echo $d['nama_divisi'];}
                                        }?></td>
                                        <td><?php
                                        foreach($all_kantor as $kan){
                                            if($kan['id_kantor']==$k['id_kantor']) {echo $kan['nama_kantor'];}
                                        }?></td>
                                        <td><?php
                                        foreach($all_user as $u){
                                            if($u['id_user']==$k['id_user']) {echo $u['nama'];}
                                        }?></td>
                                        <?php $date = explode(" ",$k['created_at']);
                                              $date = $date[0]; ?>
                                        <td><?php echo $date; ?></td>
										<td>
                                            <a class="btn btn-outline-info waves-effect waves-light" data-toggle="modal" href="#edit<?php echo $k['id_kebutuhan']; ?>">Ubah</a>
											                      <a class="btn btn-outline-danger delete_lead" href="<?php echo site_url('kebutuhan/remove/'.$k['id_kebutuhan']); ?>">Hapus</a>
										</td>
									</tr>

                                <div class="modal fade" id="edit<?php echo $k['id_kebutuhan'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3 class="modal-title w-100 font-weight-bold">Ubah Kebutuhan</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body"><div class="row"><div class="col-lg-12">
                                        <?php echo form_open('kebutuhan/edit/'.$k['id_kebutuhan']); ?>
                                        <div class="row">
                                          <div class="col-6">
                                            <div class="form-group m-b-40">
                                                <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Nama Barang</h6></label>
                                                <input required type="text" class="form-control" name="nama_barang" value="<?php echo ($this->input->post('nama_barang') ? $this->input->post('nama_barang') : $k['nama_barang']); ?>" />
                                                <span class="bar"></span>
                                            </div>
                                          </div>
                                          <div class="col-3">
                                            <div class="form-group m-b-40">
                                                <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Jumlah</h6></label>
                                                <input required type="text" class="form-control" name="jumlah" value="<?php echo ($this->input->post('jumlah') ? $this->input->post('jumlah') : $k['jumlah']); ?>" />
                                                <span class="bar"></span>
                                            </div>
                                          </div>
                                          <div class="col-3">
                                            <div class="form-group m-b-40">
                                                <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Satuan</h6></label>
                                                <input required type="text" class="form-control" name="satuan" value="<?php echo ($this->input->post('satuan') ? $this->input->post('satuan') : $k['satuan']); ?>" />
                                                <span class="bar"></span>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-6">
                                            <div class="form-group m-b-40">
                                                  <label><h6 class="font-weight-bold"><span class="text-danger">*</span>Nama Divisi</h6></label>
                                                  <select required name="id_divisi" class="form-control" >
                                                  <option value="">Pilih Divisi</option>
                                                  <?php
                                                  if($status == 1){
                                                    foreach($all_divisi as $div)
                                                    {
                                                    $selected = ($div['id_divisi'] == $this->input->post('id_divisi')) ? ' selected="selected"' : "";
                                                          foreach($all_kantor as $kan){
                                                              if($kan['id_kantor']==$div['id_kantor']) {
                                                                $selected = ($kan['id_kantor'] == $k['id_kantor']) ? ' selected="selected"' : "";
                                                                echo '<option value="'.$div['id_divisi'].'" '.$selected.'>'.$kan['nama_kantor'].' - '.$div['nama_divisi'].'</option>';
                                                              }
                                                          }
                                                    }
                                                  }
                                                  else if ($status == 2){
                                                  foreach($divisi_by_kantor as $div)
                                                  {
                                                    $selected = ($div['id_divisi'] == $this->input->post('id_divisi')) ? ' selected="selected"' : "";
                                                        foreach($all_kantor as $kan){
                                                            if($kan['id_kantor']==$div['id_kantor']) {
                                                              $selected = ($kan['id_kantor'] == $k['id_kantor']) ? ' selected="selected"' : "";
                                                              echo '<option value="'.$div['id_divisi'].'" '.$selected.'>'.$div['nama_divisi'].'</option>';
                                                            }
                                                        }
                                                  }
                                                  }
                                                  ?>
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="col-6">
                                            <h6 class="text-muted font-weight-bold">Keterangan </h6>
                                            <p>1. Permintaan Barang akan diproses dalam waktu secepatnya</p>
                                          </div>
                                        </div></div></div>
                                      </div>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button type="submit" class="btn btn-info waves-effect waves-light ubah">Ubah</button>
                                        <?php echo form_close(); ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>

									<?php }
                }
                else{?> <br>
                  <?php
                  if($by_kantor == 0){
                    echo('Tidak ada data kebutuhan');
                  }
                  else {
                  echo ('Tidak ada data kebutuhan untuk kantor ');
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
