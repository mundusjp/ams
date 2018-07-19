<?php
  class Error extends Controller{
    function error_404(){
      $CI =& get_instance();
      $CI->output->set_status_header('404');
      $CI->router->show_404();
    }
  }
