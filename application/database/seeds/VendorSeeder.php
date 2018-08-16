<?php

class VendorSeeder extends Seeder {

	public function run()
	{
		// $this->db->truncate('user');

		$data = [
			'id_vendor' => 1,
			'nama' => 'Toko Sentosa',
			'alamat' => 'Bogor',
			'no_hp' => '081361268286',
			'email' => 'sentosajaya@gmail.com',
		];
		$this->db->insert('vendor', $data);

		$data = [
			'id_vendor' => 2,
			'nama' => 'Toko Makmur',
			'alamat' => 'Palembang',
			'no_hp' => '081361268211',
			'email' => 'makmurjaya@gmail.com',
		];
		$this->db->insert('vendor', $data);

		$data = [
			'id_vendor' => 3,
			'nama' => 'Toko Informa',
			'alamat' => 'Jakarta Pusat',
			'no_hp' => '081534362728',
			'email' => 'informa@gmail.com',
		];
		$this->db->insert('vendor', $data);

	}

}