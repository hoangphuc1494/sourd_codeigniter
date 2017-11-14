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
    public function commonDelete($table = '', $condition = '') {
        return $this->db->delete ( $table, $condition );
    }
    // public function get_details($select = '', $table = '', $condition = ''){
    //      $this->db->select($select);
    //      $this->db->from($table);
    //      $this->db->where($condition);
    //      return $this->db->get();
    // }

    /*
    $Query = 'select p.*,u.full_name,u.user_name from '.PRODUCT_LIKES.' pl
     JOIN '.USER_PRODUCTS.' p on pl.product_id=p.seller_product_id
     LEFT JOIN '.USERS.' u on p.user_id=u.id
     where pl.user_id='.$uid.' and p.status="Publish" order by pl.time desc';
     return $this->db->query($query);
    
    $this->db->select('p.*,u.email,u.full_name,u.address,u.phone_no,u.postal_code,u.state,u.country,u.city,pd.product_name,pd.id as PrdID,pd.image');
        $this->db->from(PAYMENT.' as p');
        $this->db->join(USERS.' as u' , 'p.user_id = u.id');
        $this->db->join(PRODUCT.' as pd' , 'pd.id = p.product_id');
        $this->db->where('p.user_id = "'.$uid.'" and p.dealCodeNumber="'.$dealCode.'"');
        return $this->db->get();
     */


}