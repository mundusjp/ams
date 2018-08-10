<?php

class TidakhabispakaiSeeder extends Seeder {

	public function run()
	{
		// $this->db->truncate('user');

		$data = [
			'id_inventory' => 2,
			'serial_id' => 'MEJ/1',
            'kondisi' => 'baik',
            'durability' => 5,
            'status' => 'ada',
		];
		$this->db->insert('tidakhabispakai', $data);
		
		$data = [
			'id_inventory' => 3,
			'serial_id' => 'MEJ/2',
            'kondisi' => 'baik',
            'durability' => 5,
            'status' => 'ada',
		];
        $this->db->insert('tidakhabispakai', $data);
        
	}

}