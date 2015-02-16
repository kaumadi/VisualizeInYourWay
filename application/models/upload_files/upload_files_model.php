<?php

class Upload_files_model extends CI_Model {

    var $file_id;
    var $file_name;
    var $file_desc;
    var $added_by;
    var $added_date;

    function __construct() {
        parent::__construct();
    }
    
    public function get_file_id() {
        return $this->file_id;
    }

    public function get_file_name() {
        return $this->file_name;
    }

    public function get_file_desc() {
        return $this->file_desc;
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

    public function set_file_name($file_name) {
        $this->file_name = $file_name;
    }

    public function set_file_desc($file_desc) {
        $this->file_desc = $file_desc;
    }

    public function set_added_by($added_by) {
        $this->added_by = $added_by;
    }

    public function set_added_date($added_date) {
        $this->added_date = $added_date;
    }


    
}
    