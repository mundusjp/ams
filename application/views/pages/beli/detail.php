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
                                <h6 class="card-subtitle">Data table example</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
											<th>Id Inventory</th>
											<th>Id Divisi Pengada</th>
											<th>Nama</th>
											<th>Jenis</th>
											<th>Merk</th>
											<th>Nama Divisi Pengada</th>
											<th>Tanggal</th>
											<th>Kategori</th>
											<!-- <th>Id Beli/sewa</th> -->
											<th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach($inventory as $i){ ?>
    									<tr>
											<td><?php echo $i->id_inventory; ?></td>
											<td><?php echo $i->id_divisi_pengada; ?></td>
											<td><?php echo $i->nama; ?></td>
											<td><?php echo $i->jenis; ?></td>
											<td><?php echo $i->merk; ?></td>
											<td><?php echo $i->nama_divisi_pengada; ?></td>
											<td><?php echo $i->tanggal; ?></td>
											<td><?php echo $i->kategori; ?></td>
											<!-- <td><?php echo $i->id_beli/sewa; ?></td> -->
											<td>
    									        <a href="<?php echo site_url('inventory/edit/'.$i->id_inventory); ?>">Edit</a> | 
    									        <a href="<?php echo site_url('inventory/remove/'.$i->id_inventory); ?>">Delete</a>
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