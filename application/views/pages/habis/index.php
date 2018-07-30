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
                                                <h3 class="modal-title w-100 font-weight-bold">Tambah Barang Habis Pakai</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                            </div>
                                            <div class="modal-body mx-3">
                                               <?php echo form_open('inventory/add_bhp'); ?>
                                                    <div class="form-group m-b-40">
                                                        <input type="text" class="form-control" name="nama" value="<?php echo $this->input->post('nama'); ?>">
                                                        <span class="bar"></span>
                                                        <label for="id_kantor"><h6 class="font-weight-bold">Nama</h6></label>
                                                    </div>
                                                    <div class="form-group m-b-40">
                                                        <input type="text" class="form-control" name="jenis" value="<?php echo $this->input->post('jenis'); ?>">
                                                        <span class="bar"></span>
                                                        <label for="jenis"><h6 class="font-weight-bold">Jenis</h6></label>
                                                    </div>
                                                    <div class="form-group m-b-40">
                                                        <input type="text" class="form-control" name="merk" value="<?php echo $this->input->post('merk'); ?>">
                                                        <span class="bar"></span>
                                                        <label for="merk"><h6 class="font-weight-bold">Merek</h6></label>
                                                    </div>
                                                    <div class="form-group m-b-40">
                                                        <input type="text" class="form-control" name="nama_divisi_pengada" value="<?php echo $this->input->post('nama_divisi_pengada'); ?>">
                                                        <span class="bar"></span>
                                                        <label for="nama_divisi_pengada"><h6 class="font-weight-bold">Nama Divisi Pengada</h6></label>
                                                    </div>
                                                    <div class="form-group m-b-40">
                                                        <input type="text" class="form-control" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>">
                                                        <span class="bar"></span>
                                                        <label for="tanggal"><h6 class="font-weight-bold">Tanggal</h6></label>
                                                    </div>
                                                    <div class="form-group m-b-40">
                                                        <input type="text" class="form-control" name="kategori" value="<?php echo $this->input->post('kategori'); ?>">
                                                        <span class="bar"></span>
                                                        <label for="kategori"><h6 class="font-weight-bold">Kategori</h6></label>
                                                    </div>
                                                    <div class="form-group m-b-40">
                                                        <input type="text" class="form-control" name="id_beli/sewa" value="<?php echo $this->input->post('id_beli/sewa'); ?>">
                                                        <span class="bar"></span>
                                                        <label for="id_beli/sewa"><h6 class="font-weight-bold">Id Beli/sewa</h6></label>
                                                    </div>
                                                    <div class="form-group m-b-40">
                                                        <input type="text" class="form-control" name="jumlah" value="<?php echo $this->input->post('jumlah'); ?>">
                                                        <span class="bar"></span>
                                                        <label for="jumlah"><h6 class="font-weight-bold">Jumlah</h6></label>
                                                    </div>
                                                    <div class="form-group m-b-40">
                                                        <input type="text" class="form-control" name="satuan" value="<?php echo $this->input->post('satuan'); ?>">
                                                        <span class="bar"></span>
                                                        <label for="satuan"><h6 class="font-weight-bold">Satuan</h6></label>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label><h6 class="font-weight-bold">Divisi</h6></label>
                                                        
                                                        <select name="id_divisi_pengada" class="form-control">
                                                        <option value="">select divisi</option>
                                                        <?php 
                                                        foreach($all_divisi as $divisi)
                                                        {
                                                            $selected = ($divisi['id_divisi'] == $this->input->post('id_divisi_pengada')) ? ' selected="selected"' : "";

                                                            echo '<option value="'.$divisi['id_divisi'].'" '.$selected.'>'.$divisi['nama'].'</option>';
                                                        } 
                                                        ?>
                                                    </select>
                                                    </div>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <button type="submit" class="btn btn-info waves-effect waves-light">Tambah</button>
                                            </div>
                                            <?php echo form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- button add -->
                                <div class="row">
                                    <div class="col-3">
                                        <button type="button" class="btn btn-info waaves-effect waves-light" data-toggle="modal" data-target="#ModalTambahKantor"> add </button>
                                    </div>
                                </div>
                                <div class="table-responsive m-t-40">

                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id barang</th>
                                                <th>Id Divisi Pengada</th>
                                                <th>Nama</th>
                                                <th>Jenis</th>
                                                <th>Merk</th>
                                                <th>Nama Divisi Pengada</th>
                                                <th>Tanggal</th>
                                                <th>Kategori</th>
                                                <th>jumlah</th>
                                                <th>satuan</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($habis as $i) { ?>
                                            <tr>

                                                <td>
                                                    <?php echo $i->id_inventory; ?>
                                                </td>
                                                <td>
                                                    <?php echo $i->id_divisi_pengada; ?>
                                                </td>
                                                <td>
                                                    <?php echo $i->nama; ?>
                                                </td>
                                                <td>
                                                    <?php echo $i->jenis; ?>
                                                </td>
                                                <td>
                                                    <?php echo $i->merk; ?>
                                                </td>
                                                <td>
                                                    <?php echo $i->nama_divisi_pengada; ?>
                                                </td>
                                                <td>
                                                    <?php echo $i->tanggal; ?>
                                                </td>
                                                <td>
                                                    <?php echo $i->kategori; ?>
                                                </td>
                                                <td>
                                                    <?php echo $i->jumlah; ?>
                                                </td>
                                                <td>
                                                    <?php echo $i->satuan; ?>
                                                </td>
                                                <td>
                                                    <a data-toggle="modal" href="#edit-<?php echo $i->id_inventory;?>">Edit</a> |
                                                    <a href="<?php echo site_url('inventory/remove_bhp/'.$i->id_inventory); ?>">Delete</a>
                                                </td>
                                            </tr>
                                            <!-- modal menambahkan fungsi  -->
                                            <div class="modal fade" id="edit-<?php echo $i->id_inventory;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-center">
                                                            <h3 class="modal-title w-100 font-weight-bold">Tambah Barang Habis Pakai</h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                                        </div>
                                                        <div class="modal-body mx-3">
                                                            <?php echo form_open('inventory/edit_bhp/'.$i->id_inventory); ?>
                                                            <form class="floating-labels m-t-40">

                                                                <div class="form-group">
                                                                    <label><h6 class="font-weight-bold">Divisi</h6></label>
                                                                    <select name="id_divisi_pengada">
                                                        <option value="">select divisi</option>
                                                        <?php 
                                                        foreach($all_divisi as $divisi)
                                                        {
                                                            $selected = ($divisi['id_divisi'] == $i->id_divisi_pengada) ? ' selected="selected"' : "";

                                                            echo '<option value="'.$divisi['id_divisi'].'" '.$selected.'>'.$divisi['nama'].'</option>';
                                                        } 
                                                        ?>
                                                    </select>
                                                                </div>
                                                                <div>
                                                                    <span class="text-danger">*</span>Nama :
                                                                    <input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $i->nama); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('nama');?></span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-danger">*</span>Jenis :
                                                                    <input type="text" name="jenis" value="<?php echo ($this->input->post('jenis') ? $this->input->post('jenis') : $i->jenis); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('jenis');?></span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-danger">*</span>Merk :
                                                                    <input type="text" name="merk" value="<?php echo ($this->input->post('merk') ? $this->input->post('merk') : $i->merk); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('merk');?></span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-danger">*</span>Nama Divisi Pengada :
                                                                    <input type="text" name="nama_divisi_pengada" value="<?php echo ($this->input->post('nama_divisi_pengada') ? $this->input->post('nama_divisi_pengada') : $i->nama_divisi_pengada); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('nama_divisi_pengada');?></span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-danger">*</span>Tanggal :
                                                                    <input type="text" name="tanggal" value="<?php echo ($this->input->post('tanggal') ? $this->input->post('tanggal') : $i->tanggal); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('tanggal');?></span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-danger">*</span>Kategori :
                                                                    <input type="text" name="kategori" value="<?php echo ($this->input->post('kategori') ? $this->input->post('kategori') : $i->kategori); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('kategori');?></span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-danger">*</span>Jumlah :
                                                                    <input type="text" name="jumlah" value="<?php echo ($this->input->post('jumlah') ? $this->input->post('jumlah') : $i->jumlah); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('jumlah');?></span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-danger">*</span>Satuan :
                                                                    <input type="text" name="satuan" value="<?php echo ($this->input->post('satuan') ? $this->input->post('satuan') : $i->satuan); ?>" />
                                                                    <span class="text-danger"><?php echo form_error('satuan');?></span>
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer d-flex justify-content-center">
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