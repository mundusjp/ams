<?php

class Inventory extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Inventory_model');
        $this->load->model('Habis_model');
        $this->load->model('TidakHabis_model');
        $this->load->model('Kantor_model');
        $this->load->model('Divisi_model');
        $this->load->model('Admin_model');
        $this->load->model('Kebutuhan_model');
    }

    /*
     * Listing of inventory
     */
    function overview()
    {
        $id_user = $this->session->userdata('id_user');
        $by_kantor = $this->input->post('pilih_cabang');
        $id_divisi = $this->session->userdata('id_divisi');
        $kantor = $this->Kantor_model->get_kantor_by_divisi($id_divisi);
        foreach ($kantor as $k) {
          $id_kantor = $k['id_kantor'];
        }
        if($by_kantor == 0){
          $data['inventory'] = $this->Inventory_model->get_all_inventory();
        }
        else{
          $data['inventory'] = $this->Inventory_model->get_inventory_by_kantor($by_kantor);
        }
        $data['inventory2'] = $this->Inventory_model->get_inventory_by_kantor($id_kantor);
        $data['all_kantor'] = $this->Kantor_model->get_all_kantor();
        $data['all_divisi'] = $this->Divisi_model->get_all_divisi();
        $data['user'] = $this->Admin_model->get_admin($id_user);

        $data['_view'] = 'inventory/index';
        $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/topbar');
      $this->load->view('templates/dashboard/leftbar');
      // $this->load->view('templates/dashboard/rightbar');
      $this->load->view('pages/inventory/index',$data);
      $this->load->view('templates/dashboard/footer');

    }
    function bhp()
    {
        $data['inventory'] = $this->Inventory_model->get_all_inventory();
        $data['habis'] = $this->Habis_model->join();
        $id_divisi = $this->session->userdata('id_divisi');
        $kantor = $this->Kantor_model->get_kantor_by_divisi($id_divisi);
        foreach ($kantor as $k) {
          $id_kantor = $k['id_kantor'];
        }
        $data['all_divisi'] = $this->Divisi_model->get_all_divisi();
        $data['_view'] = 'inventory/index';
        $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/topbar');
      $this->load->view('templates/dashboard/leftbar');
      // $this->load->view('templates/dashboard/rightbar');
      $this->load->view('pages/habis/index',$data);
      $this->load->view('templates/dashboard/footer');

    }
    function bthp()
    {
        $data['inventory'] = $this->Inventory_model->get_all_inventory();
        $data['tidakhabis'] = $this->TidakHabis_model->join();
        $status = $this->session->userdata('level');
        $id_divisi = $this->session->userdata('id_divisi');
        $kantor = $this->Kantor_model->get_kantor_by_divisi($id_divisi);
        if($status == 1){
          $data['all_divisi'] = $this->Divisi_model->get_all_divisi_by_kantor();
        }
        else if($status == 2){
          foreach ($kantor as $k) {
            $id_kantor = $k['id_kantor'];
          }
          $data['all_divisi'] = $this->Divisi_model->get_divisi_by_kantor($id_kantor);
        }
        $data['_view'] = 'inventory/index';
        $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/topbar');
      $this->load->view('templates/dashboard/leftbar');
      // $this->load->view('templates/dashboard/rightbar');
      $this->load->view('pages/tidakhabis/index',$data);
      $this->load->view('templates/dashboard/footer');

    }

    /*
     * Adding a new inventory
     */
    function add_bhp()
    {
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nama','Nama','required|max_length[50]');
		$this->form_validation->set_rules('jenis','Jenis','required|integer');
		$this->form_validation->set_rules('merk','Merk','required|max_length[50]');
		$this->form_validation->set_rules('nama_divisi_pengada','Nama Divisi Pengada','required|max_length[50]');
		$this->form_validation->set_rules('tanggal','Tanggal','required');
		$this->form_validation->set_rules('kategori','Kategori','required|max_length[10]');
        $this->form_validation->set_rules('id_beli/sewa','Id Beli/sewa','required|integer');
        $this->form_validation->set_rules('jumlah','Jumlah','required');
		$this->form_validation->set_rules('satuan','Satuan','required');

		if($this->form_validation->run())
        {
            $params = array(
				'id_divisi_pengada' => $this->input->post('id_divisi_pengada'),
				'nama' => $this->input->post('nama'),
				'jenis' => $this->input->post('jenis'),
				'merk' => $this->input->post('merk'),
				'nama_divisi_pengada' => $this->input->post('nama_divisi_pengada'),
				'tanggal' => $this->input->post('tanggal'),
				'kategori' => $this->input->post('kategori'),
				'id_beli/sewa' => $this->input->post('id_beli/sewa'),
            );
            $inventory_id = $this->Inventory_model->add_inventory($params);
               $data['last'] = $this->Inventory_model->get_last_id();
                echo  $data['last']->id_inventory ;
            $var = array(
               'id_inventory' =>  $data['last']->id_inventory,
                // 'inventory_id' => $this->input->post('inventory_id'),
                'jumlah' => $this->input->post('jumlah'),
                'satuan' => $this->input->post('satuan'),
            );
            $this->Habis_model->add_habis($var);
            redirect('inventory/bhp');
        }
        else
        {
			$this->load->model('Divisi_model');
			$data['all_divisi'] = $this->Divisi_model->get_all_divisi();

            $data['_view'] = 'inventory/add_bhp';
            $this->load->view('pages/habis/add',$data);
        }
    }
    function add_bthp()
    {
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nama','Nama','required|max_length[50]');
		$this->form_validation->set_rules('jenis','Jenis','required|integer');
		$this->form_validation->set_rules('merk','Merk','required|max_length[50]');
		$this->form_validation->set_rules('nama_divisi_pengada','Nama Divisi Pengada','required|max_length[50]');
		$this->form_validation->set_rules('tanggal','Tanggal','required');
		$this->form_validation->set_rules('kategori','Kategori','required|max_length[10]');
        $this->form_validation->set_rules('id_beli/sewa','Id Beli/sewa','required|integer');
        $this->form_validation->set_rules('serial_id','Serial_id','required');
        $this->form_validation->set_rules('kondisi','Kondisi','required');
        $this->form_validation->set_rules('durability','Durability','required');
		$this->form_validation->set_rules('status','Status','required');

		if($this->form_validation->run())
        {
            $params = array(
				'id_divisi_pengada' => $this->input->post('id_divisi_pengada'),
				'nama' => $this->input->post('nama'),
				'jenis' => $this->input->post('jenis'),
				'merk' => $this->input->post('merk'),
				'nama_divisi_pengada' => $this->input->post('nama_divisi_pengada'),
				'tanggal' => $this->input->post('tanggal'),
				'kategori' => $this->input->post('kategori'),
				'id_beli/sewa' => $this->input->post('id_beli/sewa'),
            );
            $inventory_id = $this->Inventory_model->add_inventory($params);
               $data['last'] = $this->Inventory_model->get_last_id();
                echo  $data['last']->id_inventory ;
            $var = array(
               'id_inventory' =>  $data['last']->id_inventory,
                // 'inventory_id' => $this->input->post('inventory_id'),
                'serial_id' => $this->input->post('serial_id'),
                'kondisi' => $this->input->post('kondisi'),
                'durability' => $this->input->post('durability'),
                'status' => $this->input->post('status'),
            );
            $this->TidakHabis_model->add_tidakhabis($var);
            redirect('inventory/bthp');
        }
        else
        {
			$this->load->model('Divisi_model');
			$data['all_divisi'] = $this->Divisi_model->get_all_divisi();

            $data['_view'] = 'inventory/add';
            $this->load->view('pages/tidakhabis/add',$data);
        }
    }

    /*
     * Editing a inventory
     */
    function edit_bhp($id_inventory)
    {
        // check if the inventory exists before trying to edit it
        $data['inventory'] = $this->Inventory_model->get_inventory($id_inventory);
        $data['habis'] = $this->Habis_model->get_habis($id_inventory);

        if(isset($data['inventory']['id_inventory']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nama','Nama','required|max_length[50]');
			$this->form_validation->set_rules('jenis','Jenis','required|integer');
			$this->form_validation->set_rules('merk','Merk','required|max_length[50]');
			$this->form_validation->set_rules('nama_divisi_pengada','Nama Divisi Pengada','required|max_length[50]');
			$this->form_validation->set_rules('tanggal','Tanggal','required');
			$this->form_validation->set_rules('kategori','Kategori','required|max_length[10]');

			$this->form_validation->set_rules('jumlah','Jumlah','required');
			$this->form_validation->set_rules('satuan','Satuan','required');

			if($this->form_validation->run())
            {
                $params = array(
					'id_divisi_pengada' => $this->input->post('id_divisi_pengada'),
					'nama' => $this->input->post('nama'),
					'jenis' => $this->input->post('jenis'),
					'merk' => $this->input->post('merk'),
					'nama_divisi_pengada' => $this->input->post('nama_divisi_pengada'),
					'tanggal' => $this->input->post('tanggal'),
					'kategori' => $this->input->post('kategori'),

                );
                $var = array(
                    'jumlah' => $this->input->post('jumlah'),
					'satuan' => $this->input->post('satuan'),
                );
                $this->Inventory_model->update_inventory($id_inventory,$params);
                $this->Habis_model->update_habis($id_inventory,$var);
                redirect('inventory/bhp');
            }
            else
            {

				$data['all_divisi'] = $this->Divisi_model->get_all_divisi();

                $data['_view'] = 'inventory/edit_bhp';
                $this->load->view('pages/habis/edit',$data);
            }
        }
        else
            show_error('The inventory you are trying to edit does not exist.');
    }
    function update_bhp($id_inventory)
    {
        // check if the inventory exists before trying to edit it
        $data['inventory'] = $this->Inventory_model->get_inventory($id_inventory);
        $data['habis'] = $this->Habis_model->get_habis($id_inventory);

        if(isset($data['inventory']['id_inventory']))
        {
            $this->load->library('form_validation');


            $this->form_validation->set_rules('jumlah1','Jumlah1','required');
            $this->form_validation->set_rules('jumlah','Jumlah','required');
			$this->form_validation->set_rules('tanda','Tanda','required');

			if($this->form_validation->run())
            {
                 $a = $this->input->post('jumlah');
                $b =$this->input->post('jumlah1');
                $tanda = $this->input->post('tanda');
                if( $tanda=="+"){
                    $jumlah = $a+$b ;
                }
                else {
                    $jumlah = $a-$b;
                    $par = array(
                        'id_divisi' => $this->input->post('id_divisi'),
                        'nama_barang' => $this->input->post('nama_barang'),
                        'jumlah' => $b,
                        'id_user' => $this->input->post('id_user'),
                    );
                    $kebutuhan_id = $this->Kebutuhan_model->add_kebutuhan($par);
                }

                $var = array(
                    'jumlah' => $jumlah,
                );

                $this->Habis_model->update_habis($id_inventory,$var);
                redirect('inventory/bhp');
            }
            else
            {

				$data['all_divisi'] = $this->Divisi_model->get_all_divisi();

                $data['_view'] = 'inventory/edit_bhp';
                $this->load->view('pages/habis/edit',$data);
            }
        }
        else
            show_error('The inventory you are trying to edit does not exist.');
    }
    function edit_bthp($id_inventory)
    {
        // check if the inventory exists before trying to edit it
        $data['inventory'] = $this->Inventory_model->get_inventory($id_inventory);
        $data['tidakhabis'] = $this->TidakHabis_model->get_tidakhabis($id_inventory);

        if(isset($data['inventory']['id_inventory']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nama','Nama','required|max_length[50]');
			$this->form_validation->set_rules('jenis','Jenis','required|integer');
			$this->form_validation->set_rules('merk','Merk','required|max_length[50]');
			$this->form_validation->set_rules('nama_divisi_pengada','Nama Divisi Pengada','required|max_length[50]');
			$this->form_validation->set_rules('tanggal','Tanggal','required');
			$this->form_validation->set_rules('kategori','Kategori','required|max_length[10]');
			// $this->form_validation->set_rules('id_beli/sewa','Id Beli/sewa','required|integer');
            $this->form_validation->set_rules('serial_id','Serial_id','required');
            $this->form_validation->set_rules('kondisi','Kondisi','required');
            $this->form_validation->set_rules('durability','Durability','required');
            $this->form_validation->set_rules('status','Status','required');
			if($this->form_validation->run())
            {
                $params = array(
					'id_divisi_pengada' => $this->input->post('id_divisi_pengada'),
					'nama' => $this->input->post('nama'),
					'jenis' => $this->input->post('jenis'),
					'merk' => $this->input->post('merk'),
					'nama_divisi_pengada' => $this->input->post('nama_divisi_pengada'),
					'tanggal' => $this->input->post('tanggal'),
					'kategori' => $this->input->post('kategori'),
					// 'id_beli/sewa' => $this->input->post('id_beli/sewa'),
                );
                $var = array(
                    'serial_id' => $this->input->post('serial_id'),
                    'kondisi' => $this->input->post('kondisi'),
                    'durability' => $this->input->post('durability'),
                    'status' => $this->input->post('status'),
                );
                $this->Inventory_model->update_inventory($id_inventory,$params);
                $this->TidakHabis_model->update_tidakhabis($id_inventory,$var);
                redirect('inventory/bthp');
            }
            else
            {
				$this->load->model('Divisi_model');
				$data['all_divisi'] = $this->Divisi_model->get_all_divisi();

                $data['_view'] = 'inventory/edit_bthp';
                $this->load->view('pages/tidakhabis/edit',$data);
            }
        }
        else
            show_error('The inventory you are trying to edit does not exist.');
    }
    /*
     * Deleting inventory
     */
    function remove_bhp($id_inventory)
    {
        $inventory = $this->Inventory_model->get_inventory($id_inventory);

        // check if the inventory exists before trying to delete it
        if(isset($inventory['id_inventory']))
        {
            $this->Habis_model->delete_habis($id_inventory);
            $this->Inventory_model->delete_inventory($id_inventory);
            redirect('inventory/bhp');
        }
        else
            show_error('The inventory you are trying to delete does not exist.');
    }
    function remove_bthp($id_inventory)
    {
        $inventory = $this->Inventory_model->get_inventory($id_inventory);

        // check if the inventory exists before trying to delete it
        if(isset($inventory['id_inventory']))
        {
            $this->TidakHabis_model->delete_tidakhabis($id_inventory);
            $this->Inventory_model->delete_inventory($id_inventory);
            redirect('inventory/bthp');
        }
        else
            show_error('The inventory you are trying to delete does not exist.');
    }

    function detail_beli($id_beli)
    {
        $data['inventory'] = $this->Inventory_model->get_beli($id_beli);

        $data['_view'] = 'inventory/index';
        $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/topbar');
      $this->load->view('templates/dashboard/leftbar');
      // $this->load->view('templates/dashboard/rightbar');
      $this->load->view('pages/beli/detail',$data);
      $this->load->view('templates/dashboard/footer');

    }
    function detail_sewa($id_sewa)
    {
        $data['inventory'] = $this->Inventory_model->get_sewa($id_sewa);

        $data['_view'] = 'inventory/index';
        $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/topbar');
      $this->load->view('templates/dashboard/leftbar');
      // $this->load->view('templates/dashboard/rightbar');
      $this->load->view('pages/beli/detail',$data);
      $this->load->view('templates/dashboard/footer');

    }
}
