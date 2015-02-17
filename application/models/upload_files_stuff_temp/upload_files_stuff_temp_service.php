<?php

class Upload_files_stuff_temp_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('upload_files_stuff_temp/upload_files_stuff_temp_model');
    }

    public function get_all_upload_files_stuff_temp_for_user($user_id) {

        $this->db->select('*');
        $this->db->from('upload_files_stuff_temp');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        return $query->result();
    }

    function add_new_upload_files_stuff_temp($upload_files_stuff_temp_model) {
        return $this->db->insert('upload_files_stuff_temp', $upload_files_stuff_temp_model);
    }

    function truncate_upload_files_temp_stuff() {
        return $this->db->truncate('upload_files_stuff_temp');
    }

   

}
