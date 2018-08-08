<?php

class DivisiSeeder extends Seeder {

	public function run()
	{
		// $this->db->truncate('divisi');

		$data = [
			'id_divisi' => 1,
			'nama_divisi' => 'Hukum',
			'gedung' => 'A',
            'lantai' => 1,
            'id_kantor' => 1,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 2,
			'nama_divisi' => 'Hukum',
			'gedung' => 'B',
            'lantai' => 1,
            'id_kantor' => 2,
		];
        $this->db->insert('divisi', $data);

        $data = [
			'id_divisi' => 3,
			'nama_divisi' => 'Audit',
			'gedung' => 'A',
            'lantai' => 2,
            'id_kantor' => 1,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 4,
			'nama_divisi' => 'Audit',
			'gedung' => 'B',
            'lantai' => 2,
            'id_kantor' => 2,
		];
        $this->db->insert('divisi', $data);
        
        $data = [
			'id_divisi' => 5,
			'nama_divisi' => 'Mesin dan Listrik',
			'gedung' => 'A',
            'lantai' => 3,
            'id_kantor' => 1,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 6,
			'nama_divisi' => 'Mesin dan Listrik',
			'gedung' => 'B',
            'lantai' => 3,
            'id_kantor' => 2,
		];
        $this->db->insert('divisi', $data);
        
        $data = [
			'id_divisi' => 7,
			'nama_divisi' => 'Teknik',
			'gedung' => 'A',
            'lantai' => 4,
            'id_kantor' => 1,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 8,
			'nama_divisi' => 'Teknik',
			'gedung' => 'B',
            'lantai' => 4,
            'id_kantor' => 2,
		];
        $this->db->insert('divisi', $data);
        
        $data = [
			'id_divisi' => 9,
			'nama_divisi' => 'Rumah Tangga',
			'gedung' => 'A',
            'lantai' => 5,
            'id_kantor' => 1,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 10,
			'nama_divisi' => 'Rumah Tangga',
			'gedung' => 'B',
            'lantai' => 5,
            'id_kantor' => 2,
		];
		$this->db->insert('divisi', $data);
	}

}