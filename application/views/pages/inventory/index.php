<table border="1" width="100%">
    <tr>
		<th>Id Inventory</th>
		<th>Id Divisi Pengada</th>
		<th>Nama</th>
		<th>Jenis</th>
		<th>Merk</th>
		<th>Nama Divisi Pengada</th>
		<th>Tanggal</th>
		<th>Kategori</th>
		<th>Id Beli/sewa</th>
		<th>Actions</th>
    </tr>
	<?php foreach($inventory as $i){ ?>
    <tr>
		<td><?php echo $i['id_inventory']; ?></td>
		<td><?php echo $i['id_divisi_pengada']; ?></td>
		<td><?php echo $i['nama']; ?></td>
		<td><?php echo $i['jenis']; ?></td>
		<td><?php echo $i['merk']; ?></td>
		<td><?php echo $i['nama_divisi_pengada']; ?></td>
		<td><?php echo $i['tanggal']; ?></td>
		<td><?php echo $i['kategori']; ?></td>
		<td><?php echo $i['id_beli/sewa']; ?></td>
		<td>
            <a href="<?php echo site_url('inventory/edit/'.$i['id_inventory']); ?>">Edit</a> | 
            <a href="<?php echo site_url('inventory/remove/'.$i['id_inventory']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>