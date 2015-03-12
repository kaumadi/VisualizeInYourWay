<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class file_data_set_controller extends CI_Controller {

    function __construct() {
        parent::__construct();


        $this->load->model('data_set/data_set_model');
        $this->load->model('data_set/data_set_service');
    }

    function manage_data_set() {

       $data_set_service = new Data_set_service();


        $data['heading'] = "select Data Coloumn ";
        $data['data_sets'] = $data_set_service->get_all_data_sets();

        $partials = array('content' => 'file_type/manage_file_type_view');
        $this->template->load('template/main_template', $partials,$data);
    }
}