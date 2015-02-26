<?php



if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Share_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
//  $this->load->model('upload_files_stuff/upload_files_stuff_model');
//        $this->load->model('upload_files_stuff/upload_files_stuff_service');

        }
        
  
    function manage_share() {
              $data['heading'] = "select graphs category";
   
            $partials = array('content' => 'share/share_view');
            $this->template->load('template/main_template', $partials, $data);
      
    }

}