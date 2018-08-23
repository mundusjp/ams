<ul id="sidebarnav">
              <?php $user_img = !empty($user['photo']) ? $user['photo'] : 'manager.png'; ?>
              <li class="user-pro"> <a aria-expanded="false"><img src="<?php echo base_url("assets/vertical/images/users/".$user_img)?>" alt="user-img" class="img-circle"><span class="hide-menu">Master</span></a></li>
              <br>
                <li> <a class="waves-effect waves-dark" href="<?php echo base_url('home')?>" aria-expanded="false"><i class="icon-home"></i><span class="hide-menu">Home</span></a></li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-social-dropbox"></i><span class="hide-menu">Inventory</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url('inventory/overview')?>">Overview</a></li>
                        <li><a href="<?php echo base_url('inventory/bhp')?>">Barang Habis Pakai</a></li>
                        <li><a href="<?php echo base_url('inventory/bthp')?>">Barang Tidak Habis Pakai</a></li>
                        <li><a href="<?php echo base_url('expired/index')?>">Barang Kadaluarsa</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-note"></i><span class="hide-menu">Transaction</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url('stock/pembelian')?>">Pembelian</a></li>
                        <li><a href="<?php echo base_url('stock/penyewaan')?>">Penyewaan</a></li>
                        <li><a href="<?php echo base_url('stock/pemeliharaan')?>">Pemeliharaan</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-info"></i><span class="hide-menu">Follow-Up</span></a>
                    <ul aria-expanded="false" class="collapse">
                      <li><a href="<?php echo base_url('penjualan/index')?>">Penjualan</a></li>
                      <li><a href="<?php echo base_url('pembuangan/index')?>">Pembuangan</a></li>
                      <li><a href="<?php echo base_url('pengembalian/index')?>">Pengembalian</a></li>
                    </ul>
                </li>
                <li> <a class="waves-effect waves-dark" href="<?php echo base_url('penggunaan/index')?>" aria-expanded="false"><i class="icon-chart"></i><span class="hide-menu">Division Usage</span></a></li>
                <li> <a class="waves-effect waves-dark" href="<?php echo base_url('kebutuhan/index')?>" aria-expanded="false"><i class="icon-bag"></i><span class="hide-menu">Purchase List</span></a></li>
                <li> <a class="waves-effect waves-dark" href="<?php echo base_url('vendor/index')?>" aria-expanded="false"><i class="icon-basket-loaded"></i><span class="hide-menu">Vendor List</span></a></li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-settings"></i><span class="hide-menu">Administration</span></a>
                    <ul aria-expanded="false" class="collapse">
                      <li><a href="<?php echo base_url('manage/user')?>">User</a></li>
                      <li><a href="<?php echo base_url('manage/divisi')?>">Divisi</a></li>
                      <li><a href="<?php echo base_url('manage/kantor')?>">Kantor</a></li>
                    </ul>
                </li>
            </ul>
