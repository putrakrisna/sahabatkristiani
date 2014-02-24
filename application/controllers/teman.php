<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teman extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->user->cek_login() ? $this->user_id= $this->session->userdata['user_id'] : redirect(base_url().'welcome','refresh');
    }

	public function index()
	{
            $post = $this->input->post();
            $this->load->model('friendship');
            if(!empty($post)){
                if (isset ($post['btnTambah'])){
                    $status = $this->friendship->add_friend($post['user_id']);
                    if($status){
                        echo "bravo! sukses memasukan dalam daftar teman!";
                    }else{
                        echo "psstt...anda sudah memasukkan dalam daftar teman";
                    }
                }
                if (isset ($post['btnPesan'])) {
                    redirect(site_url('pesan/tulis/'.$post['user_id']));
                }
                if (isset ($post['btnSenyuman'])) {
                    redirect(site_url('senyuman/kirim/'.$post['user_id']));
                }
                if (isset ($post['btnBlock'])) {
                    $status = $this->friendship->block_friend($post['user_id']);
                }
            }else{
                exit('forbidden');
            }
            
	}
        
        public function daftar() {
            $this->load->model('friendship');
            $data['user'] = $this->friendship->get_list_friend();
            if($data['user']){
                $data['jml'] = count($data['user']);
                $this->load->library('umur');
                $this->load->view('pencarian',$data);
            }else{
                exit('kamu belum berteman dengan siapapun');
            }
            
        }
}

/* End of file */