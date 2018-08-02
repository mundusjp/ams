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
                <h4 class="text-themecolor">Pengembalian</h4>
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
                                <h4 class="card-title">Data Barang yang dikembalikan</h4>
                                <h6 class="card-subtitle">Data table example</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Serial Id</th>
                                                <th>Divisi Pengada</th>
                                                <th>Nama</th>
                                                <!-- <th>Jenis</th> -->
                                                <th>Merk</th>
                                                <th>Nama Divisi Penerima</th>
                                                <th>Tanggal Beli</th>
                                                <th>Kategori</th>
                                                <th>Kondisi</th>
                                                <th>Durability</th>
                                                <th>Status</th>
                                                <th>Tanggal Dikembalikan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1;foreach($tidakhabis as $i){ ?>
                                            <tr>
                                                <td>
                                                    <!-- <?php echo $i->id_inventory; ?> -->
                                                        <?php echo $no++; ?>
                                                </td>
                                                <td>
                                                    <?php echo $i->serial_id; ?>
                                                </td>
                                                <td>
                                                    <!-- <?php echo $i->id_divisi_pengada; ?> -->
                                                    <?php 
                                                    foreach($all_divisi as $divisi)
                                                    {
                                                        if ($divisi['id_divisi'] == $i->id_divisi_pengada)
                                                        echo $divisi['nama_divisi'];
                                                    } 
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php echo $i->nama; ?>
                                                </td>
                                                <!-- <td>
                                                    <?php echo $i->jenis; ?>
                                                </td> -->
                                                <td>
                                                    <?php echo $i->merk; ?>
                                                </td>
                                                <td>
                                                    <?php echo $i->nama_divisi_pengada; ?>
                                                </td>
                                                <td>
                                                    <!-- <?php echo $i->tanggal; ?> -->
                                                    <?= date('d-m-Y', strtotime($i->tanggal)) ?>
                                                </td>
                                                <td>
                                                    <?php echo $i->kategori; ?>
                                                </td>
                                                <td>
                                                    <?php echo $i->kondisi; ?>
                                                </td>
                                                <td>
                                                    <?php echo $i->durability; ?>
                                                </td>
                                                <td>
                                                    <?php echo $i->status; ?>
                                                </td>
                                                <td>
                                                    <?php echo $i->update_at; ?>
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