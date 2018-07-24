<table border="1" width="100%">
    <tr>
		<th>Id Supplier</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Actions</th>
    </tr>
	<?php foreach($supplier as $s){ ?>
    <tr>
		<td><?php echo $s['id_supplier']; ?></td>
		<td><?php echo $s['nama']; ?></td>
		<td><?php echo $s['alamat']; ?></td>
		<td>
            <a href="<?php echo site_url('supplier/edit/'.$s['id_supplier']); ?>">Edit</a> | 
            <a href="<?php echo site_url('supplier/remove/'.$s['id_supplier']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
