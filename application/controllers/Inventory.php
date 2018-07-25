<?php

class Inventory extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Inventory_model');
        $this->load->model('Habis_model');

    } 

    /*
     * Listing of inventory
     */
    function index()
    {
        $data['inventory'] = $this->Inventory_model->get_all_inventory();
        
        $data['_view'] = 'inventory/index';
        $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/topbar');
      $this->load->view('templates/dashboard/leftbar');
      $this->load->view('templates/dashboard/rightbar');
      $this->load->view('pages/inventory/index',$data);
      $this->load->view('templates/dashboard/footer');
      
    }
    function bhp()
    {
        $data['inventory'] = $this->Inventory_model->get_all_inventory();
        $data['habis'] = $this->Habis_model->join();
        
        $data['_view'] = 'inventory/index';
        $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/topbar');
      $this->load->view('templates/dashboard/leftbar');
      $this->load->view('templates/dashboard/rightbar');
      $this->load->view('pages/habis/index',$data);
      $this->load->view('templates/dashboard/footer');
      
    }

    /*
     * Adding a new inventory
     */
    function add()
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
               $data['last'] = $this->Inventory_model->get_last_id();
                echo  $data['last']->id_inventory ;
            $var = array(
               'id_inventory' =>  $data['last']->id_inventory,
                // 'inventory_id' => $this->input->post('inventory_id'),
                'jumlah' => $this->input->post('jumlah'),
                'satuan' => $this->input->post('satuan'),
            );
            $this->Habis_model->add_habis($var); 
            $inventory_id = $this->Inventory_model->add_inventory($params);
            redirect('inventory/bhp');
        }
        else
        {
			$this->load->model('Divisi_model');
			$data['all_divisi'] = $this->Divisi_model->get_all_divisi();
            
            $data['_view'] = 'inventory/add';
            $this->load->view('pages/habis/add',$data);
        }
    }  

    /*
     * Editing a inventory
     */
    function edit($id_inventory)
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
				$this->load->model('Divisi_model');
				$data['all_divisi'] = $this->Divisi_model->get_all_divisi();

                $data['_view'] = 'inventory/edit';
                $this->load->view('pages/habis/edit',$data);
            }
        }
        else
            show_error('The inventory you are trying to edit does not exist.');
    } 

    /*
     * Deleting inventory
     */
    function remove($id_inventory)
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
    
}