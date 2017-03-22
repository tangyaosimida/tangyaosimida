<?php
class Flower extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('flower_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['flowers'] = $this->flower_model->get_flower_items();

        $this->load->view('flower_view', $data);

    }

    public function view($slug = NULL)
    {
        $data['flowers'] = $this->flower_model->get_flower_items($slug);
    }






    //向花朵表中插入数据


}