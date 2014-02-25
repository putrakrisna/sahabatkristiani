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
        return $query->row();
      }
      else
      {
        return false;
      }
    }
    
    function cek_login() {
        if($this->session->userdata('user_id')){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function cari_cepat($gender,$usia_start,$usia_end){
        if($this->session->userdata('user_id')){
            $this->db->where('user.user_id !=',$this->session->userdata('user_id'));
        }
        $this->db->where('user_tgl_lahir <=',date('Y-m-d',strtotime("-".$usia_start." year")));
        $this->db->where('user_tgl_lahir >=',date('Y-m-d',strtotime("-".$usia_end." year")));
        $this->db->where('user_gender',$gender);
        $this->db->from('user_detail');
        $this->db->join('user','user.user_id = user_detail.user_id');
        $hasil = $this->db->get();
        if($hasil->num_rows() > 0){
            return $hasil ;
        }else{
            return false;
        }
    }

    function get_all($limit=NULL,$offset=NULL) {
        if(empty($limit) and empty($offset)):
            $hasil =  $this->db->get($this->table);
            if($hasil->num_rows() > 0){
                return $hasil ;
            }else{
                return false;
            }
        else:
            $hasil =  $this->db->get($this->table,$limit,$offset);
            if($hasil->num_rows() > 0){
                return $hasil ;
            }else{
                return false;
            }
        endif;
    }
    
    function get_by_id($id){
        $this->db->where($this->id,$id);
        $hasil =  $this->db->get($this->table);
        if($hasil->num_rows() > 0){
            return $hasil ;
        }else{
            return false;
        }
        
    }
    
    function get_detail_by_id($id){
        $this->db->where($this->table.'.'.$this->id,$id);
        $this->db->join('user_detail', 'user_detail.user_id = user.user_id');
        $hasil =  $this->db->get($this->table);
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