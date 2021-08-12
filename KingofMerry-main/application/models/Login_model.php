<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{
    // public function insert_info($data)
    // {
    //     return $this->db->insert('member',$data);
    // }
    public function __construct()
    {
        $this->load->database();
    }

    public function check($data)
    {
        $query = $this->db->get_where('Membership',array('mail' => $data['id']));
        $result = $query->row_array();
        if($query->num_rows() !== 1){
            return false;
        }
        if(password_verify($data['password'],$result['password'])){
            return true;
        }
        return false;
    }

    public function fetch_all()
    {
        return $this->db->get('Membership')->result_array();
    }

}
