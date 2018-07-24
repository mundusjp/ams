<table border="1" width="100%">
    <tr>
		<th>Id Divisi</th>
		<th>Id Kantor</th>
		<th>Nama</th>
		<th>Gedung</th>
		<th>Lantai</th>
		<th>Actions</th>
    </tr>
	<?php foreach($divisi as $d){ ?>
    <tr>
		<td><?php echo $d['id_divisi']; ?></td>
		<td><?php echo $d['id_kantor']; ?></td>
		<td><?php echo $d['nama']; ?></td>
		<td><?php echo $d['gedung']; ?></td>
		<td><?php echo $d['lantai']; ?></td>
		<td>
            <a href="<?php echo site_url('divisi/edit/'.$d['id_divisi']); ?>">Edit</a> | 
            <a href="<?php echo site_url('divisi/remove/'.$d['id_divisi']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
