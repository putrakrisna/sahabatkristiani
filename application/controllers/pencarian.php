<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pencarian extends CI_Controller {

	public function index()
	{
            $header['title']    = "Pencarian";
            $data['header']     = $header;
            $this->load->view('pencarian',$data);
	}
        
        public function cepat($gender = null,$usia_start = null,$usia_end = null) {
            if($this->input->post()){
                $gender = $this->input->post('gender');
                $usia_start = $this->input->post('usia_start');
                $usia_end = $this->input->post('usia_end');
                echo $this->user->cari_cepat($gender,$usia_start,$usia_end);
            }
            if(isset($usia_start) and isset($usia_end)){
             echo   $this->user->cari_cepat($gender,$usia_start,$usia_end);
                
            }else{
                exit("parameter tidak lengkap");
            }
        }
}

/* End of file */