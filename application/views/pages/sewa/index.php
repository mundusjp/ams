<table border="1" width="100%">
    <tr>
		<th>Id Sewa</th>
		<th>Id Supplier</th>
		<th>Tanggal Transaksi</th>
		<th>Periode Start</th>
		<th>Periode End</th>
		<th>Biaya</th>
		<th>Deskripsi</th>
		<th>Actions</th>
    </tr>
	<?php foreach($sewa as $s){ ?>
    <tr>
		<td><?php echo $s['id_sewa']; ?></td>
		<td><?php echo $s['id_supplier']; ?></td>
		<td><?php echo $s['tanggal_transaksi']; ?></td>
		<td><?php echo $s['periode_start']; ?></td>
		<td><?php echo $s['periode_end']; ?></td>
		<td><?php echo $s['biaya']; ?></td>
		<td><?php echo $s['deskripsi']; ?></td>
		<td>
            <a href="<?php echo site_url('sewa/edit/'.$s['id_sewa']); ?>">Edit</a> | 
            <a href="<?php echo site_url('sewa/remove/'.$s['id_sewa']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
