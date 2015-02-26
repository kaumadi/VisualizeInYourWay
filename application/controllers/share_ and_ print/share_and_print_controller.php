<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class share_and_print_controller extends CI_Controller {

    function __construct() {
        parent::__construct();

        
        
        $this->load->model('upload_files_stuff/upload_files_stuff_model');
        $this->load->model('upload_files_stuff/upload_files_stuff_service');
        
    }
    function manage_share_and_print() {
        
            $upload_files_stuff_service = new upload_files_stuff_service();
        
            $data['heading'] = "share and print your graphs";
   
            $partials = array('content' => 'share_and_print/manage_share_and_print_view');
            $this->template->load('template/main_template', $partials, $data);
      
    }

}

