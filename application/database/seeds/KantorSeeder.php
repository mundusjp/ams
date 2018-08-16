<?php

class KantorSeeder extends Seeder {

	public function run()
	{
		// $this->db->truncate('kantor');

		$data = [
			'id_kantor' => 1,
			'nama_kantor' => 'IPC',
			'alamat' => 'Tanjung Priok',
			'status' => 1,
		];
		$this->db->insert('kantor', $data);

		$data = [
			'id_kantor' => 2,
			'nama_kantor' => 'IPC TPK',
			'alamat' => 'Tanjung Priok',
			'status' => 2,
		];
		$this->db->insert('kantor', $data);

		$data = [
			'id_kantor' => 3,
			'nama_kantor' => 'IPC PTP',
			'alamat' => 'Tanjung Priok',
			'status' => 2,
		];
		$this->db->insert('kantor', $data);
	}

}