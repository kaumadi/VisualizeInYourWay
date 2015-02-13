<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Employee_privilege_controller extends CI_Controller {

    function __construct() {
        parent::__construct();

        if (!$this->session->userdata('EMPLOYEE_LOGGED_IN')) {
            redirect(site_url() . '/login/login_controller');
        } else {

            $this->load->model('privilege/privilege_model');
            $this->load->model('privilege/privilege_service');

        }
    }

    function manage_privileges($id) {

        $privilege_service = new Privileges_service();

        $data['heading'] = "Manage Privileges";

//        $data['systems'] = $system_service->get_all_systems();
        $data['privilege_detail'] = $privilege_service->get_privileges_by_master_privilege_assigned_for($id, $user);

        $current_assigned_privileges = $privilege_service->get_privileges_by_master_privilege_assigned_for_user($id, $user, $system);
        $privileges = array();
        foreach ($current_assigned_privileges as $current_assigned_privilege) {
            array_push($privileges, $current_assigned_privilege->privilege_code);
        }

        $data['assigned_privileges'] = $privileges;
//        $data['employee_code'] = $id;

        $partials = array('content' => 'privilege/manage_privilege_view');
        $this->template->load('template/main_template', $partials, $data);
    }

    function add_privileges() {

        $privilege_model = new Privileges_model();
        $privilege_service = new Privileges_service();
        //setting the employe id
        $privilege_model->set_privilege_code($this->input->post('privilege_code', TRUE));
//        $privilege_model->set_privilege_code($this->input->post('pri_code', TRUE));
        //adding the employee piviledges based on the template
        $Privilege_service->add_new_privilege($privilege_model);
        echo 1;
    }

    function privileges_add_all() {

        $privilege_model = new Privileges_model();
        $privilege_service = new Privileges_service();
//        $privilege_service = new Privilege_service();
//        $privilege_master_service = new Privilege_master_service();
//        $employee_service = new employee_service();

        //setting the employe id
//        $employee = $employee_service->get_employee_by_id($this->input->post('emp_id', TRUE));
        $privilege_model->set_privilege_code($this->input->post('privilege_code', TRUE));

//        $master_privileges = $privilege_master_service->get_privilege_master_by_system_code($this->input->post('system_code', TRUE));

//        foreach ($master_privileges as $master_privilege) {
//            $privileges = $privilege_service->get_privileges_by_master_privilege_assigned_for($master_privilege->privilege_master_code, $employee->employee_type);
//            foreach ($privileges as $privilege) {
//                $employee_privilege_model->set_privilege_code($privilege->privilege_code);
//
//                $employee_privilege_service->add_new_employee_privilege_system($employee_privilege_model);
//            }
//        }
        //adding the employee piviledges based on the template
        echo 1;
    }

    function employee_privileges_delete_all() {

        $privilege_model = new Privileges_model();
        $privilege_service = new Privileges_service();
//        $privilege_service = new Privilege_service();
//        $privilege_master_service = new Privilege_master_service();
//        $employee_service = new employee_service();

        //setting the employe id
//        $employee = $employee_service->get_employee_by_id($this->input->post('emp_id', TRUE));
        $privilege_model->set_privilege_code($this->input->post('privilege_code', TRUE));

//        $master_privileges = $privilege_master_service->get_privilege_master_by_system_code($this->input->post('system_code', TRUE));

//        foreach ($master_privileges as $master_privilege) {
//            $privileges = $privilege_service->get_privileges_by_master_privilege_assigned_for($master_privilege->privilege_master_code, $employee->employee_type);
//            foreach ($privileges as $privilege) {
//                $employee_privilege_model->set_privilege_code($privilege->privilege_code);
//
//                $employee_privilege_service->delete_new_employee_privilege_system($employee_privilege_model);
//            }
//        }

        //adding the employee piviledges based on the template
        echo 1;
    }

}

