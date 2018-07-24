<?php

class Admin extends CI_Controller {
    function __construct(){
		    parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('Divisi_model');
    }

    function admin_tambah(){

        // $this->load->view('templates/dashboard/header');
        // $this->load->view('templates/dashboard/topbar');
        // $this->load->view('templates/dashboard/leftbar');
        // $this->load->view('templates/dashboard/rightbar');
        // //$this->load->view('pages/admin/admin_tambah');
        // $this->load->view('templates/dashboard/footer');

        // $this->load->library('form_validation');
        // $this->form_validation->set_error_delimiters('', '');
        // $this->form_validation->set_rules('password', 'Password', ['required', 'min_length[8]'], ['required'=>"Enter password"]);
        // $this->form_validation->set_rules('passwordDup', 'Password Confirmation', ['required', 'matches[password]'], ['required'=>"Please retype password"]);

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $status = $this->input->post('status');
        $divisi = $this->input->post('id_divisi');
        $no_hp = $this->input->post('no_hp');

        $params = array(
          'username' => $username,
          'password' => $password,
          'nama' => $nama,
          'status' => $status,
          'id_divisi' => $divisi,
        );

        $this->admin_model->input_data($params,'user');

        redirect('manage-overview');
      }

      function admin_index()
      {
          $data['user'] = $this->admin_model->get_all_admin();
          $data['all_divisi'] = $this->Divisi_model->get_all_divisi();

          $data['_view'] = 'admin/admin_index';
          $this->load->view('templates/dashboard/header');
          $this->load->view('templates/dashboard/topbar');
          $this->load->view('templates/dashboard/leftbar');
          $this->load->view('templates/dashboard/rightbar');
          $this->load->view('pages/admin/admin_index',$data);
          $this->load->view('templates/dashboard/footer');

      }

      function hapus($id_admin)
      {
          $admin = $this->admin_model->get_admin($id_admin);

          // check if the divisi exists before trying to delete it
          if(isset($admin['id_user']))
          {
              $this->admin_model->hapus_admin($id_admin);
              redirect('admin/admin_index');
          }
          else
              show_error('Admin yang akan dihapus tidak ada.');
      }
  }
  //     function hapus($id){
  // $where = array('id' => $id);
  // $this->m_data->hapus_data($where,'user');
  // redirect('inventories/index');
  //     }
