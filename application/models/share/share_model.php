<?php

class Share_model extends CI_Model {

    var $graph_id;
    

    function __construct() {
        parent::__construct();
    }
    
    public function get_graph_id() {
        return $this->graph_id;
    }

    public function set_graph_id($graph_id) {
        $this->graph_id = $graph_id;
    }


}


