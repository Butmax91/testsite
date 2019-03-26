<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabinet extends CI_Controller {
    public function __construct(){
        parent:: __construct();
        $this->load->library('form_validation');
        $this->load->library('email');
        $this->load->model('MainModel');
    }

    public function index(){
        if (isset($_POST['login'])){
            $this->form_validation->set_error_delimiters('<p >', '</p>');
            $this->form_validation->set_rules('login', 'Login', 'min_length[2]|max_length[15]');
            $this->form_validation->set_rules('phonenumber', 'phonenumber', 'min_length[10]|max_length[10]|numeric|is_unique[users.phonenumber]');
            $this->form_validation->set_rules('email', 'Email', 'valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('adress', 'adress', 'required');

            if ($this->form_validation->run()) {
                $user = array(
                    'login' => $_POST['login'],
                    'email' => $_POST['email'],
                    'phonenumber' => $_POST['phonenumber'],
                    'adress' => trim($_POST['adress']),
                );

                foreach($user as $k => $val) {
                    if($val == "") {
                        unset($user[$k]);
                    }
                }

                 $query = $this->MainModel->updateUserInfo($_SESSION['user_ID'],$user);

            }
        }
        if(isset($_SESSION['user_ID'])){
            $this->load->model('MainModel');
            $orders = $this->MainModel->getOrdersForCabinet($_SESSION['user_ID']);
            $userInfo = $this->MainModel->getUserInfo();
            $data['orders'] = $orders;
            $data['userInfo'] = $userInfo;
            $data['content'] = 'cabinet_view';
            $this->load->view('layout_view',$data);
        }else{
            $data['content'] = 'afterOrder_view';
            $this->load->view('layout_view',$data);
        }

    }
    public function order(){
        if (isset($_POST['login'])){
            $this->form_validation->set_error_delimiters('<p >', '</p>');
            $this->form_validation->set_rules('login', 'Login', 'min_length[2]|max_length[15]|required');
            $this->form_validation->set_rules('phonenumber', 'phonenumber', 'min_length[10]|max_length[10]|numeric|required');
                $this->form_validation->set_rules('email', 'Email', 'valid_email');
                $this->form_validation->set_rules('adress', 'adress', 'required');

                if ($this->form_validation->run()) {
                    $orderData = json_decode($_POST['orderData'],true);
                    for($i = 0; $i < count($orderData);$i++ ){
                        $order = array(
                            'userID' => $_POST['userID'],
                            'orderDate' => time(),
                            'clothesID' => $orderData[$i]['id'],
                            'orderCount' => $orderData[$i]['count'],
                            'orderPrice' => $orderData[$i]['price'],
                            'orderPayment' => $_POST['payment'],
                            'orderDelivery' => $_POST['delivery'],
                            'adress' => trim($_POST['adress']),
                        );
                        $this->db->insert('orders',$order);
                        redirect('/cabinet', 'refresh');
                    }

                }
            }

        if(isset($_SESSION['user_ID'])){
            $this->load->model('MainModel');
            $userInfo = $this->MainModel->getUserInfo();
            $data['userInfo'] = $userInfo;
            $data['content'] = 'order_view';
            $this->load->view('layout_view',$data);
        }else{
            $data['content'] = 'order_view';
            $this->load->view('layout_view',$data);
        }
    }
}