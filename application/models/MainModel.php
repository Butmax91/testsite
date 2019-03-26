<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainModel extends CI_Model
{

    public function getClothes() {
        $query = $this->db->query('SELECT * FROM Clothes');
        return $query->result_array();
    }
    public function search_clothes($param){
        $param = '%'.$param.'%';
        $sql = "
              SELECT * 
              FROM Clothes
              WHERE cloth_title LIKE ? 
              ";
        $query = $this->db->query($sql, array($param));
        return $query->result_array();
    }
    public function getUserInfo() {
        $query = $this->db->query("
            SELECT
               *
            FROM users
            WHERE users.ID = '{$_SESSION['user_ID']}'
        ");
        return $query->row_array();
    }
    public function getItemById($param){
        $sql = "
              SELECT * 
              FROM Clothes
              WHERE clothID = ? 
              ";
        $query = $this->db->query($sql, array($param));
        return $query->result_array();
    }
    public function updateUserInfo($id,$arr){
        foreach($arr as $k => $val) {
            $this->db->query("UPDATE users SET {$k} = '{$val}' where ID = $id");
        }
    }
    public function getOrdersForCabinet($id){
        $query = $this->db->query("
            SELECT
               cloth_img,
               cloth_title,
               orders.orderDate
            FROM orders INNER JOIN Clothes on orders.clothesID = Clothes.clothID
            WHERE orders.userID = $id
        ");
        return $query->result_array();
    }
}