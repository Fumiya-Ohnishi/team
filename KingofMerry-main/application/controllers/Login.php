<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('Login_model');
        $this->load->model('Product_model');
        date_default_timezone_set('Asia/Tokyo');
    }

    public function index()
    {
        $this->form_validation->set_rules('id', 'ログインID', 'required', array('required' => '※%sの入力は正しい形式で入力下さい。'));
        $this->form_validation->set_rules('password', 'パスワード', 'required', array('required' => '※%sは正しい形式で入力して下さい。'));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('LOD_login_header_view');
            $this->load->view('LOD_login_view');
        } else {
            $data = [
                'id' => $this->input->post('id', true),
                'password' => $this->input->post('password', true)
            ];
            $result =  $this->Login_model->check($data);
            if ($result) {
                $this->session->set_userdata(["loginProcess" => true]);
                $product_arr = $this->Product_model->product_row();
                $row = $this->Product_model->get_num();
                $arr_count = count($product_arr);
                $count = count($row);
                for ($q = 0; $q < $arr_count; $q++) {
                    for ($i = 0; $i < $count; $i++) {
                        if ($product_arr[$q]["PRODUCT_NAME"] == $row[$i]["name"]) {
                            $product_data['product_list'][] =
                                array(
                                    "name" => $product_arr[$q]["PRODUCT_NAME"],
                                    "price" => $product_arr[$q]["PRICE"],
                                    "image" => $product_arr[$q]["IMAGE"],
                                    "text" => $product_arr[$q]["PRODUCT_TEXT"],
                                    "good" => $row[$i]["total_good"],
                                    "bad" => $row[$i]["total_bad"]
                                );
                        }
                    };
                };
                $this->load->view('product_header');
                $this->load->view('product', $product_data);
            } else {
                $this->load->view('LOD_login_header_view');
                $this->load->view('LOD_login_view');
            }
        }
    }

    public function list()
    {
        if (!$this->session->userdata('loginProcess')) {
            header('location: /Login/index');
            exit;
        } else {
            $data["user_info"] = $this->Login_model->fetch_all();
            $this->load->view('list_header_view');
            $this->load->view('list_view', $data);
        }
    }
}
