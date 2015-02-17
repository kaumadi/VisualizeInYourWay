<?php

class Upload_files_stuff_temp_model extends CI_Model {

    var $upload_file_stuff_id;
    var $stuff_name;
    var $user_id;
    var $del_ind;
    var $added_date;
    var $added_by;

    function __construct() {
        parent::__construct();
    }

    public function get_upload_file_stuff_id() {
        return $this->upload_file_stuff_id;
    }

    public function get_stuff_name() {
        return $this->stuff_name;
    }

    public function get_user_id() {
        return $this->user_id;
    }

    public function get_del_ind() {
        return $this->del_ind;
    }

    public function get_added_date() {
        return $this->added_date;
    }

    public function get_added_by() {
        return $this->added_by;
    }

    public function set_upload_file_stuff_id($upload_file_stuff_id) {
        $this->upload_file_stuff_id = $upload_file_stuff_id;
    }

    public function set_stuff_name($stuff_name) {
        $this->stuff_name = $stuff_name;
    }

    public function set_user_id($user_id) {
        $this->user_id = $user_id;
    }

    public function set_del_ind($del_ind) {
        $this->del_ind = $del_ind;
    }

    public function set_added_date($added_date) {
        $this->added_date = $added_date;
    }

    public function set_added_by($added_by) {
        $this->added_by = $added_by;
    }

}
