<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Pemeliharaan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
          redirect('');
          }
        $this->load->model('Pemeliharaan_model');
    }

    /*
     * Listing of pemeliharaan
     */
    function index()
    {
        $data['pemeliharaan'] = $this->Pemeliharaan_model->get_all_pemeliharaan();
        $this->load->model('Inventory_model');
                $data['all_inventory'] = $this->Inventory_model->get_all_inventory();

        $data['_view'] = 'pemeliharaan/index';
        $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/topbar');
      $this->load->view('templates/dashboard/leftbar');
      $this->load->view('templates/dashboard/rightbar');
        $this->load->view('pages/pemeliharaan/index',$data);
        $this->load->view('templates/dashboard/footer');

    }

    /*
     * Adding a new pemeliharaan
     */
    function add()
    {
        $this->load->library('form_validation');

		$this->form_validation->set_rules('id_inventory','Id Inventory','required|integer');
		$this->form_validation->set_rules('biaya','Biaya','required|integer|greater_than[0]');
		$this->form_validation->set_rules('tanggal','Tanggal','required');
		$this->form_validation->set_rules('deskripsi','Deskripsi','required|max_length[191]');

		if($this->form_validation->run())
        {
            $params = array(
				'id_inventory' => $this->input->post('id_inventory'),
				'biaya' => $this->input->post('biaya'),
				'tanggal' => $this->input->post('tanggal'),
				'deskripsi' => $this->input->post('deskripsi'),
            );

            $pemeliharaan_id = $this->Pemeliharaan_model->add_pemeliharaan($params);
            redirect('pemeliharaan/index');
        }
        else
        {
			$this->load->model('Inventory_model');
			$data['all_inventory'] = $this->Inventory_model->get_all_inventory();

            $data['_view'] = 'pemeliharaan/add';
            $this->load->view('pages/pemeliharaan/add',$data);
        }
    }

    /*
     * Editing a pemeliharaan
     */
    function edit($id_pemeliharaan)
    {
        // check if the pemeliharaan exists before trying to edit it
        $data['pemeliharaan'] = $this->Pemeliharaan_model->get_pemeliharaan($id_pemeliharaan);

        if(isset($data['pemeliharaan']['id_pemeliharaan']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('id_inventory','Id Inventory','required|integer');
			$this->form_validation->set_rules('biaya','Biaya','required|integer|greater_than[0]');
			$this->form_validation->set_rules('tanggal','Tanggal','required');
			$this->form_validation->set_rules('deskripsi','Deskripsi','required|max_length[191]');

			if($this->form_validation->run())
            {
                $params = array(
					'id_inventory' => $this->input->post('id_inventory'),
					'biaya' => $this->input->post('biaya'),
					'tanggal' => $this->input->post('tanggal'),
					'deskripsi' => $this->input->post('deskripsi'),
                );

                $this->Pemeliharaan_model->update_pemeliharaan($id_pemeliharaan,$params);
                redirect('pemeliharaan/index');
            }
            else
            {
				$this->load->model('Inventory_model');
				$data['all_inventory'] = $this->Inventory_model->get_all_inventory();

                $data['_view'] = 'pemeliharaan/edit';
                $this->load->view('pages/pemeliharaan/edit',$data);
            }
        }
        else
            show_error('The pemeliharaan you are trying to edit does not exist.');
    }

    /*
     * Deleting pemeliharaan
     */
    function remove($id_pemeliharaan)
    {
        $pemeliharaan = $this->Pemeliharaan_model->get_pemeliharaan($id_pemeliharaan);

        // check if the pemeliharaan exists before trying to delete it
        if(isset($pemeliharaan['id_pemeliharaan']))
        {
            $this->Pemeliharaan_model->delete_pemeliharaan($id_pemeliharaan);
            redirect('pemeliharaan/index');
        }
        else
            show_error('The pemeliharaan you are trying to delete does not exist.');
    }

}
