<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {
    private $user_id;
    
    public function __construct() {
        parent::__construct();
        $this->user->cek_login() ? $this->user_id= $this->session->userdata['user_id'] : redirect(base_url().'welcome','refresh');
    }

    public function index()
	{
            $this->load->model(array('user','pertanyaan','pilihan','user_pertanyaan','grocery_crud_model'));
            $header['title']    = "My Account";
            $data['header']     = $header;
            
            $data['user']       = $this->user->get_by_id($this->user_id);
            $pertanyaan_all     = $this->pertanyaan->get_all()->result_array();
            foreach ($pertanyaan_all as $key => $value) {
                $pertanyaan[$value['pertanyaan_id']] = $value['pertanyaan_isi'];
            }
            
            $pilihan_all    = $this->pilihan->get_all()->result_array();
            foreach ($pilihan_all as $key => $value) {
                $pilihan[$value['pertanyaan_id']][$value['pilihan_id']] = $value['pilihan_isi'];
            }
            
            $jawaban_all        = $this->user_pertanyaan->get_by('user_id',$this->user_id)->result_array();
            foreach ($jawaban_all as $row ) {
                $jawaban[$row['pertanyaan_id']] = $row['pilihan_id'];
            }
            
            $data['pertanyaan_all'] = $pertanyaan;
            $data['pilihan'] = $pilihan;
            $data['jawaban'] = $jawaban;
//            print_r($data);die;
            $this->load->view('myaccount',$data);
	}
}

/* End of file account.php */
/* Location: ./application/controllers/account.php */