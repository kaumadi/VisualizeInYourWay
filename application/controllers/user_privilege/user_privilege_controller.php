<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_privilege_controller extends CI_Controller {

    function __construct() {
        parent::__construct();

        if (!$this->session->userdata('USER_LOGGED_IN')) {
            redirect(site_url() . '/login/login_controller');
        } else {

            $this->load->model('user_privileges/user_privileges_model');
            $this->load->model('user_privileges/user_privileges_service');

            $this->load->model('settings/system/system_model');
            $this->load->model('settings/system/system_service');

            $this->load->model('privilege_master/privilege_master_model');
            $this->load->model('privilege_master/privilege_master_service');

            $this->load->model('privilege/privilege_model');
            $this->load->model('privilege/privilege_service');

            $this->load->model('user/user_model');
            $this->load->model('user/user_service');
        }
    }

    function manage_user_privileges($id) {

        $user_service = new user_service();
        $system_service = new System_service();
        $user_privilege_service = new USser_privileges_service();

        $data['heading'] = "Manage User Privileges";

        $data['systems'] = $system_service->get_all_systems();
        $data['user_detail'] = $user_service->get_user_by_id($id);

        $current_assigned_privileges = $user_privilege_service->get_assigned_privileges_by_user_id($id);
        $privileges = array();
        foreach ($current_assigned_privileges as $current_assigned_privilege) {
            array_push($privileges, $current_assigned_privilege->privilege_code);
        }

        $data['assigned_privileges'] = $privileges;
        $data['user_id'] = $id;

        $partials = array('content' => 'user_privilege/manage_user_privilege_view');
        $this->template->load('template/main_template', $partials, $data);
    }

    function add_user_privileges() {

        $user_privilege_model = new User_privileges_model();
        $user_privilege_service = new User_privileges_service();
        //setting the user id
        $user_privilege_model->set_user_id($this->input->post('user_id', TRUE));
        $user_privilege_model->set_privilege_code($this->input->post('pri_code', TRUE));
        //adding the user piviledges based on the template
        $user_privilege_service->add_new_user_privilege($user_privilege_model);
        echo 1;
    }

    function user_privileges_add_all() {

        $user_privilege_model = new User_privileges_model();
        $user_privilege_service = new User_privileges_service();
        $privilege_service = new Privilege_service();
        $privilege_master_service = new Privilege_master_service();
        $user_service = new user_service();

        //setting the user id
        $user = $user_service->get_user_by_id($this->input->post('user_id', TRUE));
        $user_privilege_model->set_user_id($this->input->post('user_id', TRUE));

        $master_privileges = $privilege_master_service->get_privilege_master_by_system_code($this->input->post('system_code', TRUE));

        foreach ($master_privileges as $master_privilege) {
            $privileges = $privilege_service->get_privileges_by_master_privilege_assigned_for($master_privilege->privilege_master_code, $user->user_id);
            foreach ($privileges as $privilege) {
                $user_privilege_model->set_privilege_code($privilege->privilege_code);

                $user_privilege_service->add_new_user_privilege_system($user_privilege_model);
            }
        }
        //adding the user piviledges based on the template
        echo 1;
    }

    function user_privileges_delete_all() {

        $user_privilege_model = new USser_privileges_model();
        $user_privilege_service = new USser_privileges_service();
        $privilege_service = new Privilege_service();
        $privilege_master_service = new Privilege_master_service();
        $user_service = new user_service();

        //setting the user id
        $user = $user_service->get_user_by_id($this->input->post('user_id', TRUE));
        $user_privilege_model->set_user_id($this->input->post('user_id', TRUE));

        $master_privileges = $privilege_master_service->get_privilege_master_by_system_code($this->input->post('system_code', TRUE));

        foreach ($master_privileges as $master_privilege) {
            $privileges = $privilege_service->get_privileges_by_master_privilege_assigned_for($master_privilege->privilege_master_code, $user->user_id);
            foreach ($privileges as $privilege) {
                $user_privilege_model->set_privilege_code($privilege->privilege_code);

                $user_privilege_service->delete_new_user_privilege_system($user_privilege_model);
            }
        }

        //adding the user piviledges based on the template
        echo 1;
    }

}
