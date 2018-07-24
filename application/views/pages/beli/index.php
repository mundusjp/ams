<table border="1" width="100%">
    <tr>
		<th>Id Beli</th>
		<th>Id Supplier</th>
		<th>Tanggal Transaksi</th>
		<th>Total Harga</th>
		<th>Deskripsi</th>
		<th>Actions</th>
    </tr>
	<?php foreach($beli as $b){ ?>
    <tr>
		<td><?php echo $b['id_beli']; ?></td>
		<td><?php echo $b['id_supplier']; ?></td>
		<td><?php echo $b['tanggal_transaksi']; ?></td>
		<td><?php echo $b['total_harga']; ?></td>
		<td><?php echo $b['deskripsi']; ?></td>
		<td>
            <a href="<?php echo site_url('beli/edit/'.$b['id_beli']); ?>">Edit</a> | 
            <a href="<?php echo site_url('beli/remove/'.$b['id_beli']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
