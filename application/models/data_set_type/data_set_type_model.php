<?php

class Data_set_type_model extends CI_Model {

    var $data_set_type_id;
    var $data_set_type_name;
    var $data_set_type_description;

    function __construct() {
        parent::__construct();
    }

    public function get_data_set_type_id() {
        return $this->data_set_type_id;
    }

    public function get_data_set_type_name() {
        return $this->data_set_type_name;
    }

    public function get_data_set_type_description() {
        return $this->data_set_type_description;
    }

    public function set_data_set_type_id($data_set_type_id) {
        $this->data_set_type_id = $data_set_type_id;
    }

    public function set_data_set_type_name($data_set_type_name) {
        $this->data_set_type_name = $data_set_type_name;
    }

    public function set_data_set_type_description($data_set_type_description) {
        $this->data_set_type_description = $data_set_type_description;
    }

}
