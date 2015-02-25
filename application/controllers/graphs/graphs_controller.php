<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class graphs_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
//  $this->load->model('upload_files_stuff/upload_files_stuff_model');
//        $this->load->model('upload_files_stuff/upload_files_stuff_service');

        }
        
  
    function manage_graphs() {
              $data['heading'] = "select graps category";
   
            $partials = array('content' => 'graph/graph_analyzer_view');
            $this->template->load('template/main_template', $partials, $data);
      
    }

}