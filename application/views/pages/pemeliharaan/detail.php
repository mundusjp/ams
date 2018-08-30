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
                <h4 class="text-themecolor">Detail</h4>
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
                                <h4 class="card-title">Detail</h4>
                                <h6 class="card-subtitle">Data pemeliharaan <?php echo $serial_id['serial_id']?></h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
											<th>No.</th>
                      <th>Biaya</th>
                      <th>Tanggal</th>
                      <th>Deskripsi</th>
											<!-- <th>Id Beli/sewa</th> -->
											<!-- <th>Actions</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php $no=1; foreach($pemeliharaan as $p){ ?>
    									<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $p->biaya; ?></td>
                                            <?php $date = explode(" ",$p->tanggal);$date1 = $date[0]; ?>
                                            <?php $date2 = explode("-",$date1);?>
                                            <td><?php echo $date2[2].'-'.$date2[1].'-'.$date2[0]; ?></td>
											<td><?php echo $p->deskripsi; ?></td>
											
											<!-- <td>
    									        <a href="<?php echo site_url('inventory/edit/'.$i->id_inventory); ?>">Edit</a> |
    									        <a href="<?php echo site_url('inventory/remove/'.$i->id_inventory); ?>">Delete</a>
    									    </td> -->
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
