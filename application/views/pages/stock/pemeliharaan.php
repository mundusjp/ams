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
                <h4 class="text-themecolor">Pemeliharaan
                </h4>
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
                                <h4 class="card-title">Data Pemeliharaan
                                </h4>
                                <h6 class="card-subtitle">Data table example
                                </h6>
                                <!-- modal menambahkan fungsi  -->
                                <div class="modal fade bs-example-modal-lg" id="ModalTambahKantor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h3 class="modal-title w-100 font-weight-bold">Tambah Pemeliharaan</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body"><div class="row"><div class="col-lg-12">
                                              <div class="row">
                                                <div class="col-md-3">
                                                <?php echo form_open('stock/addpemeliharaan'); ?>
                                                <form class="floating-labels m-t-40">
                                                    <div class="form-group">
                                                        <label><h6 class="font-weight-bold">Inventory</h6></label>
                                                        <select class="form-control" name="id_inventory">
                                              <option value="">select inventory</option>
                                              <?php
                                                foreach($all_inventory as $inventory)
                                                {
                                                    $selected = ($inventory['id_inventory'] == $this->input->post('id_inventory')) ? ' selected="selected"' : "";

                                                    echo '<option value="'.$inventory['id_inventory'].'" '.$selected.'>'.$inventory['nama'].'</option>';
                                                }
                                                ?>
                                            </select>
                                                    </div>
                                                    <div class="form-group m-b-40">
                                                        <label for="namakantor"><h6 class="font-weight-bold">Biaya</h6></label>
                                                        <span class="bar"></span>
                                                        <input type="number" class="form-control" name="biaya" value="<?php echo $this->input->post('biaya'); ?>" />
                                                        <span class="text-danger"><?php echo form_error('biaya');?></span>
                                                    </div>
                                                    <div class="form-group m-b-40">
                                                        <label for="id_kantor"><h6 class="font-weight-bold">Tanggal </h6></label>
                                                        <span class="bar"></span>
                                                        <input type="date" class="form-control" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>" />
                                                        <span class="text-danger"><?php echo form_error('tanggal');?></span>
                                                    </div>


                                                    <div class="form-group m-b-40">
                                                        <label for="alamatkantor"><h6 class="font-weight-bold">Deskripsi</h6></label>
                                                        <span class="bar"></span>
                                                        <textarea rows="4" class="form-control" type="text" name="deskripsi" value="<?php echo $this->input->post('deskripsi'); ?>"></textarea>
                                                        <span class="text-danger"><?php echo form_error('deskripsi');?></span>
                                                    </div>
                                            </div>

                                            <div class="modal-footer d-flex">
                                                <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal" aria-label="Close"> Batal </button>
                                                <button class="btn btn-info waves-effect waves-light" type="submit">Tambah</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php echo form_close(); ?>
                                <!-- button add -->
                                <div class="row">
                                    <div class="col-3">
                                        <button type="button" class="btn btn-info waaves-effect waves-light" data-toggle="modal" data-target="#ModalTambahKantor"> add
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No.
                                                </th>
                                                <th>Nama Inventory
                                                </th>
                                                <th>Vendor
                                                </th>
                                                <th>Biaya
                                                </th>
                                                <th>Tanggal
                                                </th>
                                                <th>Deskripsi
                                                </th>
                                                <th>Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1;foreach($pemeliharaan as $p){ ?>
                                            <tr>
                                                <td>
                                                    <!-- <?php echo $p['id_pemeliharaan']; ?> -->
                                                    <?php echo $no++; ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    foreach($all_inventory as $inventory)
                                                    {
                                                        if ($inventory['id_inventory'] == $p['id_inventory'])
                                                        echo $inventory['nama'];
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                <?php
                                                    foreach($all_vendor as $vendor)
                                                    {
                                                        if ($vendor['id_vendor'] == $p['id_vendor'])
                                                        echo $vendor['nama'];
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php echo $p['biaya']; ?>
                                                </td>

                                                <?php $date = explode(" ",$p['tanggal']);$date1 = $date[0]; ?>
                                                <?php $date2 = explode("-",$date1);?>
                                                <td><?php echo $date2[2].'-'.$date2[1].'-'.$date2[0]; ?></td>

                                                <td>
                                                    <?php echo $p['deskripsi']; ?>
                                                </td>
                                                <td>
                                                    <a data-toggle="modal" href="#edit<?php echo $p['id_pemeliharaan']; ?>">Edit</a>
                                                    <!-- <a href="<?php echo site_url('pemeliharaan/remove/'.$p['id_pemeliharaan']); ?>">Delete</a> -->
                                                </td>
                                            </tr>
                                            <!-- modal menambahkan fungsi  -->
                                            <div class="modal fade bs-example-modal-lg" id="edit<?php echo $p['id_pemeliharaan'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-center">
                                                            <h3 class="modal-title w-100 font-weight-bold">Edit Pembelian</h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          <?php echo form_open('stock/editpemeliharaan/'.$p['id_pemeliharaan']); ?>
                                                          <form class="form-body m-t-40">
                                                                <div class="form-group">
                                                                    <label><h6 class="font-weight-bold">Inventory</h6></label>
                                                                    <select class="form-control" name="id_inventory">
                                                            <option value="">select inventory</option>
                                                            <?php
                                                              foreach($all_inventory as $inventory)
                                                              {
                                                                $selected = ($inventory['id_inventory'] == $p['id_inventory']) ? ' selected="selected"' : "";

                                                                echo '<option value="'.$inventory['id_inventory'].'" '.$selected.'>'.$inventory['nama'].'</option>';
                                                              }
                                                              ?>
                                                            </select>
                                                                </div>
                                                                <div class="form-group">
                                                                <label><h6 class="font-weight-bold">Vendor</h6></label>
                                                                <select   class="form-control" name="id_vendor">
                                                                    <option value="">select vendor</option>
                                                                <?php
                                                                foreach($all_vendor as $vendor)
                                                                {
                                                                    $selected = ($vendor['id_vendor'] == $p['id_vendor']) ? ' selected="selected"' : "";

                                                                    echo '<option value="'.$vendor['id_vendor'].'" '.$selected.'>'.$vendor['nama'].'</option>';
                                                                }
                                                                ?>
                                                                </select>
                                                                </div>
                                                                <div class="form-group m-b-40">
                                                                    <label for="id_kantor"><h6 class="font-weight-bold">Biaya</h6></label>
                                                                    <span class="bar"></span>
                                                                    <input type="number" class="form-control" name="biaya" value="<?php echo ($this->input->post('biaya') ? $this->input->post('biaya') : $p['biaya']); ?>" />
                                                                    <!-- <input type="text" class="form-control" id="id_kantor"> -->
                                                                </div>
                                                                <div class="form-group m-b-40">
                                                                    <label for="namakantor"><h6 class="font-weight-bold">Tanggal :</h6></label>
                                                                    <span class="bar"></span>
                                                                    <input type="date" class="form-control" name="tanggal" value="<?php echo ($this->input->post('tanggal') ? $this->input->post('tanggal') : $p['tanggal']); ?>" />
                                                                </div>
                                                                <div class="form-group m-b-40">
                                                                    <label for="deskripso"><h6 class="font-weight-bold">Deskripsi :</h6></label>
                                                                    <input type="text" class="form-control" name="deskripsi" value="<?php echo ($this->input->post('deskripsi') ? $this->input->post('deskripsi') : $p['deskripsi']); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('deskripsi');?></span>
                                                                </div>

                                                        </div>
                                                        <div class="modal-footer d-flex">
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal" aria-label="Close"> Batal </button>
                                                            <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                                                        </div>
                                                        <?php echo form_close(); ?>
                                                    </div>
                                                </div>
                                            </div>
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
    </div>
