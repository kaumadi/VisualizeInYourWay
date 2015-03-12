<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_set_type_controller extends CI_Controller {

    function __construct() {
        parent::__construct();

       
            $this->load->model('data_set_type/data_set_type_model');
            $this->load->model('data_set_type/data_set_type_service');
        
    }

    function manage_skill_category() {

        $data_set_type_service = new data_set_type_service();

        $data['heading'] = "Manage Dataset Type";
        $data['data_types'] = $data_set_type_service->get_all_data_set_types($this->session->userdata('USER_FILE_ID'));

        $parials = array('content' =>'file_type/manage_file_type_view');
        $this->template->load('template/main_template', $parials, $data);
    }
}