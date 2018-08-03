<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Supplier extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
          redirect('');
          }
        $this->load->model('Supplier_model');
    }

    /*
     * Listing of supplier
     */
    function index()
    {
        $data['supplier'] = $this->Supplier_model->get_all_supplier();

        $data['_view'] = 'supplier/index';
        $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/topbar');
      $this->load->view('templates/dashboard/leftbar');
      $this->load->view('templates/dashboard/rightbar');
        $this->load->view('pages/supplier/index',$data);
        $this->load->view('templates/dashboard/footer');

    }

    /*
     * Adding a new supplier
     */
    function add()
    {
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nama','Nama','required|max_length[50]');
		$this->form_validation->set_rules('alamat','Alamat','required|max_length[191]');

		if($this->form_validation->run())
        {
            $params = array(
				'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'email' => $this->input->post('email'),
            );

            $supplier_id = $this->Supplier_model->add_supplier($params);
            redirect('supplier/index');
        }
        else
        {
            $data['_view'] = 'supplier/add';
            $this->load->view('pages/supplier/add',$data);
        }
    }

    /*
     * Editing a supplier
     */
    function edit($id_supplier)
    {
        // check if the supplier exists before trying to edit it
        $data['supplier'] = $this->Supplier_model->get_supplier($id_supplier);

        if(isset($data['supplier']['id_supplier']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nama','Nama','required|max_length[50]');
			$this->form_validation->set_rules('alamat','Alamat','required|max_length[191]');

			if($this->form_validation->run())
            {
                $params = array(
					'nama' => $this->input->post('nama'),
                    'alamat' => $this->input->post('alamat'),
                    'no_hp' => $this->input->post('no_hp'),
                'email' => $this->input->post('email'),
                );

                $this->Supplier_model->update_supplier($id_supplier,$params);
                redirect('supplier/index');
            }
            else
            {
                $data['_view'] = 'supplier/edit';
                $this->load->view('pages/supplier/edit',$data);
            }
        }
        else
            show_error('The supplier you are trying to edit does not exist.');
    }

    /*
     * Deleting supplier
     */
    function remove($id_supplier)
    {
        $supplier = $this->Supplier_model->get_supplier($id_supplier);

        // check if the supplier exists before trying to delete it
        if(isset($supplier['id_supplier']))
        {
            $this->Supplier_model->delete_supplier($id_supplier);
            redirect('supplier/index');
        }
        else
            show_error('The supplier you are trying to delete does not exist.');
    }

}
