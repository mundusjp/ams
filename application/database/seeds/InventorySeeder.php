<?php

class InventorySeeder extends Seeder {

	public function run()
	{
		// $this->db->truncate('user');

		$data = [
			'id_inventory' => 1,
			'nama' => 'Gula',
			'jenis' => '1',
			'merk' => 'Gulaku',
            'nama_divisi_pengada' => 'Rumah Tangga',
            'id_divisi_penerima' => 6,
            'tanggal' => '2018-08-09',
            'kategori' => 'beli',
            'id_transaksi' => 1,
            'harga' => 12000,
		];
		$this->db->insert('inventory', $data);

		$data = [
			'id_inventory' => 2,
			'nama' => 'Meja',
			'jenis' => '2',
			'merk' => 'Informa',
            'nama_divisi_pengada' => 'Rumah Tangga',
            'id_divisi_penerima' => 7,
            'tanggal' => '2018-08-09',
            'kategori' => 'sewa',
            'id_transaksi' => 2,
            'harga' => 2500000,
		];
		$this->db->insert('inventory', $data);

	}

}