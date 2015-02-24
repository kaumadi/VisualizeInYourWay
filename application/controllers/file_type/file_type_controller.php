<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class file_type_controller extends CI_Controller {

    function __construct() {
        parent::__construct();


        $this->load->model('upload_files_stuff/upload_files_stuff_model');
        $this->load->model('upload_files_stuff/upload_files_stuff_service');

        }
        
  
    function manage_upload_files_stuff() {
     
            $upload_files_stuff_service = new upload_files_stuff_service();


            $data['heading'] = "select file type";
            $data['upload_file_stuff'] = $upload_files_stuff_service->get_all_upload_files_stuff($this->session->userdata('USER_FILE_ID'));

            $partials = array('content' => 'file_type/manage_file_type_view');
            $this->template->load('template/main_template', $partials, $data);
      
    }

}