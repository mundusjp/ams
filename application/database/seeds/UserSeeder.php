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
			'id_divisi' => 13,
			'no_hp' => '082276418876',
			'alamat' => 'Swasembada Barat',
			'email' => 'dilanoviaa@gmail.com',
			'photo' => NULL,
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
			'photo' => NULL,
		];
		$this->db->insert('user', $data);

		$data = [
			'id_user' => 3,
			'username' => 'rapipet',
			'password' => 'lululu',
			'nama' => 'Thirafi Aufar Idris',
			'nipp' => 'G64150069',
			'jabatan' => 'staff',
			'status' => 2,
			'id_divisi' => 15,
			'no_hp' => '087788990000',
			'alamat' => 'Jakarta',
			'email' => 'rapipet@gmail.com',
			'photo' => NULL,
		];
		$this->db->insert('user', $data);

		$data = [
			'id_user' => 4,
			'username' => 'mundus',
			'password' => 'lelele',
			'nama' => 'Raymundus Jati Primanda',
			'nipp' => 'G64150106',
			'jabatan' => 'staff',
			'status' => 2,
			'id_divisi' => 12,
			'no_hp' => '081213141516',
			'alamat' => 'Jakarta',
			'email' => 'mundus@gmail.com',
			'photo' => NULL,
		];
		$this->db->insert('user', $data);
	}

}