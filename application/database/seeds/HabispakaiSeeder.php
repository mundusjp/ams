<?php

class HabispakaiSeeder extends Seeder {

	public function run()
	{
		// $this->db->truncate('user');

		$data = [
			'id_inventory' => 1,
			'jumlah' => 50,
			'satuan' => 'kg',
		];
		$this->db->insert('habispakai', $data);
		
		$data = [
			'id_inventory' => 2,
			'jumlah' => 50,
			'satuan' => 'kotak',
		];
        $this->db->insert('habispakai', $data);
        
	}

}