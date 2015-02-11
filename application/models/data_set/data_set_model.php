<?php

class Data_set_model extends CI_Model {

    var $data_set_id;
    var $data_set_name;
    

    function __construct() {
        parent::__construct();
    }
    
    public function get_data_set_id() {
        return $this->data_set_id;
    }

    public function get_data_set_name() {
        return $this->data_set_name;
    }

    public function set_data_set_id($data_set_id) {
        $this->data_set_id = $data_set_id;
    }

    public function set_data_set_name($data_set_name) {
        $this->data_set_name = $data_set_name;
    }




}
