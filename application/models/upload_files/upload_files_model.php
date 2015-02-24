<?php

class Upload_files_model extends CI_Model {

    var $file_id;
    var $user_id;
    var $file_name;
    var $file_description;
    var $del_ind;
    var $added_by;
    var $added_date;

    function __construct() {
        parent::__construct();
    }

    public function get_file_id() {
        return $this->file_id;
    }

    public function get_user_id() {
        return $this->user_id;
    }

        public function get_file_name() {
        return $this->file_name;
    }

    public function get_file_description() {
        return $this->file_description;
    }

    public function get_del_ind() {
        return $this->del_ind;
    }

    public function get_added_by() {
        return $this->added_by;
    }

    public function get_added_date() {
        return $this->added_date;
    }

    public function set_file_id($file_id) {
        $this->file_id = $file_id;
    }
    
    public function set_user_id($user_id) {
        $this->user_id = $user_id;
    }

    
    public function set_file_name($file_name) {
        $this->file_name = $file_name;
    }

    public function set_file_description($file_description) {
        $this->file_description = $file_description;
    }

    public function set_del_ind($del_ind) {
        $this->del_ind = $del_ind;
    }

    public function set_added_by($added_by) {
        $this->added_by = $added_by;
    }

    public function set_added_date($added_date) {
        $this->added_date = $added_date;
    }

}
