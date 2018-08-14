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
                <h4 class="text-themecolor">Penggunaan Divisi</h4>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- Ini working space teman teman. Tinggal tambah table dkk-->
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body">
              <div class="card">
                  <div class="card-body">
                  <h4 class="card-title">Data Penggunaan Barang</h4>
                  <h6 class="card-subtitle">Daftar penggunaan seluruh barang habis pakai</h6>
                  <?php if ($user['status'] == 1){
                    echo form_open("penggunaan/index");?>
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
            <!-- <?php echo form_open("penggunaan/index");?>
                  <select name="pilih_triwulan" class="select2 form-control custom-select col-6" style="width: 40%; height:36px;">
                    <option value="-1">Semua Triwulan</option><?php
                      $selected = ($penggunaan['triwulan'] == $triwulan) ? ' selected="selected"' : "";
                      echo '<option value="janmar" '.$selected.'>Januari - Maret</option>';
                      echo '<option value="aprjun" '.$selected.'>April - Juni</option>';
                      echo '<option value="julsep" '.$selected.'>Juli - September</option>';
                      echo '<option value="oktdes" '.$selected.'>Oktober - Desember</option>';
                      ?>
                  </select>
                  <button type="submit" class="btn btn-info waves-effect waves-light">Pilih</button>
            <?php echo form_close();?> -->
            <?php if($user['status']==1){
                    $peng=$penggunaan;
                  }
                  else if($user['status']==2){
                    $peng=$penggunaan2;
                  }
                  if (count($peng)){?>
                  <div class="table-responsive m-t-40">
                      <table id="myTable" class="table table-bordered table-striped">
                          <thead>
                              <tr>
                                  <th>No.</th>
                                  <th>Nama Barang</th>
                                  <th>Divisi</th>
                                  <th>Kantor</th>
                                  <th>Triwulan</th>
                                  <th>Tahun</th>
                                  <th>Jumlah</th>
                                  <th>Satuan</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php $no = 1;
                                  foreach($peng as $p){ ?>
                              <tr>
        											<td><?php echo $no; $no++;?></td>
                              <td><?php echo $p['nama'];?></td>
                              <td><?php echo $p['nama_divisi'];?></td>
                              <td><?php foreach ($all_kantor as $k){
                                          if($p['id_kantor'] == $k['id_kantor']){
                                            echo $k['nama_kantor'];
                                          }
                                        }?>
                              </td>
                              <td><?php if($p['triwulan'] == 'janmar') echo ('Januari - Maret');
                                        else if($p['triwulan'] == 'aprjun') echo ('April - Juni');
                                        else if($p['triwulan'] == 'julsep') echo ('Juli - September');
                                        else if($p['triwulan'] == 'oktdes') echo ('Oktober - Desember');
                                  ?>
                              </td>
                              <td><?php echo ($p['tahun']);?></td>
                              <td><?php echo ($p['jumlah_penggunaan']);?></td>
                              <td><?php echo ($p['satuan']);?></td>
                            </tr>
                    <?php }?>
                          </tbody>
                      </table>
                  </div>
                <?php
              }
         else{?> <br>
                <?php
                if($by_kantor == 0){
                  echo('Tidak ada data penggunaan barang');
                }
                else{
                  echo ('Tidak ada data kebutuhan untuk kantor ');
                  foreach($all_kantor as $kan){
                    if($kan['id_kantor']==$by_kantor) echo $kan['nama_kantor'];
                  }
                }
          }?>

              </div>
          </div>
        </div>
    </div>
        <!-- ============================================================== -->
        <!-- Ini adalah akhir dari working space. No more coding below      -->
        <!-- ============================================================== -->
