<?php

class Inventory extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Inventory_model');
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
            redirect('inventory/index');
        }
        else
        {
			$this->load->model('Divisi_model');
			$data['all_divisi'] = $this->Divisi_model->get_all_divisi();
            
            $data['_view'] = 'inventory/add';
            $this->load->view('pages/inventory/add',$data);
        }
    }  

    /*
     * Editing a inventory
     */
    function edit($id_inventory)
    {   
        // check if the inventory exists before trying to edit it
        $data['inventory'] = $this->Inventory_model->get_inventory($id_inventory);
        
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

                $this->Inventory_model->update_inventory($id_inventory,$params);            
                redirect('inventory/index');
            }
            else
            {
				$this->load->model('Divisi_model');
				$data['all_divisi'] = $this->Divisi_model->get_all_divisi();

                $data['_view'] = 'inventory/edit';
                $this->load->view('pages/inventory/edit',$data);
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
            $this->Inventory_model->delete_inventory($id_inventory);
            redirect('inventory/index');
        }
        else
            show_error('The inventory you are trying to delete does not exist.');
    }
    
}