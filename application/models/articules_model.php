<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articules_model extends CI_Model {
    
    function  get_articules(){
        $this->db->limit('4');
        $this->db->order_by('id','ASC');
       $query=$this->db->get('aricules');
       return $query->result_array();
    }
    function add_article($data){
        $this->db->insert('aricules',$data); 
    } // sa stexcuma nor stolbik
    
    function edit_article($data){
        $this->db->where('id','5');
        $this->db->update('aricules',$data);
        
    }//es functian poxuma(update) tabli stolbiki mejin@
function del_article(){
    $this->db->where('id','1');
    $this->db->delete('aricules');
}//es mekne jnjuma
}