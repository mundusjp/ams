<?php
  class Pages extends CI_Controller{
    public function view($page ='index'){
      if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
        show_404();
      }
      $data['title'] = ucfirst($page);

      $this->load->view('templates/dashboard/header');
      $this->load->view('templates/dashboard/rightbar');
      $this->load->view('templates/dashboard/topbar');
      $this->load->view('templates/dashboard/leftbar');
      $this->load->view('templates/dashboard/infobox');
        $this->load->view('pages/'.$page,$data);
      $this->load->view('templates/dashboard/footer');
    }
  }
