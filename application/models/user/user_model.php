<?php

class User_model extends CI_Model {

    var $user_id;
    var $user_name;
    var $user_password;
    var $user_email;
    var $user_avatar;
    var $user_cover_image;
    var $account_activation_code;
    var $user_job;
    var $user_company_name;
    var $is_online;
    var $del_ind;
    var $added_by;
    var $added_date;
    var $updated_by;
    var $updated_date;
    var $current_date;

    function __construct() {
        parent::__construct();
    }

    public function get_user_id() {
        return $this->user_id;
    }

    public function set_user_id($user_id) {
        $this->user_id = $user_id;
    }

    public function get_user_name() {
        return $this->user_name;
    }

    public function set_user_name($user_name) {
        $this->user_name = $user_name;
    }

    public function get_user_password() {
        return $this->user_password;
    }

    public function set_user_password($user_password) {
        $this->user_password = $user_password;
    }

    public function get_user_email() {
        return $this->user_email;
    }

    public function set_user_email($user_email) {
        $this->user_email = $user_email;
    }

   

    public function get_user_avatar() {
        return $this->user_avatar;
    }

    public function set_user_avatar($user_avatar) {
        $this->user_avatar = $user_avatar;
    }

    public function get_user_cover_image() {
        return $this->user_cover_image;
    }

    public function set_user_cover_image($user_cover_image) {
        $this->user_cover_image = $user_cover_image;
    }

    public function get_account_activation_code() {
        return $this->account_activation_code;
    }

    public function set_account_activation_code($account_activation_code) {
        $this->account_activation_code = $account_activation_code;
    }
    
     public function get_user_job() {
        return $this->user_job;
    }

    public function set_user_job($user_job) {
        $this->user_job = $user_job;
    }

    public function get_user_company_name() {
        return $this->user_company_name;
    }

    public function set_user_company_name($user_company_name) {
        $this->user_company_name = $user_company_name;
    }

    public function get_is_online() {
        return $this->is_online;
    }

    public function set_is_online($is_online) {
        $this->is_online = $is_online;
    }
    
    public function get_del_ind() {
        return $this->del_ind;
    }

    public function set_del_ind($del_ind) {
        $this->del_ind = $del_ind;
    }

    
    public function get_added_by() {
        return $this->added_by;
    }

    public function set_added_by($added_by) {
        $this->added_by = $added_by;
    }

    public function get_added_date() {
        return $this->added_date;
    }

    public function set_added_date($added_date) {
        $this->added_date = $added_date;
    }

    public function get_updated_by() {
        return $this->updated_by;
    }

    public function set_updated_by($updated_by) {
        $this->updated_by = $updated_by;
    }

    public function get_updated_date() {
        return $this->updated_date;
    }

    public function set_updated_date($updated_date) {
        $this->updated_date = $updated_date;
    }

    public function get_current_date() {
        //$this->current_date= new DateTime();
        return $this->current_date;
    }
    public function set_current_date($current_date) {
        $this->current_date = $current_date;
    }



}
?>