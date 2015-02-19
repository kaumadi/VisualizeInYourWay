<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Upload_files_controller extends CI_Controller {

    function __construct() {
        parent::__construct();


//        if (!$this->session->userdata('USER_LOGGED_IN')) {
//            redirect(site_url() . '/login/login_controller');
//        } else {
        $this->load->model('upload_files/upload_files_model');
        $this->load->model('upload_files/upload_files_service');



        $this->load->model('user/user_model');
        $this->load->model('user/user_service');
        
        

//        }
    }

    function manage_upload_files() {
       $perm = Access_controll_service::check_access('MANAGE_FILES');
        if ($perm) {
            $upload_files_service = new Upload_files_service();


            $data['heading'] = "Manage Uploaded Files";
            $data['upload_files'] = $upload_files_service->get_all_upload_files_of_user($this->session->userdata('USER_FILE_ID'));

            $partials = array('content' => 'upload_files/manage_upload_files_view');
            $this->template->load('template/main_template', $partials, $data);
        } else {
            
        }
    }

    function add_upload_files_view() {
        $perm = Access_controll_service::check_access('ADD_NEW_FILE');
        if ($perm) {


            $data['heading'] = "Add New File";

            $upload_files_stuff_temp_service = new Upload_files_stuff_temp_service();
            $upload_files_service = new Upload_files_service();
            $upload_files_stuff_temp_service->truncate_upload_files_temp_stuff();

            $result = $upload_files_service->get_last_upload_files_id();
            $last_id = '';
            if (!empty($result)) {
                $last_id = $result->file_id + 1;
            }

            $data['last_id'] = $last_id;

            $partials = array('content' => 'upload_files/add_upload_file_view');
            $this->template->load('template/main_template', $partials, $data);
        } else {
            
        }
    }

    function add_new_upload_files() {
//        $perm = Access_controll_service :: checkAccess('ADD_PRIVILEGES');
//        if ($perm) {

        $upload_files_model = new Upload_files_model();
        $upload_files_service = new Upload_files_service();
        $upload_files_stuff_temp_service = new Upload_files_stuff_temp_service();
        $upload_files_stuff_service = new Upload_files_stuff_service();
        $upload_files_stuff_model = new Upload_files_stuff_model();

        $upload_files_temp_stuff = $upload_files_stuff_temp_service->get_all_upload_files_stuff_temp_of_user($this->session->userdata('USER_FILE_ID'));

        $upload_files_model->set_file_name($this->input->post('files_name', TRUE));

        $upload_files_model->set_file_description($this->input->post('file_description', TRUE));

        $upload_files_model->set_del_ind('1');
        $upload_files_model->set_added_date(date("Y-m-d H:i:s"));
        $upload_files_model->set_added_by($this->session->userdata('USER_ID'));



        $file_id = $upload_files_service->add_new_upload_files($upload_files_model);
        $msg = 1;

        foreach ($upload_files_temp_stuff as $stuff) {
            $upload_files_stuff_model->set_stuff_name($stuff->stuff_name);

            $upload_files_stuff_model->set_upload_file_stuff_id($file_id);
            $upload_files_stuff_model->set_del_ind('1');
            $upload_files_stuff_model->set_added_date(date("Y-m-d H:i:s"));
            $upload_files_stuff_model->set_added_by($this->session->userdata('USER_ID'));

            $msg = $upload_files_stuff_service->add_new_upload_files_stuff($upload_files_stuff_model);
        }

        echo $msg;



//        } else {
//            $this->template->load('template/access_denied_page');
//        }
    }

    function delete_upload_files() {


        $upload_files_service = new Upload_files_service();

        echo $upload_files_service->delete_upload_files(trim($this->input->post('id', TRUE)));
    }

    function edit_upload_files_view($id) {
        $perm = Access_controll_service::check_access('EDIT_FILES');
        if ($perm) {


            $upload_files_service = new Upload_files_service();


            $data['heading'] = "Edit Upload_files";
            $data['upload_files'] = $upload_files_service->get_upload_files_by_id($id);


            $partials = array('content' => 'upload_filess/edit_upload_files_view');
            $this->template->load('template/main_template', $partials, $data);
        } else {
            
        }
    }

    function edit_upload_files() {

//        $perm = Access_controll_service :: checkAccess('EDIT_FILESS');
//        if ($perm) {

        $upload_files_model = new Upload_files_model();
        $upload_files_service = new Upload_files_service();

        $upload_files_model->set_upload_files_name($this->input->post('file_name', TRUE));
        $upload_files_model->set_upload_files_description($this->input->post('file_description', TRUE));

        $upload_files_model->set_upload_files_id($this->input->post('file_id', TRUE));



        echo $upload_files_service->update_upload_files($upload_files_model);
//        } else {
//            $this->template->load('template/access_denied_page');
//        }
    }

    

    function add_temp_upload_files_stuff() {

        $upload_files_stuff_temp_model = new Upload_files_stuff_temp_model();
        $upload_files_stuff_temp_service = new Upload_files_stuff_temp_service();

        $files = $this->input->post('file_name', TRUE);
//        $files = explode(',', $files);

        foreach ($files as $file) {

            $upload_files_stuff_temp_model->set_stuff_name($file);
            //$upload_files_stuff_temp_model->set_company_code($this->session->userdata('EMPLOYEE_COMPANY_CODE'));
            $upload_files_stuff_temp_model->set_del_ind('1');
            $upload_files_stuff_temp_model->set_added_date(date("Y-m-d H:i:s"));
            $upload_files_stuff_temp_model->set_added_by($this->session->userdata('USER_ID'));


            echo $upload_files_stuff_temp_service->add_new_upload_files_stuff_temp($upload_files_stuff_temp_model);
        }
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

        $upload_files_service = new Upload_files_service();
        $result = $upload_files_service->get_upload_files_for_user($this->input->post('user_id'));

        echo json_encode($result);
    }

    

    

}