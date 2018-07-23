<center>
		<h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($inventory as $u){ ?>
	<form action="<?php echo base_url(). 'inventories/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="id_inventory" value="<?php echo $u->id_inventory ?>">
					<input type="text" name="nama" value="<?php echo $u->nama ?>">
				</td>
			</tr>
			<tr>
				<td>jenis</td>
				<td><input type="text" name="jenis" value="<?php echo $u->jenis ?>"></td>
			</tr>
            <tr>
				<td>merk</td>
				<td><input type="text" name="merk" value="<?php echo $u->merk ?>"></td>
			</tr>
            <tr>
				<td>nama_divisi_pengada</td>
				<td><input type="text" name="nama_divisi_pengada" value="<?php echo $u->nama_divisi_pengada ?>"></td>
			</tr>
			<tr>
				<td>kategori</td>
				<td><input type="text" name="kategori" value="<?php echo $u->kategori ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
    