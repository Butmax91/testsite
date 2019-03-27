<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
    public function index(){
        $this->load->model('MainModel');
        $searchResult = $this->MainModel->searchShoes( $_POST['search']);
        $data['searchResult'] = $searchResult;
        $myJSON = json_encode($data['searchResult']);
        echo $myJSON;
    }
}