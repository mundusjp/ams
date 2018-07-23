<?php

class Admin extends CI_Controller {
    function __construct(){
		    parent::__construct();
        $this->load->model('admin_model');
    }

    function tambah_aksi(){
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules('password', 'Password', ['required', 'min_length[8]'], ['required'=>"Enter password"]);
        $this->form_validation->set_rules('passwordDup', 'Password Confirmation', ['required', 'matches[password]'], ['required'=>"Please retype password"]);

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $status = $this->input->post('status');
        $divisi = $this->input->post('id_divisi');
        $no_hp = $this->input->post('no_hp');

        $data = array(
          'username' => $username,
          'password' => $password,
          'nama' => $nama,
          'status' => $status,
          'id_divisi' => $divisi,
        );

        $this->admin_model->input_data($data,'user');

        redirect('manage-overview');
      }
  }
  //     function hapus($id){
  // $where = array('id' => $id);
  // $this->m_data->hapus_data($where,'user');
  // redirect('inventories/index');
  //     }
