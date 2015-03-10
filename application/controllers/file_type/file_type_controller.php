<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class file_type_controller extends CI_Controller {

    function __construct() {
        parent::__construct();


//        $this->load->model('upload_files_stuff/upload_files_stuff_model');
//        $this->load->model('upload_files_stuff/upload_files_stuff_service');
    }

    function manage_upload_files_stuff() {

//        $upload_files_stuff_service = new upload_files_stuff_service();


        $data['heading'] = "select your file ";
//        $data['upload_file_stuff'] = $upload_files_stuff_service->get_all_upload_files_stuff($this->session->userdata('USER_FILE_ID'));

        $partials = array('content' => 'file_type/manage_file_type_view');
        $this->template->load('template/main_template', $partials,$data);
    }

//    function add_new_file_type() {
//
//        $data_set_service = new Data_set_service();
//        $data_set_model = new Data_set_model();
//        $upload_files_service = new Upload_files_service();
//        $upload_files_model = new Upload_files_model();
//
//        $data_set_model->set_data_set_id($this->input->post('data_set_id', TRUE));
//        $data_set_model->set_data_set_name($this->input->post('data_set_name', TRUE));
//        $upload_files_model->set_file_id($this->input->post('file_id', TRUE));
//        $upload_files_model->set_user_id($this->input->post('user_id', TRUE));
//        $upload_files_model->set_file_name($this->input->post('file_name', TRUE));
//        $upload_files_model->set_file_desc($this->input->post('file_desc', TRUE));
//        $upload_files_model->set_del_ind('1');
//        $upload_files_model->set_added_by($this->input->post('added_by', TRUE));
//        $upload_files_model->set_added_date(date("Y-m-d H:i:s"));
//
//
//        echo $data_set_service->add_new_data_set($data_set_model);
//        echo $upload_files_service->add_new_upload_files($upload_files_model);
//    }

//    function edit_file_type() {
//
//        $data_set_model = new Data_set_model();
//        $data_set_service = new Data_set_service();
//        $upload_files_service = new Upload_files_service();
//        $upload_files_model = new Upload_files_model();
//
//        $data_set_model->set_data_set_id($this->input->post('data_set_id', TRUE));
//        $data_set_model->set_data_set_name($this->input->post('data_set_name', TRUE));
//        $upload_files_model->set_file_id($this->input->post('file_id', TRUE));
//        $upload_files_model->set_user_id($this->input->post('user_id', TRUE));
//        $upload_files_model->set_file_name($this->input->post('file_name', TRUE));
//        $upload_files_model->set_file_desc($this->input->post('file_desc', TRUE));
//        $upload_files_model->set_del_ind('1');
//        $upload_files_model->set_added_by($this->input->post('added_by', TRUE));
//        $upload_files_model->set_added_date(date("Y-m-d H:i:s"));
//
//        echo $data_set_service->update_data_set($data_set_model);
//        echo $upload_files_service->update_upload_files($upload_files_model);
//    }

//    function delete_file_type() {
//
//
//        $data_set_service = new Data_set_service();
//        $upload_files_service = new Upload_files_service();
//
//        echo $data_set_service->delete_data_set(trim($this->input->post('data_set_id', TRUE)));
//        echo $upload_files_service->delete_upload_files(trim($this->input->post('file_id', TRUE)));
//    }

    function get_data_for_filter() {

        $data_set_model = new Data_set_model();
        $data_set_service = new Data_set_service();
//        $upload_files_service = new Upload_files_service();
//        $upload_files_model = new Upload_files_model();

        $data_set_id = $this->input->post('data_set_id');
        $data_set_model->set_data_set_id($data_set_id);

        $datas = $data_set_service->get_data_set_by_id($data_set_model);
        ?>
        <option value="">-- Select Data --</option>
        <?php foreach ($datas as $data) { ?>
            <option value="<?php echo $data->data_set_id ?>"><?php echo $data->data_set_name; ?></option>
            <?php
        }
        ?>
        <?php
    }
    
    function get_file_for_filter() {

//        $data_set_model = new Data_set_model();
//        $data_set_service = new Data_set_service();
        $upload_files_service = new Upload_files_service();
        $upload_files_model = new Upload_files_model();

        $file_id = $this->input->post('file_id');
        $upload_files_model->set_file_id($file_id);

        $files = $upload_files_service->get_upload_files_by_id($upload_files_model);
        ?>
        <option value="">-- Select File --</option>
        <?php foreach ($files as $file) { ?>
            <option value="<?php echo $file->file_id ?>"><?php echo $file->file_name; ?></option>
            <?php
        }
        ?>
        <?php
    }

}
