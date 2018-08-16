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
            <h4 class="card-title">Data Pembelian</h4>
              <!-- <h6 class="card-subtitle">Data table example</h6> -->
              <?php if ($user['status'] == 1){
                echo form_open("stock/pembelian");?>
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
                                <div class="control">
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
                            <div class="col-3">
                              <div class="form-group m-b-40">
                                <label for="namakantor"><h6 class="font-weight-bold">Total Harga</h6></label>
                                <span class="bar"></span>
                                <div class="control">
                                <input min="1"   required type="number" class="form-control" name="biaya" value="<?php echo $this->input->post('biaya'); ?>" />
		                              </div>
                                  <span class="text-danger"><?php echo form_error('biaya');?></span>
                                </div>
                              </div>
                              <div class="col-3">
                                <div class="form-group m-b-40">
                                  <label for="id_kantor"><h6 class="font-weight-bold">Tanggal Transaksi</h6></label>
                                  <span class="bar"></span>
                                  <input  required type="date" class="form-control" name="tanggal_transaksi" value="<?php echo $this->input->post('tanggal_transaksi'); ?>" />
	                                 <span class="text-danger"><?php echo form_error('tanggal_transaksi');?></span>
                                 </div>
                               </div>
                               <div class="col-3">
                                 <form class="floating-labels m-t-40">
                                   <div class="form-group m-b-40">
                                     <label for="namakantor"><h6 class="font-weight-bold">No Nota</h6></label>
                                     <span class="bar"></span>
                                     <input required type="text" class="form-control" name="no_nota" value="<?php echo $this->input->post('no_nota'); ?>" />
		                                   <span class="text-danger"><?php echo form_error('no_nota');?></span>
                                     </div>
                                   </div>
                                 </div>
                                 <?php
                                 $status = $this->session->userdata('level');
                                 if($status == 1){?>
                                 <div class="col-3">
                                   <div class="form-group m-b-40">
                                       <label for="id_divisi"><h6 class="font-weight-bold">Diadakan Oleh:</h6></label>
                                       <select name="id_divisi" class="form-control">
                                       <option value="">Pilih Kantor</option>
                                        <?php
                                         foreach($all_kantor as $kan)
                                         {
                                           $selected = ($kan['id_kantor'] == $this->input->post('id_kantor')) ? ' selected="selected"' : "";
                                           echo '<option value="'.$kan['id_kantor'].'" '.$selected.'>'.$kan['nama_kantor'].'</option>';
                                         }
                                     //   else if ($status == 2){
                                     //   foreach($divisi_by_kantor as $div)
                                     //   {
                                     //     $selected = ($div['id_divisi'] == $this->input->post('id_divisi')) ? ' selected="selected"' : "";
                                     //     echo '<option value="'.$div['id_divisi'].'" '.$selected.'>'.$div['nama_divisi'].'</option>';
                                     //   }
                                     // }
                                       ?>
                                   </select>
                                       <span class="bar"></span>
                                   </div>
                                 </div><?php }?>
                                 <div class="row">
                                   <div class="col-9">
                                     <div class="form-group m-b-40">
                                       <label for="alamatkantor"><h6 class="font-weight-bold">Deskripsi</h6></label>
                                       <span class="bar"></span>
                                       <textarea required rows="4" class="form-control" type="text" name="deskripsi" value="<?php echo $this->input->post('deskripsi'); ?>" ></textarea>
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
                                        <div class="controller">
                                        <input type="number" min="1" class="form-control" onsubmit="thousandseparator()" name="biaya" value="<?php echo ($this->input->post('biaya') ? $this->input->post('biaya') : $b['biaya']); ?>" /> </div>
                                      </div>
                                    </div>
                                    <div class="col-3">
                                      <div class="form-group m-b-40">
                                        <label for="id_kantor"><h6 class="font-weight-bold">Tanggal Transaksi</h6></label>
                                        <span class="bar"></span>
            	                	          <input type="text" class="form-control mydatepicker" name="tanggal_transaksi" value="<?php echo ($this->input->post('tanggal_transaksi') ? $this->input->post('tanggal_transaksi') : $b['tanggal_transaksi']); ?>" />
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
                                       <div class="col-3">
                                         <div class="form-group m-b-40">
                                             <label><h6 class="font-weight-bold">Divisi Pengada</h6></label>
                                             <select name="nama_divisi_pengada" class="form-control">
                                             <option value="">Pilih Divisi</option>
                                             <?php
                                             if($status == 1){
                                               foreach($all_divisi as $div)
                                               {
                                                 $selected = ($div['id_divisi'] == $b->id_divisi) ? ' selected="selected"' : "";
                                                     foreach($all_kantor as $kan){
                                                         if($kan['id_kantor']==$div['id_kantor']) {
                                                         echo '<option value="'.$div['id_divisi'].'" '.$selected.'>'.$kan['nama_kantor'].' - '.$div['nama_divisi'].'</option>';
                                                         }
                                                     }
                                               }
                                             }
                                             else if ($status == 2){
                                             foreach($divisi_by_kantor as $div)
                                             {
                                               $selected = ($div['id_divisi'] == $b->id_divisi) ? ' selected="selected"' : "";
                                               echo '<option value="'.$div['id_divisi'].'" '.$selected.'>'.$div['nama_divisi'].'</option>';
                                             }
                                           }
                                             ?>
                                         </select>
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
                              <?php if($user['status']==1){
                                $beli=$pembelian;
                              }
                              else if($user['status']==2){
                                $beli=$pembelian2;
                              }
                  if (count($beli)){?>
                              <div class="table-responsive m-t-40">
                                <table id="myTable" class="table table-bordered table-striped">
                                  <thead>
						                        <tr>
			                                   <th>No.</th>
                                         <th>No Nota</th>
									                       <th>Nama Vendor</th>
                                         <th>Nama Cabang</th>
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
                                   <td><?php
                                   foreach($all_kantor as $kan){
                                       if($kan['id_kantor']==$b['id_kantor']) {echo $kan['nama_kantor'];}
                                   }?></td>
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
                               <?php }
                             }
                             else{?> <br>
                               <?php
                               if($by_kantor == 0){
                                 echo('Tidak ada data pembelian');
                               }
                               else {
                               echo ('Tidak ada data pembelian untuk kantor ');
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
