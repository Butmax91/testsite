<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model
{

    public function getUser($email, $password) {
        $query = $this->db->query("
            SELECT
                users.ID, users.email
            FROM users
            WHERE users.email = '{$email}' AND users.password = '{$password}'
        ");
        return $query->row_array();
    }
    public function getUserInfo($email) {
        $query = $this->db->query("
            SELECT
               *
            FROM users
            WHERE users.email = '{$email}'
        ");
        return $query->row_array();
    }

}