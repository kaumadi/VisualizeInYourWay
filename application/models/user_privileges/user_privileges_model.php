<?php

class User_privileges_model extends CI_Model {

    var $user_privilege_code;
    var $user_code;
    var $privilege_code;
    var $added_date;

    function __construct() {
        parent::__construct();
    }

    public function get_user_privilege_code() {
        return $this->user_privilege_code;
    }

    public function get_user_code() {
        return $this->user_code;
    }

    public function get_privilege_code() {
        return $this->privilege_code;
    }

    public function get_added_date() {
        return $this->added_date;
    }

    public function set_user_privilege_code($user_privilege_code) {
        $this->user_privilege_code = $user_privilege_code;
    }

    public function set_user_code($user_code) {
        $this->user_code = $user_code;
    }

    public function set_privilege_code($privilege_code) {
        $this->privilege_code = $privilege_code;
    }

    public function set_added_date($added_date) {
        $this->added_date = $added_date;
    }

}
