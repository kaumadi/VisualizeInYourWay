<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Upload_files_controller extends CI_Controller {

    function __construct() {
        parent::__construct();


     
        
        $this->load->model('upload_files_stuff/upload_files_stuff_model');
        $this->load->model('upload_files_stuff/upload_files_stuff_service');

        



        $this->load->model('user/user_model');
        $this->load->model('user/user_service');
        
       

        }
        
    
    
    
    function manage_upload_files_stuff() {
     
            $upload_files_stuff_service = new upload_files_stuff_service();


            $data['heading'] = "select file type";
            $data['upload_file_stuff'] = $upload_files_stuff_service->get_upload_files_stuff_for_upload_files($this->session->userdata('USER_FILE_ID'));

            $partials = array('content' => 'file_type/manage_file_type_view');
            $this->template->load('template/main_template', $partials, $data);
      
    }

   
//    public function get_upload_files_for_user() {
//
//        $upload_files_service = new Upload_files_service();
//        $result = $upload_files_service->get_upload_files_for_user($this->input->post('user_id'));
//
//        echo json_encode($result);
//    }

    

    

}