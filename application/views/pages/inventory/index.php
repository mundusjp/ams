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
                <h4 class="text-themecolor">Inventory</h4>
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
                                <h4 class="card-title">Data inventory</h4>
                                <h6 class="card-subtitle">Data barang habis pakai dan tidak habis pakai</h6>
                                <?php if ($user['status'] == 1){
                                  echo form_open("inventory/overview");?>
                                <select name="pilih_cabang" class="select2 form-control custom-select col-6" style="width: 40%; height:36px;">
                                  <option value="">Pilih Kantor</option><?php
                                  foreach($all_kantor as $kantor)
                                  {
                                    echo '<option value="'.$kantor['id_kantor'].'">'.$kantor['nama_kantor'].'</option>';
                                  }
                                  ?>
                                </select>
                                <button type="submit" class="btn btn-info waves-effect waves-light">Pilih</button>
                                <br>
                                <br>
                                <?php echo form_close();}
                                  if($user['status']==1){
                                    $inv=$inventory;
                                  }
                                  else if($user['status']==2){
                                    $inv=$inventory2;
                                  }
                                if (count($inv)){?>

                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
											<th>No.</th>
											<th>Divisi Pengada</th>
											<th>Nama</th>
											<th>Jenis</th>
											<th>Merk</th>
											<th>Nama Divisi Penerima</th>
											<th>Tanggal</th>
											<th>Kategori</th>
											<th>Id Beli/sewa</th>
											<th>Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
                    $no = 1;
                    foreach($inv as $i){ ?>
    									<tr>
											<td><?php echo $no; $no++;?></td>
                      <td><?php
                      foreach($all_divisi as $d){
                          if($d['id_divisi']==$i['id_divisi_pengada']) {echo $d['nama_divisi'];}
                      }?></td>
											<td><?php echo $i['nama']; ?></td>
											<td><?php if ($i['jenis'] == 1){
                                    echo ('Habis Pakai');
                                }
                                else if ($i['jenis'] == 2){
                                    echo ('Tidak Habis Pakai');
                                }?>
                      </td>
											<td><?php echo $i['merk']; ?></td>
											<td><?php echo $i['nama_divisi_pengada']; ?></td>
											<td><?php echo $i['tanggal']; ?></td>
											<td><?php echo $i['kategori']; ?></td>
											<td><?php echo $i['id_beli/sewa']; ?></td>
											<td>
    									        <a class="btn btn-outline-info waves-effect waves-light" href="<?php echo site_url('inventory/edit/'.$i['id_inventory']); ?>">Ubah</a>
    									        <a class="btn btn-outline-danger" href="<?php echo site_url('inventory/remove/'.$i['id_inventory']); ?>">Hapus</a>
    									    </td>
   										 </tr>
										<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                              <?php } ?>
                            </div>
						</div>
				</div>
            </div>
          </div>
        </div>
