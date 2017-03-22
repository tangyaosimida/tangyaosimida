<?php
class Flower_buy extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('flower_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('flower_pay');
    }


    //Ajax的get请求测试
    public function test_ajax_get($data=1)
    {
        if($data==1){
            header('Content-Type: application/json');
            // 请使用UTF-8编码，否则会出错！
            $flowers = $this->flower_model->get_flower_items();
            echo json_encode($flowers);
        }else{
            header('Content-Type: application/json');
            // 请使用UTF-8编码，否则会出错！
            $flowers = $this->flower_model->get_flower_items();
            echo json_encode($flowers);
        }
    }


    //Ajax的post请求测试
    public function test_ajax_post()
    {
        $id=$_POST["id"];
        $username = $_POST["name"];
        $pass = $_POST["passwd"];
        $hobby = $_POST["hobby"];
        $tel = $_POST["tel"];


        if($username=='tangyao' and $pass=="123456"){

            $flowers = $this->flower_model->get_flower_items();
            echo json_encode($flowers);

        }else{
            echo $id.$username.$pass.$hobby.$tel;
        }

    }


    //别动下面的代码


}