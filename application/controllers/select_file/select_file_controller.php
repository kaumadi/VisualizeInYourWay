<?php //

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
        
    
    
    
    function select_files() {
       //$perm = new Access_controll_service();
      // $perm->check_access('MANAGE_FILES');
        //if ($perm) {
            $Upload_files_stuff_service = new Upload_files_stuff_service();


            $data['heading'] = "select Uploaded Files";
            $data['upload_files'] = $Upload_files_stuff_service->get_all_upload_files_of_user($this->session->userdata('USER_FILE_ID'));

            $partials = array('content' => 'select_files/select_files_view');
            $this->template->load('template/main_template', $partials, $data);
        //} else {
            
        //}
    }

    

    /*
     * Api Methods for Upload_files
     */

    /*
     * @parameters user code
     * Give all upload_files for particular emploee
     * return all upload_files details as json object
     */

    public function get_upload_files_for_user() {

        $upload_files_stuff_service = new Upload_files_stuff_service_service();
        $result = $upload_files_stuff_service->get_upload_files_for_user($this->input->post('user_id'));

        echo json_encode($result);
    }
}