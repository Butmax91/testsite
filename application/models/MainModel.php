<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainModel extends CI_Model
{


    public function searchShoes($param){
        $param = '%'.$param.'%';
        $sql = "
              SELECT * 
              FROM shoes
              WHERE shoesTitle LIKE ? 
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
              FROM shoes
              WHERE shoesID = ? 
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
                shoesImg,
               shoesTitle,
               orders.orderDate
            FROM orders INNER JOIN shoes on orders.shoesID = shoes.shoesID
            WHERE orders.userID = $id
        ");
        return $query->result_array();
    }
    public function getShoes(){
        $query = $this->db->query("
            SELECT
               *
            FROM 
            shoes 
        ");
        return $query->result_array();
    }
    public function getShoesById($id){
        $query = $this->db->query("
            SELECT
               *
            FROM 
            shoes 
            INNER JOIN utensils on utensils.unsetilsID = shoes.shoesUtensils
            INNER JOIN colors on colors.colorID = shoes.shoesColor
            where shoesID = '$id';
        ");
        return $query->result_array();
    }

}