<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function fetch_product($id)
    {
        return $this->db->where('id', $id)
            ->get('Product')
            ->row_array();
    }

    public function c($data)
    {
        $this->db->insert('LOD', $data);
    }

    // public function get_num()
    // {
    //     return $this->db->select("ID")
    //         ->order_by("ID", "DESC")
    //         ->limit(1)
    //         ->get("Product")
    //         ->row_array();
    // }

    public function fetch_all()
    {
        return $this->db->get('Product')
            ->result_array();
    }

    public function product_row($product_data = null)
    {
        if ($product_data) {
            $this->db->limit($product_data);
        }
        return $this->db->get('Product')
            ->result_array();
    }

    public function get_num()
    {
            $this->db->select_sum('good', 'total_good'); // 次を生成: SELECT SUM(age) as age FROM members
            $this->db->select_sum('bad', 'total_bad');
            $this->db->select('name');
            $this->db->group_by("name"); // 次を生成: GROUP BY title
            return $this->db->get('LOD')// 次を生成: FROM table
            ->result_array();
            // foreach ($query->result_array() as $row) {
            //     print_r($row);
            // }
    }
}
