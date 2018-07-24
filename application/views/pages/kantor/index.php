<table border="1" width="100%">
    <tr>
		<th>Id Kantor</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Status</th>
		<th>Actions</th>
    </tr>
	<?php foreach($kantor as $k){ ?>
    <tr>
		<td><?php echo $k['id_kantor']; ?></td>
		<td><?php echo $k['nama']; ?></td>
		<td><?php echo $k['alamat']; ?></td>
		<td><?php echo $k['status']; ?></td>
		<td>
            <a href="<?php echo site_url('kantor/edit/'.$k['id_kantor']); ?>">Edit</a> | 
            <a href="<?php echo site_url('kantor/remove/'.$k['id_kantor']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
