<?php

class AdminModel extends CI_Model{

    public function insert($data){
        $this->db->insert('news',$data);
    }




}