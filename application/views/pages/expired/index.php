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
                <h4 class="text-themecolor">Expired</h4>
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
                                <h4 class="card-title">Data barang yang sudah expired</h4>
                                <h6 class="card-subtitle">Data table example</h6>
                                
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
											<th>Id Inventory</th>
											<th>Serial Id</th>
											<th>Id Divisi Pengada</th>
											<th>Nama</th>
											<th>Jenis</th>
											<th>Merk</th>
											<th>Nama Divisi Pengada</th>
											<th>Tanggal</th>
											<th>Kategori</th>
											<th>Kondisi</th>
											<th>Durability</th>
											<th>Status</th>
                      <th>Usia</th>

                                            
											<!-- <th>Id Beli/sewa</th> -->
											<th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach($tidakhabis as $i){ ?>
    									<tr>
                      <?php $date = explode(" ",$i->tanggal);
                            $date = $date[0]; ?>
                      <?php $datetime = new DateTime($i->tanggal); ?>
                      <?php $diff = date_diff( $datetime, $date2 ); ?>
                      <?php $selisih = $diff->m + ($diff->y * 12); ?>
                      <?php if (($i->durability - $selisih) <= 6 ){ ?>
                        <td><?php echo $i->id_inventory; ?></td>
                        <td><?php echo $i->serial_id; ?></td>
                        <td><?php echo $i->id_divisi_pengada; ?></td>
                        <td><?php echo $i->nama; ?></td>
                        <td><?php echo $i->jenis; ?></td>
                        <td><?php echo $i->merk; ?></td>
                        <td><?php echo $i->nama_divisi_pengada; ?></td>
                        <td><?php echo $date; ?></td>
                        <td><?php echo $i->kategori; ?></td>
                        <td><?php echo $i->kondisi; ?></td>
                        <td><?php echo $i->durability; ?></td>
                        <td><?php echo $i->status; ?></td>
                        <td><?php echo $selisih; ?></td>
                        
                        <td>
                                <a href="<?php echo site_url('expired/buang/'.$i->id_inventory); ?>">Buang</a> | 
                                <a href="<?php echo site_url('expired/add/'.$i->id_inventory); ?>">Jual</a> | 
                                <a href="<?php echo site_url('expired/perpanjang/'.$i->id_inventory); ?>">Perpanjang</a>
                            </td>
                          </tr>
                      <?php } ?>
											
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