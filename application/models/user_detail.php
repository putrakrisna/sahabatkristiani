<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_detail extends CI_Model{
	private $table;
	private $id;
	
    function __construct(){
        parent::__construct();
        $this->table = strtolower(__CLASS__);
        $this->id = strtolower(__CLASS__).'_id';
    }

    function get_all($limit=NULL,$offset=NULL) {
        if(empty($limit) and empty($offset)):
            return $this->db->get($this->table);
        else:
            return $this->db->get($this->table,$limit,$offset);
        endif;
    }
    
    function get_by($field,$value,$limit=null,$offset=null){
        $this->db->where($field,$value);
        if(empty($limit) and empty($offset)):
            return $this->db->get($this->table);
        else:
            return $this->db->get($this->table,$limit,$offset);
        endif;
    }
    
    function get_by_id($id){
        $this->db->where($this->id,$id);
        return $this->db->get($this->table);
    }
	
    function insert(array $data){
         if(empty($data)):
            return FALSE;
         else:
            $this->db->insert($this->table,$data);
            $id = $this->db->insert_id();
            return $id;
        endif;
    }
    
    function update($id,array $data){
        if(empty($data)):
            return FALSE;
        else:
            $this->db->where($this->id,$id);
            $this->db->update($this->table,$data);
            return TRUE;
        endif;
    }
    
    function delete($id){
        $this->db->where($this->id,$id);
        $this->db->delete($this->table);
        return TRUE;
    }
	
	
	
}
  
?>