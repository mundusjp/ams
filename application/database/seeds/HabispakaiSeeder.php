<?php

class HabispakaiSeeder extends Seeder {

	public function run()
	{
		// $this->db->truncate('user');

		$data = [
			'id_inventory' => 1,
			'jumlah' => 100,
			'satuan' => 'kg',
		];
        $this->db->insert('habispakai', $data);
        
	}

}