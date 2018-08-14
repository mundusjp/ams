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
        <!-- tinggal masukin kodingan php disini                            -->
				<!-- ============================================================== -->
				<div class="card">
          <div class="card-body">
<!-- ================================================================================== -->
<!--                                      START                                         -->
<!-- ================================================================================== -->
            <h4 class="card-title">Data pembelian</h4>
              <h6 class="card-subtitle">Data table example</h6>
                  <!-- ================================================= -->
                  <!--                    MODAL CENTER                   -->
                  <!-- ================================================= -->

                  <!-- ========== -->
                  <!-- MODAL ADD  -->
                  <!-- ========== -->
							    <div class="modal fade bs-example-modal-lg" id="ModalTambahKantor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header text-center">
                          <h3 class="modal-title w-100 font-weight-bold">Tambah Pembelian</h3>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body"> <div class="row"><div class="col-12">
                          <?php echo form_open('stock/addbeli'); ?>
                          <div class="row">
                            <div class="col-3">
                              <div class="form-group">
                                <label><h6 class="font-weight-bold">Pembelian Dari:</h6></label>
                                <select class="form-control" name="id_vendor">
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
                            <div class="col-3">
                              <div class="form-group m-b-40">
                                <label for="namakantor"><h6 class="font-weight-bold">Total Harga</h6></label>
                                <span class="bar"></span>
                                <input type="number" class="form-control" name="biaya" value="<?php echo $this->input->post('biaya'); ?>" />
		                              <span class="text-danger"><?php echo form_error('biaya');?></span>
                                </div>
                              </div>
                              <div class="col-3">
                                <div class="form-group m-b-40">
                                  <label for="id_kantor"><h6 class="font-weight-bold">Tanggal Transaksi</h6></label>
                                  <span class="bar"></span>
                                  <input type="date" class="form-control mydatepicker" name="tanggal_transaksi" value="<?php echo $this->input->post('tanggal_transaksi'); ?>" />
	                                 <span class="text-danger"><?php echo form_error('tanggal_transaksi');?></span>
                                 </div>
                               </div>
                               <div class="col-3">
                                 <form class="floating-labels m-t-40">
                                   <div class="form-group m-b-40">
                                     <label for="namakantor"><h6 class="font-weight-bold">No Nota</h6></label>
                                     <span class="bar"></span>
                                     <input type="text" class="form-control" name="no_nota" value="<?php echo $this->input->post('no_nota'); ?>" />
		                                   <span class="text-danger"><?php echo form_error('no_nota');?></span>
                                     </div>
                                   </div>
                                 </div>
                                 <div class="row">
                                   <div class="col-9">
                                     <div class="form-group m-b-40">
                                       <label for="alamatkantor"><h6 class="font-weight-bold">Deskripsi</h6></label>
                                       <span class="bar"></span>
                                       <textarea rows="4" class="form-control" type="text" name="deskripsi" value="<?php echo $this->input->post('deskripsi'); ?>" ></textarea>
		                                     <span class="text-danger"><?php echo form_error('deskripsi');?></span>
                                       </div>
                                     </div>
                                     <div class="col-3">
                                       <br><br>
                                       * Isi dengan Catatan Pembelian
                                     </div>
                                   </div></div></div>
                                   <div class="modal-footer d-flex">
                                     <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal" aria-label="Close"> Batal </button>
                                     <button class="btn btn-info waves-effect waves-light" type="submit">Tambah</button>
                                   </div>
                                 </div>
                               </div>
                             </div>
                           </div>
                          <?php echo form_close(); ?>
                          <!-- ========== -->
                          <!-- END        -->
                          <!-- ========== -->

                          <!-- ========== -->
                          <!-- MODAL UBAH -->
                          <!-- ========== -->
                          <?php $no=1;foreach($beli as $b){ ?>
                          <div class="modal fade bs-example-modal-lg" id="edit<?php echo $b['id_transaksi'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header text-center">
                                  <h3 class="modal-title w-100 font-weight-bold">Ubah Pembelian</h3>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body"><?php echo form_open('stock/editbeli/'.$b['id_transaksi']); ?><div class="row"><div class="col-12">
                                  <div class="row">
                                    <div class="col-3">
                                      <div class="form-group">
                                        <label><h6 class="font-weight-bold">Pembelian Dari:</h6></label>
                                        <select   class="form-control" name="id_vendor">
                                          <option value="">Pilih Vendor</option>
                                          <?php
                                          foreach($all_vendor as $vendor)
                                          {
                                            $selected = ($vendor['id_vendor'] == $b['id_vendor']) ? ' selected="selected"' : "";
                                            echo '<option value="'.$vendor['id_vendor'].'" '.$selected.'>'.$vendor['nama'].'</option>';
                                          }
                                          ?>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-3">
                                      <div class="form-group m-b-40">
                                        <label for="namakantor"><h6 class="font-weight-bold">Total Harga :</h6></label>
                                        <span class="bar"></span>
                                        <input type="number" class="form-control" onsubmit="thousandseparator()" name="biaya" value="<?php echo ($this->input->post('biaya') ? $this->input->post('biaya') : $b['biaya']); ?>" />
                                      </div>
                                    </div>
                                    <div class="col-3">
                                      <div class="form-group m-b-40">
                                        <label for="id_kantor"><h6 class="font-weight-bold">Tanggal Transaksi</h6></label>
                                        <span class="bar"></span>
            	                	          <input type="date" class="form-control mydatepicker" name="tanggal_transaksi" value="<?php echo ($this->input->post('tanggal_transaksi') ? $this->input->post('tanggal_transaksi') : $b['tanggal_transaksi']); ?>" />
                                          <!-- <input type="text" class="form-control" id="id_kantor"> -->
                                        </div>
                                      </div>
                                      <div class="col-3">
                                        <form class="form-body m-t-40">
                                          <div class="form-group m-b-40">
                                            <label for="namakantor"><h6 class="font-weight-bold">No Nota :</h6></label>
                                            <span class="bar"></span>
                            	               <input type="text" class="form-control" name="no_nota" value="<?php echo ($this->input->post('no_nota') ? $this->input->post('no_nota') : $b['no_nota']); ?>" />
                                           </div>
                                         </div>
                                       </div>
                                       <div class="row">
                                         <div class="col-9">
                                           <div class="form-group m-b-40">
                                             <label for="deskripso"><h6 class="font-weight-bold">Deskripsi :</h6></label>
            		                               <textarea type="text" rows="4" class="form-control" name="deskripsi" value="<?php echo ($this->input->post('deskripsi') ? $this->input->post('deskripsi') : $b['deskripsi']); ?>" /><?php echo $b['deskripsi']?></textarea>
            		                                 <span class="text-danger"><?php echo form_error('deskripsi');?></span>
                                               </div>
                                             </div>
                                             <div class="col-3">
                                               <br><br>
                                               * Isi dengan Catatan Pembelian
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
                                     <!-- End of Modal-Dialogue -->
                                   </div>
          								         <?php } ?>
                                   <!-- ========== -->
                                   <!--END OF MODAL-->
                                   <!-- ========== -->

                              <!-- ================================================= -->
                              <!--                   END OF MODALS                   -->
                              <!-- ================================================= -->

                              <!-- ================================================= -->
                              <!--                  PAGE VIEWS CENTER                -->
                              <!-- ================================================= -->

                              <!-- ========== -->
                              <!--  BUTTONS   -->
                              <!-- ========== -->
                              <div class="row">
                                <div class="col-3">
                                  <button type="button" class="btn btn-info waaves-effect waves-light" data-toggle="modal" data-target="#ModalTambahKantor" > Tambah </button>
                                </div>
                              </div>
                              <!-- ========== -->
                              <!--  /BUTTONS  -->
                              <!-- ========== -->

                              <!-- ========== -->
                              <!--  TABLES    -->
                              <!-- ========== -->
                              <div class="table-responsive m-t-40">
                                <table id="myTable" class="table table-bordered table-striped">
                                  <thead>
						                        <tr>
			                                   <th>No.</th>
                                         <th>No Nota</th>
									                       <th>Nama Vendor</th>
                                         <th>Total Harga</th>
									                       <th>Tanggal Transaksi</th>
									                       <th>Deskripsi</th>
									                       <th>Actions</th>
								                   </tr>
							                   </thead>
							                   <tbody>
								                 <?php $no=1;foreach($beli as $b){ ?>
								                   <tr>
									                   <td>
                                     <!-- <?php echo $b['id_transaksi']; ?> -->
                                     <?php echo $no++; ?>
                                   </td>
									                 <td><?php echo $b['no_nota']; ?></td>
                                   <td>
                                     <?php
                                     foreach($all_vendor as $vendor)
                                     {
                                       if ($vendor['id_vendor'] == $b['id_vendor'])
                                       echo $vendor['nama'];
                                     }
                                     ?>
                                   </td>
                                   <td><?php echo $b['biaya']; ?></td>
                                   <?php $date = explode(" ",$b['tanggal_transaksi']);$date1 = $date[0]; ?>
                                   <?php $date2 = explode("-",$date1);?>
                                   <td><?php echo $date2[2].'-'.$date2[1].'-'.$date2[0]; ?></td>
								                   <td><?php echo $b['deskripsi']; ?></td>
									                 <td>
										                 <button class="btn btn-outline-info" data-toggle="modal" href="#edit<?php echo $b['id_transaksi']; ?>">Edit</button>
                                     <!-- <a href="<?php echo site_url('stock/removebeli/'.$b['id_transaksi']); ?>">Delete</a> | -->
                                     <a class="btn btn-outline-primary" href="<?php echo site_url('inventory/detail_beli/'.$b['id_transaksi']); ?>">Detail</a>
									                 </td>
								                 </tr>
                               <?php } ?>
								               </tbody>
							               </table>
							             </div>
                           <!-- ========== -->
                           <!--  /TABLES   -->
                           <!-- ========== -->

                           <!-- ================================================= -->
                           <!--           END OF PAGE VIEWS CENTER                -->
                           <!-- ================================================= -->

<!-- ================================================================================== -->
<!--                                        END                                         -->
<!-- ================================================================================== -->
								         </div>
							         </div>
                       <!-- ============================================================== -->
                       <!-- End Of Code                                                    -->
               				 <!-- ============================================================== -->
					           </div>
				           </div>
			           </div>
			         </div>
