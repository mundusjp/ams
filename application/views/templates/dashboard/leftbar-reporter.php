<ul id="sidebarnav">
    <li class="user-pro"> <a aria-expanded="false"><img src="<?php echo base_url('assets/vertical/images/users/manager.png')?>" alt="user-img" class="img-circle"><span class="hide-menu">Master</span></a></li>
    <br>
      <li> <a class="waves-effect waves-dark" href="<?php echo base_url('home')?>" aria-expanded="false"><i class="icon-home"></i><span class="hide-menu">Home</span></a></li>
      <li> <a class="waves-effect waves-dark" href="<?php echo base_url('penggunaan/index')?>" aria-expanded="false"><i class="icon-chart"></i><span class="hide-menu">Division Usage</span></a></li>
      <li> <a class="waves-effect waves-dark" href="<?php echo base_url('kebutuhan/index')?>" aria-expanded="false"><i class="icon-bag"></i><span class="hide-menu">Purchase List</span></a></li>
      <li> <a class="waves-effect waves-dark" href="<?php echo base_url('supplier/index')?>" aria-expanded="false"><i class="icon-basket-loaded"></i><span class="hide-menu">Supplier</span></a></li>
      <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-social-dropbox"></i><span class="hide-menu">Inventory</span></a>
        <ul aria-expanded="false" class="collapse">
            <li><a href="<?php echo base_url('inventory/overview')?>">Overview</a></li>
            <li><a href="<?php echo base_url('inventory/bhp')?>">Barang Habis Pakai</a></li>
            <li><a href="<?php echo base_url('inventory/bthp')?>">Barang Tidak Habis Pakai</a></li>
        </ul>
      </li>
      <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-note"></i><span class="hide-menu">Manage Stock</span></a>
        <ul aria-expanded="false" class="collapse">
            <li><a href="<?php echo base_url('stock/pembelian')?>">Stock Pembelian</a></li>
            <li><a href="<?php echo base_url('stock/penyewaan')?>">Stock Penyewaan</a></li>
            <li><a href="<?php echo base_url('stock/pemeliharaan')?>">Pemeliharaan Stock</a></li>
        </ul>
      </li>
    </ul>
