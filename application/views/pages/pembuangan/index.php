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
                <h4 class="text-themecolor">Pembuangan</h4>
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
                                <h4 class="card-title">Data Barang yang dibuang</h4>
                                <!-- <h6 class="card-subtitle">Data table example</h6> -->
                                <?php if ($user['status'] == 1){
                                  echo form_open("Pembuangan/index");?>
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
                                <?php echo form_close();}
                                if($user['status']==1){
                                  $pem=$pembuangan;
                                }
                                else if($user['status']==2){
                                  $pem=$pembuangan2;
                                }
                    if (count($pem)){?>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Serial Id</th>
                                                <th>Nama</th>
                                                <th>Divisi Pengada</th>
                                                <th>Divisi Penerima</th>
                                                <th>Kantor</th>
                                                <!-- <th>Jenis</th> -->
                                                <th>Merk</th>
                                                <th>Tanggal Beli</th>
                                                <th>Kategori</th>
                                                <th>Kondisi</th>
                                                <th>Durability</th>
                                                <th>Status</th>
                                                <th>Tanggal Buang</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1;foreach($pem as $i){ ?>
                                            <tr>
                                                <td>
                                                    <!-- <?php echo $i->id_inventory; ?> -->
                                                        <?php echo $no++; ?>
                                                </td>
                                                <td>
                                                    <?php echo $i->serial_id; ?>
                                                </td>
                                                <td>
                                                    <?php echo $i->nama; ?>
                                                </td>
                                                <td>
                                                    <?php echo $i->nama_divisi_pengada; ?>
                                                </td>
                                                <td>
                                                    <!-- <?php echo $i->id_divisi_pengada; ?> -->
                                                    <?php
                                                    foreach($all_divisi as $divisi)
                                                    {
                                                        if ($divisi['id_divisi'] == $i->id_divisi_penerima)
                                                        echo $divisi['nama_divisi'];
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php
                                                foreach($all_kantor as $kan){
                                                    if($kan['id_kantor']==$i->id_kantor) {echo $kan['nama_kantor'];}
                                                }?></td>
                                                <!-- <td>
                                                    <?php echo $i->jenis; ?>
                                                </td> -->
                                                <td>
                                                    <?php echo $i->merk; ?>
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
                                                <?php $date = explode(" ",$i->updated_at);
                                                      $date = $date[0]; ?>
                                                    <?php echo $date; ?>
                                                </td>

                                            </tr>
                                            <?php }
                                          }
                                           else{
                                            if($by_kantor == 0){
                                              echo('Tidak ada data pembuangan');
                                            }
                                            else {
                                            echo ('Tidak ada data pembuangan untuk kantor ');
                                              foreach($all_kantor as $kan){
                                                if($kan['id_kantor']==$by_kantor) echo $kan['nama_kantor'];
                                              }
                                            }
                                          }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
