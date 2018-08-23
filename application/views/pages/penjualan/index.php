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
                <h4 class="text-themecolor">Penjualan</h4>
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
                                <h4 class="card-title">Data Barang yang dijual</h4>
                                <!-- <h6 class="card-subtitle">Data table example</h6> -->
                                <?php if ($user['status'] == 1){
                                  echo form_open("Penjualan/index");?>
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
                                <?php if($user['status']==1){
                                  $pen=$penjualan;
                                }
                                else if($user['status']==2){
                                  $pen=$penjualan2;
                                }
                    if (count($pen)){?>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                      <th>No.</th>
											<th>Serial ID</th>
											<th>Nama Barang</th>
											<th>Merk</th>
											<th>Divisi Pengada</th>
                      <th>Divisi Penerima</th>
                      <th>Kantor</th>
											<th>Tanggal Beli</th>
											<th>Kondisi</th>
											<th>Durability</th>
                                            <th>Pembeli</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Tanggal Jual</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php $no = 1;
                    foreach($pen as $i){ ?>
    									<tr>
                      <?php $date = explode(" ",$i->tanggal);
                            $date = $date[0]; ?>
                            <?php $date1 = explode(" ", $i->tanggal_penjualan);
                            $date1 = $date1[0]; ?>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $i->serial_id; ?></td>
                        <td><?php echo $i->nama; ?></td>
                        <td><?php echo $i->merk; ?></td>
                        <td><?php echo $i->nama_divisi_pengada; ?></td>
                        <td><?php
                        foreach($all_divisi as $d){
                            if($d['id_divisi']==$i->id_divisi_penerima) {echo $d['nama_divisi'];}
                        }?></td>
                        <td><?php
                        foreach($all_kantor as $kan){
                          if($kan['id_kantor']==$i->id_kantor) {echo $kan['nama_kantor'];}
                        }?></td>
                        <td><?php echo $date; ?></td>
                        <td><?php echo $i->kondisi; ?></td>
                        <td><?php echo $i->durability; ?></td>
                        <td><?php echo $i->pembeli; ?></td>
                        <td><?php echo $i->harga; ?></td>
                        <td><?php echo $i->harga_jual; ?></td>
                        <td><?php echo $date1; ?></td>
                          </tr>

										<?php }
                  }
                  else{?> <br>
                    <?php
                    if($by_kantor == 0){
                      echo('Tidak ada data penjualan');
                    }
                    else {
                    echo ('Tidak ada data penjualan untuk kantor ');
                      foreach($all_kantor as $kan){
                        if($kan['id_kantor']==$by_kantor) echo $kan['nama_kantor'];
                      }
                    }?>
                    <br>
                    <?php
                    } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
						</div>
				</div>
            </div>
          </div>
        </div>
