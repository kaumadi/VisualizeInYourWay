<?php

class Data_set_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('data_set/data_set_model');
    }

    /*
     * This is the service function to get all data_sets
     */

    public function get_all_data_sets() {


        $this->db->select('*');
        $this->db->from('data_set');
        $this->db->order_by("data_set.data_set_id", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    function add_new_data_set($data_set_model) {

        return $this->db->insert('data_set', $data_set_model);
    }

    function delete_data_set($data_set_code) {

        return $this->db->delete('data_set', array('data_set_id' => $data_set_id));
    }

    function get_data_set_by_id($data_set_id) {

        $query = $this->db->get_where('data_set', array('data_set_id' => $data_set_id));
        return $query->row();
    }

    function update_data_set($data_set_model) {

        $data = array(
            'data_set_id' => $data_set_model->get_data_set_id(),
            'data_set_name' => $data_set_model->get_data_set_name(),
        );


        $this->db->where('data_set_id', $data_set_model->get_data_set_id());

        return $this->db->update('data_set', $data);
    }

}
