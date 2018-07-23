<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="<?php echo base_url('assets/vertical/images/users/manager.png')?>" alt="user-img" class="img-circle"><span class="hide-menu">Administrator</span></a>
                  <ul aria-expanded="false" class="collapse">
                      <li><a href="<?php echo base_url('auth/logout')?>"><i class="fa fa-power-off"></i> Logout</a></li>
                  </ul>
              </li>
              <li class="nav-small-cap"></li>
                <li> <a class="waves-effect waves-dark" href="<?php echo base_url('home')?>" aria-expanded="false"><i class="icon-home"></i><span class="hide-menu">Home</span></a></li>
                <li> <a class="waves-effect waves-dark" href="<?php echo base_url('PantauDivisi')?>" aria-expanded="false"><i class="icon-chart"></i><span class="hide-menu">Division Usage</span></a></li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-social-dropbox"></i><span class="hide-menu">Inventory</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url('inventory-bhp')?>">Barang Habis Pakai</a></li>
                        <li><a href="<?php echo base_url('inventory-bthp')?>">Barang Tidak Habis Pakai</a></li>
                    </ul>
                </li>
              <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-note"></i><span class="hide-menu">Input</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url('input-pembelian')?>">Pembelian</a></li>
                        <li><a href="<?php echo base_url('input-penyewaan')?>">Penyewaan</a></li>
                        <li><a href="<?php echo base_url('input-pemasukan-barang')?>">Pemasukan Barang</a></li>
                    </ul>
                </li>
              <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-settings"></i><span class="hide-menu">Manage</span></a>
                    <ul aria-expanded="false" class="collapse">
                      <li><a href="<?php echo base_url('manage-overview')?>">Overview</a></li>
                      <li><a href="<?php echo base_url('manage-divisi')?>">Tambah Divisi</a></li>
                      <li><a href="<?php echo base_url('manage-cabang')?>">Tambah Cabang</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
