<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index(){
        if(isset($_SESSION['user_ID'])){
            $this->load->model('MainModel');
            $userInfo = $this->MainModel->getUserInfo();
            $data['userInfo'] = $userInfo;
        }
        $this->load->model('MainModel');
        $clothes = $this->MainModel->getClothes();
        $data['clothes'] = $clothes;
        $data['content'] = 'main_view';
        $this->load->view('layout_view',$data);

	}
	public function item($itemID = ''){
        if(isset($_SESSION['user_ID'])){
            $this->load->model('MainModel');
            $userInfo = $this->MainModel->getUserInfo();
            $data['userInfo'] = $userInfo;
        }
        $this->load->model('MainModel');
        $clothes = $this->MainModel->getClothes();
        $data['clothes'] = $clothes;
        $item = $this->MainModel->getItemById($itemID);
        $data['content'] = 'item_view';
        $data['item'] = $item;
        $this->load->view('layout_view',$data);

    }

}
