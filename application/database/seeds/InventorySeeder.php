5<?php

class InventorySeeder extends Seeder {

	public function run()
	{
		// $this->db->truncate('user');

		$data = [
			'id_inventory' => 1,
			'nama' => 'Gula',
			'jenis' => '1',
			'merk' => 'Gulaku',
            'nama_divisi_pengada' => 'IPC - Rumah Tangga',
            'id_divisi_penerima' => 4,
            'tanggal' => '2018-07-01',
            'kategori' => 'beli',
            'id_transaksi' => 1,
            'harga' => 12000,
		];
		$this->db->insert('inventory', $data);

		$data = [
			'id_inventory' => 2,
			'nama' => 'Teh',
			'jenis' => '1',
			'merk' => 'Sari Wangi',
            'nama_divisi_pengada' => 'IPC - Rumah Tangga',
            'id_divisi_penerima' => 4,
            'tanggal' => '2018-07-01',
            'kategori' => 'beli',
            'id_transaksi' => 1,
            'harga' => 20000,
		];
		$this->db->insert('inventory', $data);

		$data = [
			'id_inventory' => 3,
			'nama' => 'Mobil',
			'jenis' => '2',
			'merk' => 'Toyota',
            'nama_divisi_pengada' => 'IPC PTP - Teknik',
            'id_divisi_penerima' => 6,
            'tanggal' => '2018-07-01',
            'kategori' => 'sewa',
            'id_transaksi' => 2,
            'harga' => 25000000,
		];
		$this->db->insert('inventory', $data);

		$data = [
			'id_inventory' => 4,
			'nama' => 'Meja Kerja Direktur Utama',
			'jenis' => '2',
			'merk' => 'Informa',
            'nama_divisi_pengada' => 'IPC TPK - SDM',
            'id_divisi_penerima' => 16,
            'tanggal' => '2015-01-21',
            'kategori' => 'beli',
            'id_transaksi' => 3,
            'harga' => 5000000,
		];
		$this->db->insert('inventory', $data);

		$data = [
			'id_inventory' => 5,
			'nama' => 'Meja Kerja Direktur SDM & Keuangan',
			'jenis' => '2',
			'merk' => 'Informa',
            'nama_divisi_pengada' => 'IPC TPK - SDM',
            'id_divisi_penerima' => 18,
            'tanggal' => '2015-01-21',
            'kategori' => 'beli',
            'id_transaksi' => 3,
            'harga' => 5000000,
		];
		$this->db->insert('inventory', $data);

		$data = [
			'id_inventory' => 6,
			'nama' => 'Meja Kerja Direktur Operasi & Teknik',
			'jenis' => '2',
			'merk' => 'Informa',
            'nama_divisi_pengada' => 'IPC TPK - SDM',
            'id_divisi_penerima' => 11,
            'tanggal' => '2015-01-21',
            'kategori' => 'beli',
            'id_transaksi' => 3,
            'harga' => 5000000,
		];
		$this->db->insert('inventory', $data);

		$data = [
			'id_inventory' => 7,
			'nama' => 'Meja Kerja Manager SDM',
			'jenis' => '2',
			'merk' => 'Informa',
            'nama_divisi_pengada' => 'IPC TPK - SDM',
            'id_divisi_penerima' => 18,
            'tanggal' => '2015-01-21',
            'kategori' => 'beli',
            'id_transaksi' => 4,
            'harga' => 4000000,
		];
		$this->db->insert('inventory', $data);

		$data = [
			'id_inventory' => 8,
			'nama' => 'Meja Kerja Manager Keuangan',
			'jenis' => '2',
			'merk' => 'Informa',
            'nama_divisi_pengada' => 'IPC TPK - SDM',
            'id_divisi_penerima' => 21,
            'tanggal' => '2015-01-21',
            'kategori' => 'beli',
            'id_transaksi' => 4,
            'harga' => 4000000,
		];
		$this->db->insert('inventory', $data);

		$data = [
			'id_inventory' => 9,
			'nama' => 'Meja Kerja Manager Corporate Secretary',
			'jenis' => '2',
			'merk' => 'Informa',
            'nama_divisi_pengada' => 'IPC TPK - SDM',
            'id_divisi_penerima' => 24,
            'tanggal' => '2015-01-21',
            'kategori' => 'beli',
            'id_transaksi' => 4,
            'harga' => 4000000,
		];
		$this->db->insert('inventory', $data);

		$data = [
			'id_inventory' => 10,
			'nama' => 'Meja Kerja Manager Pengembangan Bisnis',
			'jenis' => '2',
			'merk' => 'Informa',
            'nama_divisi_pengada' => 'IPC TPK - SDM',
            'id_divisi_penerima' => 27,
            'tanggal' => '2015-01-21',
            'kategori' => 'beli',
            'id_transaksi' => 4,
            'harga' => 4000000,
		];
		$this->db->insert('inventory', $data);

		$data = [
			'id_inventory' => 11,
			'nama' => 'Meja Kerja Manager Teknik',
			'jenis' => '2',
			'merk' => 'Informa',
            'nama_divisi_pengada' => 'IPC TPK - SDM',
            'id_divisi_penerima' => 11,
            'tanggal' => '2015-01-21',
            'kategori' => 'beli',
            'id_transaksi' => 4,
            'harga' => 4000000,
		];
		$this->db->insert('inventory', $data);

		$data = [
			'id_inventory' => 12,
			'nama' => 'Meja Kerja Komisaris',
			'jenis' => '2',
			'merk' => 'Informa',
            'nama_divisi_pengada' => 'IPC TPK - SDM',
            'id_divisi_penerima' => 30,
            'tanggal' => '2015-01-21',
            'kategori' => 'beli',
            'id_transaksi' => 5,
            'harga' => 5000000,
		];
		$this->db->insert('inventory', $data);

		$data = [
			'id_inventory' => 13,
			'nama' => 'Meja Kerja Staf 1',
			'jenis' => '2',
			'merk' => 'Informa',
            'nama_divisi_pengada' => 'IPC TPK - SDM',
            'id_divisi_penerima' => 2,
            'tanggal' => '2015-01-21',
            'kategori' => 'beli',
            'id_transaksi' => 6,
            'harga' => 2000000,
		];
		$this->db->insert('inventory', $data);

		$data = [
			'id_inventory' => 14,
			'nama' => 'Meja Kerja Staf 2',
			'jenis' => '2',
			'merk' => 'Informa',
            'nama_divisi_pengada' => 'IPC TPK - SDM',
            'id_divisi_penerima' => 5,
            'tanggal' => '2015-01-21',
            'kategori' => 'beli',
            'id_transaksi' => 6,
            'harga' => 2000000,
		];
		$this->db->insert('inventory', $data);

		$data = [
			'id_inventory' => 15,
			'nama' => 'Meja Kerja Staf 3',
			'jenis' => '2',
			'merk' => 'Informa',
            'nama_divisi_pengada' => 'IPC TPK - SDM',
            'id_divisi_penerima' => 8,
            'tanggal' => '2015-01-21',
            'kategori' => 'beli',
            'id_transaksi' => 6,
            'harga' => 2000000,
		];
		$this->db->insert('inventory', $data);

		$data = [
			'id_inventory' => 16,
			'nama' => 'Meja Meeting Direktur Utama',
			'jenis' => '2',
			'merk' => 'Informa',
            'nama_divisi_pengada' => 'IPC TPK - SDM',
            'id_divisi_penerima' => 16,
            'tanggal' => '2015-01-21',
            'kategori' => 'beli',
            'id_transaksi' => 7,
            'harga' => 5000000,
		];
		$this->db->insert('inventory', $data);

		$data = [
			'id_inventory' => 17,
			'nama' => 'Meja Meeting Direktur SDM & Keuangan',
			'jenis' => '2',
			'merk' => 'Informa',
            'nama_divisi_pengada' => 'IPC TPK - SDM',
            'id_divisi_penerima' => 16,
            'tanggal' => '2015-01-21',
            'kategori' => 'beli',
            'id_transaksi' => 7,
            'harga' => 5000000,
		];
		$this->db->insert('inventory', $data);

		$data = [
			'id_inventory' => 18,
			'nama' => 'Meja Meeting Direktur Operasi & Teknik',
			'jenis' => '2',
			'merk' => 'Informa',
            'nama_divisi_pengada' => 'IPC TPK - SDM',
            'id_divisi_penerima' => 11,
            'tanggal' => '2015-01-21',
            'kategori' => 'beli',
            'id_transaksi' => 7,
            'harga' => 5000000,
		];
		$this->db->insert('inventory', $data);

		$data = [
			'id_inventory' => 19,
			'nama' => 'Meja Tamu Komisaris',
			'jenis' => '2',
			'merk' => 'Informa',
            'nama_divisi_pengada' => 'IPC TPK - SDM',
            'id_divisi_penerima' => 30,
            'tanggal' => '2015-01-21',
            'kategori' => 'beli',
            'id_transaksi' => 9,
            'harga' => 4000000,
		];
		$this->db->insert('inventory', $data);

		$data = [
			'id_inventory' => 20,
			'nama' => 'Meja Tamu Direktur Utama',
			'jenis' => '2',
			'merk' => 'Informa',
            'nama_divisi_pengada' => 'IPC TPK - SDM',
            'id_divisi_penerima' => 16,
            'tanggal' => '2015-01-21',
            'kategori' => 'beli',
            'id_transaksi' => 9,
            'harga' => 4000000,
		];
		$this->db->insert('inventory', $data);
	}

}