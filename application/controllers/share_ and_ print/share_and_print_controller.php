<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class share_and_print_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
//  $this->load->model('upload_files_stuff/upload_files_stuff_model');
//        $this->load->model('upload_files_stuff/upload_files_stuff_service');

        }
        
  
    function view_share_and_print() {
        
            $data['heading'] = "share and print your graphs";
   
            $partials = array('content' => 'share_and_print/share_and_print_view');
            $this->template->load('template/main_template', $partials, $data);
      
    }

}
