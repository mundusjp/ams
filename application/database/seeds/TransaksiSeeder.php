<?php

class TransaksiSeeder extends Seeder {

	public function run()
	{
		// $this->db->truncate('user');

		$data = [
			'id_transaksi' => 1,
			'id_vendor' => 1,
			'id_kantor' => 1,
			'tanggal_transaksi' => '2018-07-01',
			'periode_start' => '',
            'periode_end' => '',
            'biaya' => 1000000,
            'deskripsi' => 'beli beli konsumsi',
            'jenis_transaksi' => 'beli',
            'no_nota' => '01/07/2018-01-IPC',
		];
		$this->db->insert('transaksi', $data);

		$data = [
			'id_transaksi' => 2,
			'id_vendor' => 2,
			'id_kantor' => 3,
			'tanggal_transaksi' => '2018-07-01',
			'periode_start' => '2018-07-01',
            'periode_end' => '2020-07-01',
            'biaya' => 50000000,
            'deskripsi' => 'sewa mobil',
            'jenis_transaksi' => 'sewa',
            'no_nota' => '01/07/2018-02-IPC PTP',
		];
		$this->db->insert('transaksi', $data);

		$data = [
			'id_transaksi' => 3,
			'id_vendor' => 3,
			'id_kantor' => 2,
			'tanggal_transaksi' => '2015-01-21',
			'periode_start' => '',
            'periode_end' => '',
            'biaya' => 15000000,
            'deskripsi' => 'beli meja direksi',
            'jenis_transaksi' => 'beli',
            'no_nota' => '01/07/2018-03-IPC TPK',
		];
		$this->db->insert('transaksi', $data);

		$data = [
			'id_transaksi' => 4,
			'id_vendor' => 3,
			'id_kantor' => 2,
			'tanggal_transaksi' => '2015-01-21',
			'periode_start' => '',
            'periode_end' => '',
            'biaya' => 16000000,
            'deskripsi' => 'beli meja manager',
            'jenis_transaksi' => 'beli',
            'no_nota' => '01/07/2018-04-IPC TPK',
		];
		$this->db->insert('transaksi', $data);

		$data = [
			'id_transaksi' => 5,
			'id_vendor' => 3,
			'id_kantor' => 2,
			'tanggal_transaksi' => '2015-01-21',
			'periode_start' => '',
            'periode_end' => '',
            'biaya' => 5000000,
            'deskripsi' => 'beli meja komisaris',
            'jenis_transaksi' => 'beli',
            'no_nota' => '01/07/2018-05-IPC TPK',
		];
		$this->db->insert('transaksi', $data);

		$data = [
			'id_transaksi' => 6,
			'id_vendor' => 3,
			'id_kantor' => 2,
			'tanggal_transaksi' => '2015-01-21',
			'periode_start' => '',
            'periode_end' => '',
            'biaya' => 32000000,
            'deskripsi' => 'beli meja staf',
            'jenis_transaksi' => 'beli',
            'no_nota' => '01/07/2018-06-IPC TPK',
		];
		$this->db->insert('transaksi', $data);

		$data = [
			'id_transaksi' => 7,
			'id_vendor' => 3,
			'id_kantor' => 2,
			'tanggal_transaksi' => '2015-01-21',
			'periode_start' => '',
            'periode_end' => '',
            'biaya' => 15000000,
            'deskripsi' => 'beli meja meeting direksi',
            'jenis_transaksi' => 'beli',
            'no_nota' => '01/07/2018-07-IPC TPK',
		];
		$this->db->insert('transaksi', $data);

		$data = [
			'id_transaksi' => 8,
			'id_vendor' => 3,
			'id_kantor' => 2,
			'tanggal_transaksi' => '2015-01-21',
			'periode_start' => '',
            'periode_end' => '',
            'biaya' => 5000000,
            'deskripsi' => 'beli meja receptionist',
            'jenis_transaksi' => 'beli',
            'no_nota' => '01/07/2018-08-IPC TPK',
		];
		$this->db->insert('transaksi', $data);

		$data = [
			'id_transaksi' => 9,
			'id_vendor' => 3,
			'id_kantor' => 2,
			'tanggal_transaksi' => '2015-01-21',
			'periode_start' => '',
            'periode_end' => '',
            'biaya' => 8000000,
            'deskripsi' => 'beli meja tamu',
            'jenis_transaksi' => 'beli',
            'no_nota' => '01/07/2018-09-IPC TPK',
		];
		$this->db->insert('transaksi', $data);
	}

}