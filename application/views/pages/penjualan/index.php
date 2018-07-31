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
                                <!-- modal menambahkan fungsi  -->
								<div class="modal fade" id="ModalTambahKantor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3 class="modal-title w-100 font-weight-bold">Tambah Kantor</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body mx-3">
                                        <form class="floating-labels m-t-40">
                                          <div class="form-group m-b-40">
                                              <input type="text" class="form-control" id="id_kantor">
                                              <span class="bar"></span>
                                              <label for="id_kantor"><h6 class="font-weight-bold">ID Kantor</h6></label>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <input type="text" class="form-control" id="namakantor">
                                              <span class="bar"></span>
                                              <label for="namakantor"><h6 class="font-weight-bold">Nama Kantor</h6></label>
                                          </div>
                                          <div class="form-group m-b-40">
                                              <textarea rows="4" type="text" class="form-control" id="alamatkantor"></textarea>
                                              <span class="bar"></span>
                                              <label for="alamatkantor"><h6 class="font-weight-bold">Alamat Kantor</h6></label>
                                          </div>
                                          <div class="form-group">
                                              <label><h6 class="font-weight-bold">Status</h6></label>
                                              <select class="form-control">
                                                  <option>1</option>
                                                  <option>2</option>
                                              </select>
                                            </div>
                                        </div>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button class="btn btn-info waves-effect waves-light">Tambah</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
								<!-- button add -->
                                <div class="row">
                                  <div class="col-3">
                                    <button type="button" class="btn btn-info waaves-effect waves-light" data-toggle="modal" data-target="#ModalTambahKantor" > add </button>
                                  </div>
                                </div>
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
											<th>Tanggal Beli</th>
											<th>Kategori</th>
											<th>Kondisi</th>
											<th>Durability</th>
											<th>Status</th>
                                            <th>Pembeli</th>
                                            <th>Harga</th>
                                            <th>Tanggal Jual</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach($tidakhabis as $i){ ?>
    									<tr>
                      <?php $date = explode(" ",$i->tanggal);
                            $date = $date[0]; ?>
                            <?php $date1 = explode(" ", $i->tanggal_penjualan);
                            $date1 = $date1[0]; ?>
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
                        <td><?php echo $i->pembeli; ?></td>
                        <td><?php echo $i->harga; ?></td>
                        <td><?php echo $date1; ?></td>
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