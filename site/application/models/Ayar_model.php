<?php

class Ayar_model extends CI_Model {


    public function get($where = array()){
        return $this->db->where($where)->get('products')->row();
    }

    public function getAll($where = array()){
        return $this->db->where($where)->get('products')->result();
    }

}

