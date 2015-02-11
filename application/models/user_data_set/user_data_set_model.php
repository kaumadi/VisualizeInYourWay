<?php

class User_data_set_model extends CI_Model {

    var $user_id;
    var $data_set_id;
   

    function __construct() {
        parent::__construct();
    }
    
    public function get_user_id() {
        return $this->user_id;
    }

    public function get_data_set_id() {
        return $this->data_set_id;
    }

    public function set_user_id($user_id) {
        $this->user_id = $user_id;
    }

    public function set_data_set_id($data_set_id) {
        $this->data_set_id = $data_set_id;
    }


}

