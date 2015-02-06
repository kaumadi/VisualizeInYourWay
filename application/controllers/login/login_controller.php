<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_controller extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html


     */
    function __construct() {
        parent::__construct();

        
        $this->load->model('user/user_model');
        $this->load->model('user/user_service');
        $this->load->library("settings_option_handler");
        
    }

    function index() {
        if ($this->session->userdata('USER_LOGGED_IN')) {
            redirect(base_url() . 'index.php/dashboard/dashboard_controller/');

        } else {

            $this->template->load('template/login');
        }
    }

    //Login details checking function 
    function authenticate_user() {

        $setting_login_type_id = '1'; //setting id 1 = User Login Options , in main_settings table

        $user_model = new User_model();
        $user_service = new User_service();

        $email = $this->input->post('login_username', TRUE);

        

        $login_option =  $this->config->item('LOGIN_OPTION');
        // 1 = Username & Password
        if ($login_option == 1) {
            //  $logged_user_result = '';
            $user_model->set_user_email($email);
            $user_model->set_user_password(md5($this->input->post('login_password', TRUE))); // password md 5 change 

            if (count($user_service->authenticate_user_with_password($user_model)) == 0) {
                $logged_user_result = false;
            } else {
                $logged_user_result = true;
            }
            
        }

        // 2 = Active Directory Authentication
        if ($login_option == 2) {
           

            $logged_user_result = true;
            $user_model->set_user_email($email);
 
        }

        // 3 = Corporate Email authentication
        if ($login_option == 3) {


            $user_model->set_user_email($email);
            $user_model->set_user_password($this->input->post('login_password', TRUE)); // password md 5 change

            $mailServer = $user_service->get_server_by_email($user_model);

            

            if ($mailServer == 1) {
                $logged_user_result = $this->authenticate_user_email($user_model, $this->config->item('MAILBOX'));
            } else if ($mailServer == 2) {
                $logged_user_result = $this->authenticate_user_email($user_model, $this->config->item('MAILBOX2'));
            } else {
                $logged_user_result = FALSE;
            }
        }




        /* Remove Imap authenticate error login with some machine */
       
        if ($logged_user_result) {// change
            $logged_user_details = $user_service->authenticate_user($user_model);




            if (count($logged_user_details) == 0) {

                echo 0;
            } else {

                $emp_login_status_model = new Employee_model();
                $emp_login_status_model->set_is_online('Y');
                $emp_login_status_model->set_user_code($logged_user_details->user_code);
                $user_service->update_online_status($emp_login_status_model);
                //Setting sessions		
                $this->session->set_userdata('EMPLOYEE_CODE', $logged_user_details->user_code);
//                $this->session->set_userdata('EMPLOYEE_WELCOME', $logged_user_details->preferred_welcome_sys);
                $this->session->set_userdata('EMPLOYEE_FIRST', '1'); //check first time log in and redirect to welcome page
                $this->session->set_userdata('EMPLOYEE_NAME', $logged_user_details->user_fname . ' ' . $logged_user_details->user_lname);
                $this->session->set_userdata('EMPLOYEE_FNAME', $logged_user_details->user_fname);
                $this->session->set_userdata('EMPLOYEE_LNAME', $logged_user_details->user_lname);
                $this->session->set_userdata('EMPLOYEE_EMAIL', $logged_user_details->user_email);
                $this->session->set_userdata('EMPLOYEE_PROPIC', $logged_user_details->user_avatar);
                $this->session->set_userdata('EMPLOYEE_COVERPIC', $logged_user_details->user_cover_image);
                $this->session->set_userdata('EMPLOYEE_COMPANY_CODE', $logged_user_details->company_code);
                $this->session->set_userdata('EMPLOYEE_COMPANY_NAME', $logged_user_details->company_name);
                $this->session->set_userdata('EMPLOYEE_TYPE', $logged_user_details->user_type);
                $this->session->set_userdata('EMPLOYEE_ONLINE', 'Y');


                //checking gor teh DOB and saving  a note in a session , LCS_EMPLOYEE_BD
                $bd = explode("-", $logged_user_details->user_bday);

                if ($bd[1] . '-' . $bd[2] == date('m-d')) {
                    $this->session->set_userdata('EMPLOYEE_BD', 'Y');
                }
                $this->session->set_userdata('EMPLOYEE_LOGGED_IN', 'TRUE');



                echo 1;
            }
        } else {
            echo 0;
        }// if($logged_user_result){
    }

    function get_email_user($usermodel) {
        $username_arr = explode('@', $usermodel->getEmail());


        $this->username = $username_arr[0];
        return $this->username;
    }

    function logout() {

        $emp_login_status_model = new Employee_model();
        $user_service = new Employee_service();

        $emp_login_status_model->set_is_online('N');
        $emp_login_status_model->set_user_code($this->session->userdata('EMPLOYEE_CODE'));

        $user_service->update_online_status($emp_login_status_model);

        $this->session->sess_destroy();
        redirect(site_url() . '/login/login_controller');
    }

    
    function authenticate_user_email($user_model, $mail_box) {
//
//        // imap_timeout(IMAP_OPENTIMEOUT,10);
//        $conn = imap_open($mailbox, $this->getEmailUser($usermodel), $usermodel->getPassword(), null) or die();
//
//        if ($conn) {
//            $result = TRUE;
//        } else {
//            $result = FALSE;
//        }
//
//
//        imap_close($conn);
        $result = TRUE;

        return $result;
    }

    /*
     * Api Methods for User Login
     */

    /*
     * Login details checking function for desktop client
     * if username and password wrong
     * or there's no such user according to that username or pasword 
     * this function will return 0
     * otherwise return users' user code 
     * as the correct authentication.
     */

    

}
