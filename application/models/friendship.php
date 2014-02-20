<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Friendship extends CI_Model{
	private $table;
	private $id;
	
    function __construct(){
        parent::__construct();
        $this->table = strtolower(__CLASS__);
        $this->id = strtolower(__CLASS__).'_id';
    }
    
    function add_friend($id_calon_teman){
        $data['inviter_id'] = $this->session->userdata('user_id');
        $data['friend_id']  = $id_calon_teman;
        $data['status']     = '1';  // 0 = pending; 1=approved; 2=rejected;
        $this->insert($data);
        return TRUE;
    }
    
    function get_list_friend(){
        $this->db->select('friend_id');
        $this->db->where('inviter_id',$this->session->userdata('user_id'));
        $hasil = $this->db->get($this->table);
            if($hasil->num_rows() > 0){
                $h = $hasil->result_array();
                return $h ;
            }else{
                return false;
            }
        
    }
    
    function delete_friend($friend_id){
        $this->db->where('friend_id',$friend_id);
        $this->db->where('inviter_id',$this->session->userdata('user_id'));
        $this->db->delete($this->table);
        return TRUE;
    }

    function get_all($limit=NULL,$offset=NULL) {
        if(empty($limit) and empty($offset)):
            $hasil = $this->db->get($this->table);
            if($hasil->num_rows() > 0){
                return $hasil ;
            }else{
                return false;
            }
        else:
            $hasil = $this->db->get($this->table,$limit,$offset);
            if($hasil->num_rows() > 0){
                return $hasil ;
            }else{
                return false;
            }
        endif;
    }
    
    function get_by($field,$value,$limit=null,$offset=null){
        $this->db->where($field,$value);
        if(empty($limit) and empty($offset)):
            $hasil = $this->db->get($this->table);
            if($hasil->num_rows() > 0){
                return $hasil ;
            }else{
                return false;
            }
        else:
            $hasil = $this->db->get($this->table,$limit,$offset);
            if($hasil->num_rows() > 0){
                return $hasil ;
            }else{
                return false;
            }
        endif;
    }
    
    function get_by_id($id){
        $this->db->where($this->id,$id);
        $hasil = $this->db->get($this->table);
        if($hasil->num_rows() > 0){
            return $hasil ;
        }else{
            return false;
        }
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