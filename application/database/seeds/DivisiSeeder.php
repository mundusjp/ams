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
			'nama_divisi' => 'Hukum',
			'gedung' => 'C',
            'lantai' => 1,
            'id_kantor' => 3,
		];
        $this->db->insert('divisi', $data);

        $data = [
			'id_divisi' => 4,
			'nama_divisi' => 'Audit',
			'gedung' => 'A',
            'lantai' => 2,
            'id_kantor' => 1,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 5,
			'nama_divisi' => 'Audit',
			'gedung' => 'B',
            'lantai' => 2,
            'id_kantor' => 2,
		];
		$this->db->insert('divisi', $data);
		
		$data = [
			'id_divisi' => 6,
			'nama_divisi' => 'Audit',
			'gedung' => 'C',
            'lantai' => 2,
            'id_kantor' => 3,
		];
        $this->db->insert('divisi', $data);
        
        $data = [
			'id_divisi' => 7,
			'nama_divisi' => 'Mesin dan Listrik',
			'gedung' => 'A',
            'lantai' => 3,
            'id_kantor' => 1,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 8,
			'nama_divisi' => 'Mesin dan Listrik',
			'gedung' => 'B',
            'lantai' => 3,
            'id_kantor' => 2,
		];
		$this->db->insert('divisi', $data);
		
		$data = [
			'id_divisi' => 9,
			'nama_divisi' => 'Mesin dan Listrik',
			'gedung' => 'C',
            'lantai' => 3,
            'id_kantor' => 3,
		];
        $this->db->insert('divisi', $data);
        
        $data = [
			'id_divisi' => 10,
			'nama_divisi' => 'Teknik',
			'gedung' => 'A',
            'lantai' => 2,
            'id_kantor' => 1,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 11,
			'nama_divisi' => 'Teknik',
			'gedung' => 'B',
            'lantai' => 2,
            'id_kantor' => 2,
		];
		$this->db->insert('divisi', $data);
		
		$data = [
			'id_divisi' => 12,
			'nama_divisi' => 'Teknik',
			'gedung' => 'C',
            'lantai' => 2,
            'id_kantor' => 3,
		];
        $this->db->insert('divisi', $data);
        
        $data = [
			'id_divisi' => 13,
			'nama_divisi' => 'Rumah Tangga',
			'gedung' => 'A',
            'lantai' => 5,
            'id_kantor' => 1,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 14,
			'nama_divisi' => 'Rumah Tangga',
			'gedung' => 'B',
            'lantai' => 5,
            'id_kantor' => 2,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 15,
			'nama_divisi' => 'Rumah Tangga',
			'gedung' => 'C',
            'lantai' => 5,
            'id_kantor' => 3,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 16,
			'nama_divisi' => 'Direktur Utama',
			'gedung' => 'B',
            'lantai' => 3,
            'id_kantor' => 2,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 17,
			'nama_divisi' => 'SDM',
			'gedung' => 'A',
            'lantai' => 2,
            'id_kantor' => 1,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 18,
			'nama_divisi' => 'SDM',
			'gedung' => 'B',
            'lantai' => 2,
            'id_kantor' => 2,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 19,
			'nama_divisi' => 'SDM',
			'gedung' => 'C',
            'lantai' => 2,
            'id_kantor' => 3,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 20,
			'nama_divisi' => 'Keuangan',
			'gedung' => 'A',
            'lantai' => 2,
            'id_kantor' => 1,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 21,
			'nama_divisi' => 'Keuangan',
			'gedung' => 'B',
            'lantai' => 2,
            'id_kantor' => 2,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 22,
			'nama_divisi' => 'Keuangan',
			'gedung' => 'C',
            'lantai' => 2,
            'id_kantor' => 3,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 23,
			'nama_divisi' => 'Corporate Secretary',
			'gedung' => 'A',
            'lantai' => 3,
            'id_kantor' => 1,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 24,
			'nama_divisi' => 'Corporate Secretary',
			'gedung' => 'B',
            'lantai' => 3,
            'id_kantor' => 2,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 25,
			'nama_divisi' => 'Corporate Secretary',
			'gedung' => 'C',
            'lantai' => 3,
            'id_kantor' => 3,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 26,
			'nama_divisi' => 'Pengembangan Bisnis',
			'gedung' => 'A',
            'lantai' => 3,
            'id_kantor' => 1,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 27,
			'nama_divisi' => 'Pengembangan Bisnis',
			'gedung' => 'B',
            'lantai' => 3,
            'id_kantor' => 2,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 28,
			'nama_divisi' => 'Pengembangan Bisnis',
			'gedung' => 'C',
            'lantai' => 3,
            'id_kantor' => 3,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 29,
			'nama_divisi' => 'Komisaris',
			'gedung' => 'A',
            'lantai' => 4,
            'id_kantor' => 1,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 30,
			'nama_divisi' => 'Komisaris',
			'gedung' => 'B',
            'lantai' => 4,
            'id_kantor' => 2,
		];
		$this->db->insert('divisi', $data);

		$data = [
			'id_divisi' => 31,
			'nama_divisi' => 'Komisaris',
			'gedung' => 'C',
            'lantai' => 4,
            'id_kantor' => 3,
		];
		$this->db->insert('divisi', $data);
	}

}