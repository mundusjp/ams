<?php
  class Dashboards extends CI_Controller{
    public function view($page = 'index'){
      if(!file_exists(APPPATH.'views/dashboards'/.$page.'.php')){
        show_404();
      }

      $data['title'] = ucfirst($page);
      $this->load->view('templates/dashboards/header');
      $this->load->view('dashboards/'.$page, $data);
      $this->load->view('templates/dashboards/footer');
      $this->load->view('templates/dashboards/rightbar');
      $this->load->view('templates/dashboards/topbar');
      $this->load->view('templates/dashboards/leftbar');
    }
  }
