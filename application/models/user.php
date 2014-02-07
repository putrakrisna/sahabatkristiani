<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model{
	private $table;
	private $id;
//	private $login;
	
    function __construct(){
        parent::__construct();
        $this->table = strtolower(__CLASS__);
        $this->id = strtolower(__CLASS__).'_id';
    }
    
    function login($email, $password){
      $this -> db -> select('*');
      $this -> db -> from('user');
      $this -> db -> where('user_email', $email);
      $this -> db -> where('user_password', MD5($password));
      $this -> db -> where('user_is_enabled', '1');
      $this -> db -> limit(1);
      $query = $this -> db -> get();

      if($query -> num_rows() == 1)
      {
        return $query->result();
      }
      else
      {
        return false;
      }
    }
    
    function cek_login() {
        $login = $this->session->userdata('logged_in');
        if(empty($login)){
            return FALSE;
        }
        else{
            return TRUE;
        }
    }



    function get_all($limit=NULL,$offset=NULL) {
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
//              $this->db->trans_start();
            $this->db->insert($this->table,$data);
            return $this->db->insert_id();
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