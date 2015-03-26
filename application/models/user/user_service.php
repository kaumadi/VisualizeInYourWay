<?php

class User_service extends CI_Model {

    function __construct() {

        parent::__construct();
    }

    //update user_profile
    function update_user_profile($user_model) {

        $data = array(
            'user_name' => $user_model->get_user_name(),
            'user_email' => $user_model->get_user_email(),
            'user_job' => $user_model->get_user_job(),
            'user_company_name' => $user_model->get_user_company_name(),
        );

        $this->db->where('user_id', $user_model->get_user_id());
        return $this->db->update('user', $data);
    }
    
    
    //update user last login date
       function update_user_lastlogin_date($user_model) {

        $data = array(
            'updated_date' => $user_model->get_current_date(),
        );

        $this->db->where('user_id', $user_model->get_user_id());
        return $this->db->update('user', $data);
    }
    
    

    //update online status
    function update_online_status($user_model) {
        $data = array('is_online' => $user_model->get_is_online());
        $this->db->where('user_id', $user_model->get_user_id());
        return $this->db->update('user', $data);
    }

    //update user avatar
    function update_user_avatar($user_model) {
        $data = array('user_avatar' => $user_model->get_user_avatar());
        $this->db->where('user_id', $user_model->get_user_id());
        return $this->db->update('user', $data);
    }

    //update user cover image
    function update_user_cover_image($user_model) {
        $data = array('user_cover_image' => $user_model->get_user_cover_image());
        $this->db->where('user_id', $user_model->get_user_id());
        return $this->db->update('user', $data);
    }

    //get user details by user id
    /* this function use in user controller edit_user_view($user_code)  function */
    function get_user_by_email($user_email) {

        $query = $this->db->get_where('user', array('user_email' => $user_email));
        return $query->row();
    }
    
//    function get_users_by_id($user_id) {
//
//        $query = $this->db->get_where('user', array('user_id' => $user_id));
//        return $query->row();
//    }
    
    /*display user avatar*/
    public function get_all_users() {


        $this->db->select('user_avatar');
        $this->db->from('user');
        $this->db->where('del_ind','1');
        $this->db->order_by("user.user_id", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    
    /*manage users*/
    public function get_all_user_details() {


        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('del_ind','1');
        $this->db->order_by("user.user_id", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    function authenticate_user($user_model) {

        $data = array('user_email' => $user_model->get_user_email() );

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($data);
        $query = $this->db->get();
      
        return $query->row();
    }

    function authenticate_user_with_password($user_model) {

        $data = array('user_email' => $user_model->get_user_email(), 'user_password' => $user_model->get_user_password());

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($data);
        $query = $this->db->get();
          
        return $query->row();
    }

    function get_server_by_email($user_model) {

        $server = 0;
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user.user_email', $user_model->get_user_email());
        $this->db->where('del_ind', '1');
        $query = $this->db->get();
        foreach ($query->result() as $user) {
//            $server = $emp->mail_server;
            $server = 1;
        }
        return $server;
    }

    //check token match for the actual one
    /* this function use in user controller in  function account_activation($emp_id, $token) */
//    public function check_user_id_token_combination($user_model) {
//        $this->db->where('user_id', $user_model->get_user_code());
//        $this->db->where('account_activation_code', $user_model->get_account_activation_code());
//        $res = $this->db->get('user');
//        return $res->num_rows();
//    }

    //check token match for the actual one
    /* this function use in user controller in  function account_activation($user_id, $token) */
//    function activate_user_account($user_model) {
//        $data = array('del_ind' => $user_model->get_del_ind());
//        $this->db->where('user_id', $user_model->get_user_id());
//        return $this->db->update('user', $data);
//    }

//    function get_users($user_status = 1) {
//
//        $keywords = $this->input->post('keywords');
//        if (trim($keywords) != "") {
//            $this->db->like('CONCAT(Employee_Name," ",last_name )', $keywords);
//        }
//        $this->db->where('Status', '1');
//        // 14Oct2013 Barathy
//        if ($emp_status == 1) {
//            $this->db->where("(resigned_date >=  '" . date('Y-m-d') . "'  or resigned_date = '0000-00-00')");
//            //$this->db->or_where('resigned_date =', '0000-00-00');
//            //change by chamika because function not work correctly
//        } else {
//            $this->db->where('resigned_date <', "date('Y-m-d')");
//            $this->db->where('resigned_date !=', '0000-00-00');
//        }
//        $this->db->where('Employee_Code !=', '0');
//        $this->db->order_by("Employee_Name");
//        // 14Oct2013 Barathy End
//        $query = $this->db->get('lcs_user');
//        //echo $this->db->last_query();
//        //$this->db->order_by('Employee_Code',"desc");
//        return $query->result();
//    }

//    function getEmployeesWithEmpNo($emp_status = 1) {
//
//        $this->db->where('Status', '1');
//        if ($emp_status == 1) {
//            $this->db->where('resigned_date >=', "date('Y-m-d')");
//            $this->db->or_where('resigned_date =', '0000-00-00');
//        } else {
//            $this->db->where('resigned_date <', "date('Y-m-d')");
//            $this->db->where('resigned_date !=', '0000-00-00');
//        }
//        $this->db->where('Employee_Code !=', '0');
//        $this->db->where('user_no !=', '');
//        $this->db->order_by("Employee_Name");
//        $query = $this->db->get('lcs_user');
//        //echo $this->db->last_query();
//        return $query->result();
//    }
//    function getactiveEmployeescount() {
//
//        $query = $this->db->get_where('lcs_user', array('Status' => '1', 'Employee_Code !=' => '0'));
//        return $query->num_rows();
//    }
    function add_new_user($user_model) {

        return $this->db->insert('user', $user_model);
    }

    /*
     * this function use in user controller add_new_user() function
     */

    function add_user($user_model) {

        $this->db->insert('user', $user_model);
        $this->db->last_query();
        return $this->db->insert_id();
    }

    /*
     * this function use in user controller delete_user() function
     */

    function delete_user($user_id) {
        $data = array('del_ind' => '0');
        $this->db->where('user_id', $user_id);
        return $this->db->update('user', $data);
    }

    function update_user($usermodel) {

        //setting the fields need to be update
        $data = array('user_id' => $usermodel->get_user_id(), //11Oct2013 Barathy
            'user_name' => $usermodel->get_user_name(), 'Email' => $usermodel->get_user_email()); /*'full_name' => $usermodel->getFull_name(), 'birthday' => $usermodel->getBirthday(), 'nic' => $usermodel->getNic(), 'gender' => $usermodel->getGender(), 'marital_status' => $usermodel->getMarital_status(), 'address1' => $usermodel->getAddress1(), 'address2' => $usermodel->getAddress2(), 'city' => $usermodel->getCity(), 'mobile_no' => $usermodel->getMobile_no(), 'phone_extension' => $usermodel->getPhone_extension(), 'contract_type' => $usermodel->getContract_type(),*/ //11Oct2013 Barathy
            //'emp_cat_id' => $usermodel->getEmp_cat_id(), //11Oct2013 Barathy
           // 'joined_date' => $usermodel->getJoined_date(), 'resigned_date' => $usermodel->getResigned_date(), 'roster_id ' => $usermodel->getRoster_id(), 'emp_image' => $usermodel->getEmp_image(), 'company_id' => $usermodel->getCompany_id(), 'mail_server' => $usermodel->getMail_server(), 'updated_by' => $this->session->userdata('LCS_EMPLOYEE_CODE'), 'updated_date' => date('Y-m-d H:i:s'));
        $this->db->where('user_id', $usermodel->get_user_id());
        return $this->db->update('lcs_user', $data);
    }

    public function get_user($user_id) {

        $query = $this->db->get_where('user', array('user_id' => $user_id, 'del_ind' => '1'));
        return $query->row();
    }





    

    
    function checkUserIdExists($user_id) {

        $query = $this->db->get_where('lcs_user', array('user_id' => $user_id));
        return $query->num_rows();
    }

    

  

    function getUserpasswordbyid($usermodel) {

        $this->db->select('lcs_user.Password');
        $this->db->from('lcs_user');
        $this->db->where('lcs_user.User_Id ', $usermodel->getUser_Id());
        $query = $this->db->get();
        return $query->row()->Password;
    }

    function setnewPassword($usermodel) {

        $data = array('Password' => $usermodel->getPassword());
        $this->db->where('User_Id', $usermodel->getUser_Id());
        $result = $this->db->update('lcs_user', $data);
        return $result;
    }

    function change_user_pro_pic($usermodel) {

        $data = array('user_avatar' => $usermodel->get_user_avatar());
        $this->db->where('user_id', $usermodel->get_user_id());
        $result = $this->db->update('lcs_user', $data);
        return $result;
    }

//    //functions to check email and user number availability
//    function checkEmail($user_model) {
//
//        $this->db->select('*');
//        $this->db->from('lcs_user');
//        $this->db->where('lcs_user.Email ', $user_model->get_user_email());
//        if ((int) $user_model->get_user_id() != 0) {
//            $this->db->where('lcs_user.user_id !=', $user_model->get_user_id());
//        }
//        $query = $this->db->get();
//        //echo $this->db->last_query();die;
//        //echo $query->num_rows();die;
//        return $query->num_rows();
//    }

    function add_new_user_registration($user_model) {

        $this->db->insert('user', $user_model);
        return $this->db->insert_id();
    }

}
