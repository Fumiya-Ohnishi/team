<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_model extends CI_Model{
    public function __construct()
    {
        // parent::__construct();
        $this->load->database();
    }
    public function insert_info($data)
    {
        if($data['gender'] == '男性'){
            $data['gender'] = 1;
        }else{
            $data['gender'] =2;
        }
        if($data['magazine'] == '希望する'){
            $data['magazine'] = 1;
        }else{
            $data['magazine'] =2;
        }
        return $this->db->insert('Membership',$data);
    }

    public function check($mail)
    {
        $query = $this->db->get_where('Membership',array('mail' => $mail));
        if($query->num_rows() === 1){
            return 1;
        }
    }
}