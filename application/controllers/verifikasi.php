<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifikasi extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

	public function index()
	{
            redirect(site_url());
        }
        
        public function user($user_id = null, $user_kode = null)
        {
            if(empty($user_id) and empty($user_kode)){
                redirect(site_url());
            }else{
                if ($this->user->get_by_id($user_id)){
                    $user = $this->user->get_by_id($user_id)->row_array();
                    if($user['user_code'] == $user_kode){
                        $this->user->update($user_id,array('user_is_enabled' => '2','user_code' => 'verified email'));
                        echo "proses verifikasi email sukses,mohon tunggu kami mereview data anda <br /> <a href='".  site_url() ."' > kembali </a>";
                    }else{
                        exit('kode verifikasi salah');
                    }
                }
            }
            
        }
}

/* EOF */