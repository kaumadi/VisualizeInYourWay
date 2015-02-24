<?php

class User_data_set_model extends CI_Model {

    
    var $data_set_id;
    var $data_set_type_id;
    var $mapping_description;
   

    function __construct() {
        parent::__construct();
    }
    
    public function get_data_set_id() {
        return $this->data_set_id;
    }

    public function get_data_set_type_id() {
        return $this->data_set_type_id;
    }

    public function get_mapping_description() {
        return $this->mapping_description;
    }

    public function set_data_set_id($data_set_id) {
        $this->data_set_id = $data_set_id;
    }

    public function set_data_set_type_id($data_set_type_id) {
        $this->data_set_type_id = $data_set_type_id;
    }

    public function set_mapping_description($mapping_description) {
        $this->mapping_description = $mapping_description;
    }


    


}

