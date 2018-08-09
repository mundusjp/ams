<?php

class TransaksiSeeder extends Seeder {

	public function run()
	{
		// $this->db->truncate('user');

		$data = [
			'id_transaksi' => 1,
			'id_vendor' => 1,
			'tanggal_transaksi' => '2018-08-08',
			'periode_start' => '',
            'periode_end' => '',
            'biaya' => 1000000,
            'deskripsi' => 'beli beli barang dapur',
            'jenis_transaksi' => 'beli',
            'no_nota' => '12/BBBD/',
		];
		$this->db->insert('transaksi', $data);

		$data = [
			'id_transaksi' => 2,
			'id_vendor' => 2,
			'tanggal_transaksi' => '2018-08-08',
			'periode_start' => '2018-08-08',
            'periode_end' => '2020-08-08',
            'biaya' => 5000000,
            'deskripsi' => 'sewa meja',
            'jenis_transaksi' => 'sewa',
            'no_nota' => '14/SWMJ',
		];
		$this->db->insert('transaksi', $data);

	}

}