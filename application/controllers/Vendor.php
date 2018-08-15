<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Vendor extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect('');
            }
        $this->load->model('Vendor_model');
        $this->load->model('Eventlog_model');
        $this->load->model('admin_model');
    } 

    /*
     * Listing of vendor
     */
    function index()
    {
        $id_user = $this->session->userdata('id_user');
        $data['user'] = $this->admin_model->get_admin($id_user);
        $data['vendor'] = $this->Vendor_model->get_all_vendor();
        
        $data['_view'] = 'vendor/index';
        $this->load->view('templates/dashboard/header');
        $this->load->view('templates/dashboard/topbar', $data);
        $this->load->view('templates/dashboard/leftbar', $data);
        $this->load->view('templates/dashboard/rightbar');
          $this->load->view('pages/vendor/index',$data);
          $this->load->view('templates/dashboard/footer');
    }

    /*
     * Adding a new vendor
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nama','Nama','required|max_length[50]');
		$this->form_validation->set_rules('alamat','Alamat','required|max_length[191]');
		$this->form_validation->set_rules('no_hp','No Hp','required|max_length[13]');
		$this->form_validation->set_rules('email','Email','required|max_length[50]|valid_email');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'email' => $this->input->post('email'),
            );
            
            $vendor_id = $this->Vendor_model->add_vendor($params);
            // $inventory_id = $this->Inventory_model->add_inventory($params);
            // $data['last'] = $this->Inventory_model->get_last_id();
            $desc =($this->session->userdata('nama').' '.'menambahkan'.' '.$this->input->post('nama'));
            $log = array(
				'id_user' => $this->session->userdata('id_user'),
				'event' => 'menambahkan vendor',
				'ref_id' =>  $vendor_id,
				'eventDesc' => $desc,
				'eventTable' => 'vendor',
            );
            $eventlog_id = $this->Eventlog_model->add_eventlog($log);
            redirect('vendor/index');
        }
        else
        {            
            $data['_view'] = 'vendor/add';
            $this->load->view('pages/vendor/add',$data);
        }
    }  

    /*
     * Editing a vendor
     */
    function edit($id_vendor)
    {   
        // check if the vendor exists before trying to edit it
        $data['vendor'] = $this->Vendor_model->get_vendor($id_vendor);
        
        if(isset($data['vendor']['id_vendor']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nama','Nama','required|max_length[50]');
			$this->form_validation->set_rules('alamat','Alamat','required|max_length[191]');
			$this->form_validation->set_rules('no_hp','No Hp','required|max_length[13]');
			$this->form_validation->set_rules('email','Email','required|max_length[50]|valid_email');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nama' => $this->input->post('nama'),
					'alamat' => $this->input->post('alamat'),
					'no_hp' => $this->input->post('no_hp'),
					'email' => $this->input->post('email'),
                );

                $this->Vendor_model->update_vendor($id_vendor,$params);   
                $desc =($this->session->userdata('nama').' '.'mengubah'.' '.$this->input->post('nama'));
                $log = array(
                    'id_user' => $this->session->userdata('id_user'),
                    'event' => 'mengubah vendor',
                    'ref_id' =>  $id_vendor,
                    'eventDesc' => $desc,
                    'eventTable' => 'vendor',
                );
                $eventlog_id = $this->Eventlog_model->add_eventlog($log);         
                redirect('vendor/index');
            }
            else
            {
                $data['_view'] = 'vendor/edit';
                $this->load->view('pages/vendor/edit',$data);
            }
        }
        else
            show_error('The vendor you are trying to edit does not exist.');
    } 

    /*
     * Deleting vendor
     */
    function remove($id_vendor)
    {
        $vendor = $this->Vendor_model->get_vendor($id_vendor);

        // check if the vendor exists before trying to delete it
        if(isset($vendor['id_vendor']))
        {
            $this->Vendor_model->delete_vendor($id_vendor);
            redirect('vendor/index');
        }
        else
            show_error('The vendor you are trying to delete does not exist.');
    }
    
}
