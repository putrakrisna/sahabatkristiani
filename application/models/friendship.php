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
        $this->db->where($data);
        $cek = $this->db->get($this->table);
        if($cek->num_rows() < 1){
            $data['status']     = '1';  // 0 = pending; 1=approved; 2=block;
            $friendship_id = $this->insert($data);
            return $friendship_id;
        }else{
            return false;
        }
    }
    
    function block_friend($user_id) {
        
        $data['inviter_id'] = $this->session->userdata('user_id');
        $data['friend_id']  = $user_id;
        $this->db->where($data);
        $cek = $this->db->get($this->table);
        if($cek->num_rows() > 0){
            
            $data['status']     = '2';  // 0 = pending; 1=approved; 2=block;
            $this->update($data);
            return TRUE;
        }else{
            return false;
        }
    }
    
    function get_list_friend(){
        $this->db->select('friend_id');
        $this->db->where('inviter_id',$this->session->userdata('user_id'));
        $hasil = $this->db->get($this->table);
            if($hasil->num_rows() > 0){
                foreach ($hasil->result_array() as $user_all){
                    $user[] = $this->user->get_by_id($user_all['friend_id'])->row_array();
                }
                return $user ;
            }else{
                return false;
            }
        
    }
    
    function get_relation($inviter_id,$friend_id){
        $this->db->where('friend_id',$friend_id);
        $this->db->where('inviter_id',$this->session->userdata('user_id'));
        $hasil = $this->db->get($this->table);
        if($hasil->num_rows() > 0){
                return $hasil ;
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
  
/* E O F */