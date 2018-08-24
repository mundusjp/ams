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
                                <h4 class="card-title">Full Inventory List</h4>
                                <h6 class="card-subtitle">Barang Habis Pakai dan Tidak Habis Pakai</h6>
                                <?php if ($user['status'] == 1){
                                  echo form_open("inventory/overview");?>
                                <select name="pilih_cabang" class="select2 form-control custom-select col-6" style="width: 40%; height:36px;">
                                  <option value="0">Semua Kantor</option><?php
                                  foreach($all_kantor as $kantor)
                                  {
                                    $selected = ($kantor['id_kantor'] == $by_kantor) ? ' selected="selected"' : "";
                                    echo '<option value="'.$kantor['id_kantor'].'"'.$selected.'>'.$kantor['nama_kantor'].'</option>';
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
											<th>Nama</th>
                      <th>Divisi Penerima</th>
                      <th>Kantor</th>
											<th>Jenis</th>
											<th>Merk</th>
											<th>Divisi Pengada</th>
											<th>Tanggal</th>
											<th>Kategori</th>
											<!-- <th>Tindakan</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
                    $no = 1;
                    foreach($inv as $i){ ?>
    									<tr>
											<td><?php echo $no; $no++;?></td>
											<td><?php echo $i['nama']; ?></td>
                      <td><?php
                      foreach($all_divisi as $d){
                          if($d['id_divisi']==$i['id_divisi_penerima']) {echo $d['nama_divisi'];}
                      }?></td>
                      <td>
                        <?php
                        foreach($all_kantor as $kan){
                            if($kan['id_kantor']==$i['id_kantor']) {echo $kan['nama_kantor'];}
                        }?></td>
											<td><?php
                        if ($i['jenis'] == 1){
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
											<!-- <td>
    									        <a class="btn btn-outline-info waves-effect waves-light" href="<?php echo site_url('inventory/edit/'.$i['id_inventory']); ?>">Ubah</a>
    									        <a class="btn btn-outline-danger" href="<?php echo site_url('inventory/remove/'.$i['id_inventory']); ?>">Hapus</a>
    									    </td> -->
   										 </tr>
										<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                              <?php }
                              else{?> <br>
                                     <?php
                                     if($by_kantor == 0){
                                       echo('Tidak ada data barang');
                                     }
                                     else{
                                       echo ('Tidak ada data barang untuk kantor ');
                                       foreach($all_kantor as $kan){
                                         if($kan['id_kantor']==$by_kantor) echo $kan['nama_kantor'];
                                       }
                                     }
                               }?>
                            </div>
						</div>
				</div>
            </div>
          </div>
        </div>
