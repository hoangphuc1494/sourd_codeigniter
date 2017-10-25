<?php 

class Demo_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_question()
    {
        $query = "SELECT * FROM questions";
        // echo $query;die;
        return $this->db->query($query);
    }

}