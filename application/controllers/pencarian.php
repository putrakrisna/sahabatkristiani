<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pencarian extends CI_Controller {

	public function index()
	{
            $header['title']    = "Pencarian Anggota";
            $data['header']     = $header;
           
            $this->load->view('pencarian_form',$data);
	}
        
        public function cepat($gender = null,$usia_start = null,$usia_end = null) {
            if($this->input->post()){
                $gender = $this->input->post('slcGender');
                $usia_start = $this->input->post('slcAgeStart');
                $usia_end = $this->input->post('slcAgeEnd');
            }
            if(isset($usia_start) and isset($usia_end)){
                $hasil = $this->user->cari_cepat($gender,$usia_start,$usia_end);
                $data['user'] = $hasil->result_array();
                $data['jml'] = $hasil->num_rows();
                $this->load->library('umur');
                $this->load->view('pencarian',$data);
                
            }else{
                exit("parameter tidak lengkap");
            }
        }
        
        public function hasil() {
            $post = $this->input->post();
            if(!empty($post)){
                $hasil = $this->user->cari_cepat($post['user_gender'],$post['age_start'],$post['age_end']) ;
                if($hasil){
                    $data['user'] = $hasil->result_array();
                    $data['jml'] = $hasil->num_rows();
                    $this->load->library('umur');
                    $this->load->view('pencarian',$data);
                }else{
                    exit('pencarian tidak membuahkan hasil');
                }
                
            }else{
                 exit('pencarian tidak membuahkan hasil');
            }
        }
}

/* End of file */