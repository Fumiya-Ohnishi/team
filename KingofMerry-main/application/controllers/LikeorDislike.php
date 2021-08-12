<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LikeOrDislike extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Product_model');
        $this->load->library('form_validation');
        $this->load->helper('url');
        date_default_timezone_set('Asia/Tokyo');
    }

    public function index()
    {
        $data = null;

        $product_all = $this->Product_model->fetch_all();

        $rand_index = array_rand($product_all);
        $data["product"] = $product_all[$rand_index];
        $this->load->view('LOD_header_view');
        $this->load->view('LOD1_view', $data);
    }

    public function product($id)
    {
        if (!isset($_SESSION["product_limit"])) {
            $_SESSION["product_limit"] = 0;
        } else if ($_SESSION["product_limit"] === 3) {
            redirect("LikeOrDislike/register");
        } else {
            $_SESSION["product_limit"]++;
        }

        $data = null;
        $data["product"] = $this->Product_model->fetch_product($id);
        $this->load->view('LOD_header_view');
        $this->load->view('LOD1_view', $data);
    }

    public function click()
    {
        $product_id = $this->input->post("id");
        $name = $this->input->post("name");
        $like = $this->input->post("like");
        $dislike = $this->input->post("dislike");

        $this->Product_model->c(["name" => $name, "good" => $like, "bad" => $dislike]);

        $product_all = $this->Product_model->fetch_all();
        $rand_index = array_rand($product_all);
        echo $product_all[$rand_index]["ID"];
    }

    public function register()
    {
        unset($_SESSION["product_limit"]);
        $this->load->view('LOD_direction_header_view');
        $this->load->view('LOD_direction_view');
    }
}
