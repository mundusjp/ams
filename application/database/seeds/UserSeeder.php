<?php

class UserSeeder extends Seeder {

	public function run()
	{
		// $this->db->truncate('user');

		$data = [
			'id_user' => 1,
			'username' => 'dilanoviaa',
			'password' => 'lalala',
			'nama' => 'Dila Novia',
			'nipp' => 'G64150108',
			'jabatan' => 'staff',
			'status' => 1,
			'id_divisi' => 9,
			'no_hp' => '082276418876',
			'alamat' => 'Swasembada Barat',
			'email' => 'dilanoviaa@gmail.com',
			'photo' => 'hahaha',
		];
		$this->db->insert('user', $data);

		$data = [
			'id_user' => 2,
			'username' => 'fargit',
			'password' => 'lilili',
			'nama' => 'Farah Ghita',
			'nipp' => 'G64150071',
			'jabatan' => 'staff',
			'status' => 2,
			'id_divisi' => 10,
			'no_hp' => '087870853700',
			'alamat' => 'Jakarta',
			'email' => 'fargit@gmail.com',
			'photo' => 'hihihi',
		];
		$this->db->insert('user', $data);

	}

}