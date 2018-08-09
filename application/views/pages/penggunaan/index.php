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
        <div class="row">
          <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Pilih Kantor dan Divisi</h4>
                  <select name="pilih_cabang" class="select2 form-control custom-select col-6" style="width: 40%; height:36px;">
                      <option value="0">Pilih Kantor</option><?php
                      foreach($all_kantor as $kantor)
                      {
                        $selected = ($kantor['id_kantor'] == $by_kantor) ? ' selected="selected"' : "";
                        echo '<option value="'.$kantor['id_kantor'].'" '.$selected.'>'.$kantor['nama_kantor'].'</option>';
                      }
                      ?>
                    </select>
                    <select name="pilih_cabang" class="select2 form-control custom-select col-6" style="width: 40%; height:36px;">
                        <option value="0">Pilih Divisi</option><?php
                        foreach($all_divisi as $divisi)
                        {
                          $selected = ($divisi['id_divisi'] == $by_kantor) ? ' selected="selected"' : "";
                          echo '<option value="'.$divisi['id_divisi'].'" '.$selected.'>'.$divisi['nama_divisi'].'</option>';
                        }
                        ?>
                      </select>
              <button type="submit" class="btn btn-info waves-effect waves-light">Pilih</button>
            </div>
          </div>
        </div>
      </div>
          <div class="card">
              <div class="card-body">
                  <h4 class="card-title">Data Penggunaan Barang</h4>
                  <h6 class="card-subtitle">Daftar penggunaan seluruh barang habis pakai</h6>
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
                            <?php
                            $no = 1;
                            foreach($penggunaan as $p){ ?>
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
                              <td><?php echo ($p['jumlah']);?></td>
                              <td><?php echo ($p['satuan']);?></td>
                            </tr>
                          <?php }?>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
        <!-- ============================================================== -->
        <!-- Ini adalah akhir dari working space. No more coding below      -->
        <!-- ============================================================== -->
