<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Admin extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
          redirect('');
          }
        $this->load->model('admin_model');
        $this->load->model('Divisi_model');
        $this->load->model('Kantor_model');
    }

    /*
     * Listing of user
     */
     function index(){
       $id_user = $this->session->userdata('id_user');
       $data['user'] = $this->admin_model->get_admin($id_user);
       $data['_view'] = 'user/profil';
       $this->load->view('templates/dashboard/header');
     $this->load->view('templates/dashboard/topbar');
     $this->load->view('templates/dashboard/leftbar');
     $this->load->view('templates/dashboard/rightbar');
       $this->load->view('pages/user/profil',$data);
       $this->load->view('templates/dashboard/footer');
     }

    /*
     * Adding a new user
     */
    function add()
    {
        $data['all_divisi'] = $this->Divisi_model->get_all_divisi();

        $this->load->library('form_validation');

		$this->form_validation->set_rules('password','Password','required|max_length[50]');
		$this->form_validation->set_rules('username','Username','required|max_length[50]');
		$this->form_validation->set_rules('nama','Nama','required|max_length[50]');
		// $this->form_validation->set_rules('nipp','Nipp','integer');
		// $this->form_validation->set_rules('jabatan','Jabatan','max_length[50]');
		$this->form_validation->set_rules('status','Status','required|integer');
		$this->form_validation->set_rules('id_divisi','Id Divisi','required|integer');
		// $this->form_validation->set_rules('no_hp','No Hp','integer');
		// $this->form_validation->set_rules('alamat','Alamat','max_length[191]');
		// $this->form_validation->set_rules('email','Email','max_length[191]|valid_email');
		// $this->form_validation->set_rules('photo','Photo','max_length[191]');

		if($this->form_validation->run())
        {
            $params = array(
        'nama' => $this->input->post('nama'),
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password'),
        'status' => $this->input->post('status'),
				'id_divisi' => $this->input->post('id_divisi'),
            );

            $user_id = $this->admin_model->add_admin($params);
            redirect('manage/user');
        }
        else
        {
			// $data['all_divisi'] = $this->Divisi_model->get_all_divisi();
      //
      //       $data['_view'] = 'manage/user';
            //$this->load->view('manage/user', $data);
        }
    }

    /*
     * Editing a user
     */
    function edit($id_admin)
    {
        // check if the user exists before trying to edit it
        $data['user'] = $this->admin_model->get_admin($id_admin);

        if(isset($data['user']['id_user']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('password','Password','max_length[50]|required');
			$this->form_validation->set_rules('username','Username','required|max_length[50]');
			$this->form_validation->set_rules('nama','Nama','required|max_length[50]');
			$this->form_validation->set_rules('nipp','Nipp','integer');
			$this->form_validation->set_rules('jabatan','Jabatan','max_length[50]');
			$this->form_validation->set_rules('status','Status','required|integer');
			$this->form_validation->set_rules('id_divisi','Id Divisi','required|integer');
			$this->form_validation->set_rules('no_hp','No Hp','integer');
			$this->form_validation->set_rules('alamat','Alamat','max_length[191]');
			$this->form_validation->set_rules('email','Email','max_length[191]|valid_email');
			$this->form_validation->set_rules('photo','Photo','max_length[191]');

			if($this->form_validation->run())
            {
                $params = array(
					'id_divisi' => $this->input->post('id_divisi'),
					'password' => $this->input->post('password'),
					'username' => $this->input->post('username'),
					'nama' => $this->input->post('nama'),
					'nipp' => $this->input->post('nipp'),
					'jabatan' => $this->input->post('jabatan'),
					'status' => $this->input->post('status'),
					'no_hp' => $this->input->post('no_hp'),
					'alamat' => $this->input->post('alamat'),
					'email' => $this->input->post('email'),
					'photo' => $this->input->post('photo'),
                );

                $this->admin_model->update_admin($id_admin,$params);
                redirect('manage/user');
            }
            else
            {
				$this->load->model('Divisi_model');
				$data['all_divisi'] = $this->Divisi_model->get_all_divisi();

                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    }

    function editprofil($id_admin)
    {
        // check if the user exists before trying to edit it
        $data['user'] = $this->admin_model->get_admin($id_admin);

        if(isset($data['user']['id_user']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('password','Password','max_length[50]|required');
			$this->form_validation->set_rules('username','Username','required|max_length[50]');
			$this->form_validation->set_rules('nama','Nama','required|max_length[50]');
			$this->form_validation->set_rules('nipp','Nipp','integer');
			$this->form_validation->set_rules('jabatan','Jabatan','max_length[50]');
			$this->form_validation->set_rules('no_hp','No Hp','integer');
			$this->form_validation->set_rules('alamat','Alamat','max_length[191]');
			$this->form_validation->set_rules('email','Email','max_length[191]|valid_email');
			//$this->form_validation->set_rules('photo','Photo','max_length[191]');

			if($this->form_validation->run())
            {
                $params = array(
					'password' => $this->input->post('password'),
					'username' => $this->input->post('username'),
					'nama' => $this->input->post('nama'),
					'nipp' => $this->input->post('nipp'),
					'jabatan' => $this->input->post('jabatan'),
					'no_hp' => $this->input->post('no_hp'),
					'alamat' => $this->input->post('alamat'),
					'email' => $this->input->post('email'),
					//'photo' => $this->input->post('photo'),
                );

                $this->admin_model->update_admin($id_admin,$params);
                redirect('admin/index');
            }
            else
            {
                echo ("Validasi Gagal");
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    }

    /*
     * Deleting user
     */
    function remove($id_admin)
    {
        $user = $this->admin_model->get_admin($id_admin);

        // check if the user exists before trying to delete it
        if(isset($user['id_user']))
        {
            $this->admin_model->delete_admin($id_admin);
            redirect('manage/user');
        }
        else
            show_error('The user you are trying to delete does not exist.');
    }

}
