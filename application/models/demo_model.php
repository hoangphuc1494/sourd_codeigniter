<?php 

class Demo_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_question() {
        $query = "SELECT * FROM questions";
        // echo $query;die;
        return $this->db->query($query);
    }

    public function get_image() {
        $query = "SELECT * FROM images";
        // echo $query;die;
        return $this->db->query($query);
    }

    public function simple_insert($table = '', $data = '') {
        $this->db->insert ( $table, $data );
    }
    public function update_details($table = '', $data = '', $condition = '') {
        $this->db->where ( $condition );
        return $this->db->update ( $table, $data );
    }

}