<table border="1" width="100%">
    <tr>
		<th>Id Pemeliharaan</th>
		<th>Id Inventory</th>
		<th>Biaya</th>
		<th>Tanggal</th>
		<th>Deskripsi</th>
		<th>Actions</th>
    </tr>
	<?php foreach($pemeliharaan as $p){ ?>
    <tr>
		<td><?php echo $p['id_pemeliharaan']; ?></td>
		<td><?php echo $p['id_inventory']; ?></td>
		<td><?php echo $p['biaya']; ?></td>
		<td><?php echo $p['tanggal']; ?></td>
		<td><?php echo $p['deskripsi']; ?></td>
		<td>
            <a href="<?php echo site_url('pemeliharaan/edit/'.$p['id_pemeliharaan']); ?>">Edit</a> | 
            <a href="<?php echo site_url('pemeliharaan/remove/'.$p['id_pemeliharaan']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
