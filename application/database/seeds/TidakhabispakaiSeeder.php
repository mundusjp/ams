<?php

class TidakhabispakaiSeeder extends Seeder {

	public function run()
	{
		// $this->db->truncate('user');

		$data = [
			'id_inventory' => 3,
			'serial_id' => 'IPC PTP - MOB - 3 - 18',
            'kondisi' => 'baik',
            'durability' => '24',
            'status' => 'ada',
		];
		$this->db->insert('tidakhabispakai', $data);
		
		$data = [
			'id_inventory' => 4,
			'serial_id' => 'IPC TPK - MKD - 4 - 15',
            'kondisi' => 'baik',
            'durability' => NULL,
            'status' => 'ada',
		];
		$this->db->insert('tidakhabispakai', $data);
		
		$data = [
			'id_inventory' => 5,
			'serial_id' => 'IPC TPK - MKD - 5 - 15',
            'kondisi' => 'baik',
            'durability' => NULL,
            'status' => 'ada',
		];
		$this->db->insert('tidakhabispakai', $data);
		
		$data = [
			'id_inventory' => 6,
			'serial_id' => 'IPC TPK - MKD - 6 - 15',
            'kondisi' => 'baik',
            'durability' => NULL,
            'status' => 'ada',
		];
		$this->db->insert('tidakhabispakai', $data);
		
		$data = [
			'id_inventory' => 7,
			'serial_id' => 'IPC TPK - MKM - 7 - 15',
            'kondisi' => 'baik',
            'durability' => NULL,
            'status' => 'ada',
		];
		$this->db->insert('tidakhabispakai', $data);
		
		$data = [
			'id_inventory' => 8,
			'serial_id' => 'IPC TPK - MKM - 8 - 15',
            'kondisi' => 'baik',
            'durability' => NULL,
            'status' => 'ada',
		];
		$this->db->insert('tidakhabispakai', $data);
		
		$data = [
			'id_inventory' => 9,
			'serial_id' => 'IPC TPK - MKM - 9 - 15',
            'kondisi' => 'baik',
            'durability' => NULL,
            'status' => 'ada',
		];
        $this->db->insert('tidakhabispakai', $data);
		
		$data = [
			'id_inventory' => 10,
			'serial_id' => 'IPC TPK - MKM - 10 - 15',
            'kondisi' => 'baik',
            'durability' => NULL,
            'status' => 'ada',
		];
		$this->db->insert('tidakhabispakai', $data);
		
		$data = [
			'id_inventory' => 11,
			'serial_id' => 'IPC TPK - MKM - 11 - 15',
            'kondisi' => 'baik',
            'durability' => NULL,
            'status' => 'ada',
		];
		$this->db->insert('tidakhabispakai', $data);
		
		$data = [
			'id_inventory' => 12,
			'serial_id' => 'IPC TPK - MKK - 12 - 15',
            'kondisi' => 'baik',
            'durability' => NULL,
            'status' => 'ada',
		];
		$this->db->insert('tidakhabispakai', $data);
		
		$data = [
			'id_inventory' => 13,
			'serial_id' => 'IPC TPK - MKS - 13 - 15',
            'kondisi' => 'baik',
            'durability' => NULL,
            'status' => 'ada',
		];
		$this->db->insert('tidakhabispakai', $data);
		
		$data = [
			'id_inventory' => 14,
			'serial_id' => 'IPC TPK - MKS - 14 - 15',
            'kondisi' => 'baik',
            'durability' => NULL,
            'status' => 'ada',
		];
		$this->db->insert('tidakhabispakai', $data);
		
		$data = [
			'id_inventory' => 15,
			'serial_id' => 'IPC TPK - MKS - 15 - 15',
            'kondisi' => 'baik',
            'durability' => NULL,
            'status' => 'ada',
		];
		$this->db->insert('tidakhabispakai', $data);
		
		$data = [
			'id_inventory' => 16,
			'serial_id' => 'IPC TPK - MMD - 16 - 15',
            'kondisi' => 'baik',
            'durability' => NULL,
            'status' => 'ada',
		];
		$this->db->insert('tidakhabispakai', $data);
		
		$data = [
			'id_inventory' => 17,
			'serial_id' => 'IPC TPK - MMD - 17 - 15',
            'kondisi' => 'baik',
            'durability' => NULL,
            'status' => 'ada',
		];
		$this->db->insert('tidakhabispakai', $data);
		
		$data = [
			'id_inventory' => 18,
			'serial_id' => 'IPC TPK - MMD - 18 - 15',
            'kondisi' => 'baik',
            'durability' => NULL,
            'status' => 'ada',
		];
		$this->db->insert('tidakhabispakai', $data);
		
		$data = [
			'id_inventory' => 19,
			'serial_id' => 'IPC TPK - MTK - 19 - 15',
            'kondisi' => 'baik',
            'durability' => NULL,
            'status' => 'ada',
		];
		$this->db->insert('tidakhabispakai', $data);
		
		$data = [
			'id_inventory' => 20,
			'serial_id' => 'IPC TPK - MTD - 20 - 15',
            'kondisi' => 'baik',
            'durability' => NULL,
            'status' => 'ada',
		];
        $this->db->insert('tidakhabispakai', $data);
	}

}