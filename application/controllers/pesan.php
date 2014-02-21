<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pesan extends CI_Controller {

	public function index()
	{
            $header['title']    = "Kotak Surat";
            $header['tag']      = "inbox,surat";
            $data['header']     = $header;
            $this->load->model('surat');
            $surat_ = $this->surat->get_by('surat_penerima',$this->session->userdata('user_id'));
            if($surat_){
                $data['surat_all'] = $surat_->result_array();
            }else{
                $data['surat_kosong'] = TRUE;
            }
                $this->load->view('surat',$data);
	}
        
        public function tulis($user_id) {
            $header['title']    = "Tulis Surat";
            $header['tag']      = "inbox,surat";
            $data['header']     = $header;
            $this->load->library('form_validation');
            //set validation 
            $this->form_validation->set_rules('surat_judul','Judul Surat','required');
            $this->form_validation->set_rules('surat_isi','Isi Surat','required');
            //validation run
            if(TRUE === $this->form_validation->run()){
                $post = $this->input->post();
                unset($post['btnKirim']);
                $post['surat_pengirim']     = $this->session->userdata('user_id');
                $post['surat_penerima']     = $user_id;
                $post['surat_status']       = '0';
                $this->load->model('surat');
                $id_surat = $this->surat->insert($post);
                echo "id surat =  $id_surat </br> bravo, validasi sukses. tinggal koding buat nyimpen hasil post ke database";
            }else{
                $this->load->view('tulis_surat',$data);
            }
        }
}

/* End of file pesan.php */
/* Location: ./application/controllers/pesan.php */