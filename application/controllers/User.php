<?php

class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
          redirect('');
          }
        $this->load->model('admin_model');
        $this->load->model('Divisi_model');
        $this->load->model('Kantor_model');
        $this->load->library('form_validation');
    }
// -----------------------------------------------------------
//                       KONTROL INDEX
// -----------------------------------------------------------
 function profil(){
   $id_user = $this->session->userdata('id_user');
   $data['user'] = $this->admin_model->get_admin($id_user);
   $data['_view'] = 'user/my-profile';
   $this->load->view('templates/dashboard/header');
   $this->load->view('templates/dashboard/topbar');
   $this->load->view('templates/dashboard/leftbar');
   $this->load->view('templates/dashboard/rightbar');
   $this->load->view('pages/user/profil',$data);
   $this->load->view('templates/dashboard/footer');
 }
// -----------------------------------------------------------
//                       KONTROL EDIT
// -----------------------------------------------------------
function profilpic($id_admin)
{
    // check if the user exists before trying to edit it
    $data['user'] = $this->admin_model->get_admin($id_admin);

    if(isset($data['user']['id_user']))
    {
        $this->load->library('form_validation');

 $this->form_validation->set_rules('username','Username','required|max_length[50]');
 //$this->form_validation->set_rules('photo','Photo','max_length[191]');

 if($this->form_validation->run())
        {
            $params = array(
     'username' => $this->input->post('username'),
     'nipp' => $this->input->post('nipp'),
     'jabatan' => $this->input->post('jabatan'),
     //'photo' => $this->input->post('photo'),
            );

            $this->admin_model->update_admin($id_admin,$params);
            sleep(1);
            redirect('user/profil');
        }
        else
        {
            show_error("Validasi Gagal");
        }
    }
    else
        show_error('The user you are trying to edit does not exist.');
}

 function edit($id_admin)
 {
     // check if the user exists before trying to edit it
     $data['user'] = $this->admin_model->get_admin($id_admin);

     if(isset($data['user']['id_user']))
     {
         $this->load->library('form_validation');

  $this->form_validation->set_rules('username','Username','required|max_length[50]');
  $this->form_validation->set_rules('nipp','Nipp','integer');
  $this->form_validation->set_rules('jabatan','Jabatan','max_length[50]');
  //$this->form_validation->set_rules('photo','Photo','max_length[191]');

  if($this->form_validation->run())
         {
             $params = array(
      'username' => $this->input->post('username'),
      'nipp' => $this->input->post('nipp'),
      'jabatan' => $this->input->post('jabatan'),
      //'photo' => $this->input->post('photo'),
             );

             $this->admin_model->update_admin($id_admin,$params);
             sleep(1);
             redirect('user/profil');
         }
         else
         {
             show_error("Validasi Gagal");
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

  $this->form_validation->set_rules('nama','Nama','required|max_length[50]');
  $this->form_validation->set_rules('no_hp','No Hp','integer');
  $this->form_validation->set_rules('alamat','Alamat','max_length[191]');
  $this->form_validation->set_rules('email','Email','max_length[191]|valid_email');
  //$this->form_validation->set_rules('photo','Photo','max_length[191]');

  if($this->form_validation->run())
         {
             $params = array(
      'nama' => $this->input->post('nama'),
      'no_hp' => $this->input->post('no_hp'),
      'alamat' => $this->input->post('alamat'),
      'email' => $this->input->post('email'),
      //'photo' => $this->input->post('photo'),
             );

             $this->admin_model->update_admin($id_admin,$params);
             sleep(1);
             redirect('user/profil');
         }
         else
         {
             echo ("Validasi Gagal");
         }
     }
     else
         show_error('The user you are trying to edit does not exist.');
 }

  function editpassword($id_admin)
  {
      // check if the user exists before trying to edit it
      $data['user'] = $this->admin_model->get_admin($id_admin);

      if(isset($data['user']['id_user']))
      {
          $this->load->library('form_validation');

   $this->form_validation->set_rules('password','Password','max_length[50]|required');
   //$this->form_validation->set_rules('photo','Photo','max_length[191]');

   if($this->form_validation->run())
          {
              $params = array(
       'password' => $this->input->post('password'),

              );

              $this->admin_model->update_admin($id_admin,$params);
              sleep(1);
              redirect('user/profil');
          }
          else
          {
              echo ("Validasi Gagal");
          }
      }
      else
          show_error('The user you are trying to edit does not exist.');
  }
  // -----------------------------------------------------------
  //                       KONTROL PASSWORD
  // -----------------------------------------------------------
  public function save_password($id_admin)
 {
   $data['user'] = $this->admin_model->get_admin($id_admin);

   if(isset($data['user']['id_user']))
   {
     $this->form_validation->set_rules('new','New','required|alpha_numeric');
     $this->form_validation->set_rules('re_new', 'Retype New', 'required|matches[new]');
     if($this->form_validation->run() == FALSE)
     {
       redirect('user/profil');
     }
     else
     {
       $cek_old = $this->admin_model->cek_old();
       if ($cek_old == False)
       {
         $this->session->set_flashdata('error','Old password not match!' );
         echo('doesnt match');
       }
       else
       {
         $this->admin_model->save();
         $this->session->sess_destroy();
         sleep(2);
         redirect('auth/logout');
       }//end if valid_user
     }
   }
   else
    show_error('The user you are trying to edit does not exist.');
 }

}
