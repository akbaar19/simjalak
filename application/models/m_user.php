<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    //table
    public $table ="tbl_user";
    
    //check login
    public function checkLogin($username, $password) {
        $this->db->where('username',  $username);
        $this->db->where('password',  SHA1($password));
        $user = $this->db->get($this->table)->row_array();
        return $user;
    }

} 