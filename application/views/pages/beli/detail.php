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
                                <h4 class="card-title">Detail <?php echo $kategori?></h4>
                                <h6 class="card-subtitle">Data barang pada nota <?php echo $nota['no_nota']?></h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
											<th>No.</th>
                      <th>Nama</th>
                      <th>Merk</th>
                      <th>Divisi Pengada</th>
											<th>Divisi Penerima</th>
											<th>Tanggal</th>
											<!-- <th>Id Beli/sewa</th> -->
											<!-- <th>Actions</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php $no=1; foreach($inventory as $i){ ?>
    									<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $i->nama; ?></td>
											<td><?php echo $i->merk; ?></td>
											<td><?php echo $i->nama_divisi_pengada; ?></td>
                      <td><?php
                          foreach($all_divisi as $d){
                              if($d['id_divisi']==$i->id_divisi_penerima) {echo $d['nama_divisi'];}
                          }?></td>
                                            <?php $date = explode(" ",$i->tanggal);$date1 = $date[0]; ?>
                                            <?php $date2 = explode("-",$date1);?>
                                            <td><?php echo $date2[2].'-'.$date2[1].'-'.$date2[0]; ?></td>
											
											
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
