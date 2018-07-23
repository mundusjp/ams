
		<center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>
	<center><?php echo anchor('inventories/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Jenis</th>
			<th>merk</th>
			<th>nama_divisi_pengada</th>
			<th>id_divisi_pengada</th>
			<th>tanggal</th>
			<th>kategori</th>
			<th>id_beli/sewa</th>
		</tr>
		<?php $no = 1;foreach($inventory as $u){?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->jenis ?></td>
            <td><?php echo $u->merk ?></td>
            <td><?php echo $u->nama_divisi_pengada ?></td>
            <td><?php echo $u->id_divisi_pengada ?></td>
            <td><?php echo $u->tanggal ?></td>
            <td><?php echo $u->kategori ?></td>
			
			<td>
			     <?php echo anchor('inventories/edit/'.$u->id_inventory,'Edit'); ?>
                  <?php echo anchor('inventories/hapus/'.$u->id_inventory,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
	</table>