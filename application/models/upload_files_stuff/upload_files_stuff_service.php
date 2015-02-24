<?php

class Upload_files_stuff_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('upload_files_stuff/upload_files_stuff_model');
    }

    public function get_upload_files_stuff_for_upload_files($file_id) {

        $this->db->select('*');
        $this->db->from('upload_files_stuff');
        $this->db->where('file_id', $file_id);
        $this->db->order_by("del_ind", "1");
        $query = $this->db->get();
        return $query->result();
    }

    function add_new_upload_files_stuff($upload_files_stuff_model) {
        return $this->db->insert('upload_files_stuff', $upload_files_stuff_model);
    }

    function delete_upload_files($file_id) {
        $data = array('del_ind' => '0');
        $this->db->where('file_id', $file_id);
        return $this->db->update('upload_files', $data);
    }

       public function get_all_upload_files_stuff() {


        $this->db->select('*');
        $this->db->from('upload_files_stuff');
        $query = $this->db->get();
        return $query->result();
    }

}
