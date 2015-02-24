<?php

class Upload_files_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('upload_files/upload_files_model');
    }

    public function get_all_upload_files_of_user($user_id) {

        $this->db->select('file_name,file_description');
        $this->db->from('upload_files');
        $this->db->join('user', 'user.user_id = upload_files.added_by');
        //$this->db->where('upload_files.user_id', $user_id);
        $this->db->order_by("upload_files.added_date", "ASC");
        $query = $this->db->get();
        return $query->result();
    }


    function add_new_upload_files($upload_files_model) {
        $this->db->insert('upload_files', $upload_files_model);
        return $this->db->insert_id();
    }

    function delete_upload_files($file_id) {
        $data = array('del_ind' => '0');
        $this->db->where('file_id', $file_id);
        return $this->db->update('upload_files', $data);
    }

    function get_upload_files_by_id($file_id) {
        $query = $this->db->get_where('upload_files', array('file_id' => $file_id));
        return $query->row();
    }

    function get_upload_files_by_name($file_name) {

        $query = $this->db->get_where('upload_files', array('file_name' => $file_name));
        return $query->row();
    }

    function update_upload_files($upload_files_model) {

        $data = array(
            'file_name' => $upload_files_model->get_file_name(),
            'file_description' => $upload_files_model->get_file_description()
        );

        $this->db->where('file_id', $upload_files_model->get_file_id());

        return $this->db->update('upload_files', $data);
    }

    function get_last_upload_files_id() {
        $this->db->select('file_id');
        $this->db->from('upload_files');
        $this->db->order_by("file_id", "desc");
        $this->db->limit(1);
        $query = $this->db->get();

        return $query->row();
    }

}
