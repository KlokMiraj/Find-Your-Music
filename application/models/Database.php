<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Database extends CI_Model{
    
    public function get_row($table, $condition){
        $this->db->where($condition);
        $res=$this->db->get($table);
        $row=$res->row();
        
            return $row;
    }
    
    public function insert($table,$data){
      $this->db->insert($table,$data);
       return $this->db->insert_id();   
    }
}