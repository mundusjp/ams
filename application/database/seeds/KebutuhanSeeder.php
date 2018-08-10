<?php

class KebutuhanSeeder extends Seeder {

	public function run()
	{
		// $this->db->truncate('user');

		$data = [
			'id_kebutuhan' => 1,
			'nama_barang' => 'Laptop',
			'jumlah' => '20',
			'id_divisi' => '1',
            'id_user' => '1',
            'satuan' => 'Buah',
            'created_at' => '2018-08-10',
		];
		$this->db->insert('kebutuhan', $data);

		$data = [
			'id_kebutuhan' => 2,
			'nama_barang' => 'Aqua',
			'jumlah' => '100',
			'id_divisi' => '4',
            'id_user' => '1',
            'satuan' => 'Buah',
            'created_at' => '2018-08-10',
		];
        $this->db->insert('kebutuhan', $data);
        
		$data = [
			'id_kebutuhan' => 3,
			'nama_barang' => 'AC',
			'jumlah' => '3',
			'id_divisi' => '5',
            'id_user' => '1',
            'satuan' => 'Buah',
            'created_at' => '2018-08-10',
		];
		$this->db->insert('kebutuhan', $data);

	}

}