<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

	public function index()
	{
            $this->load->library('form_validation');
            if($this->input->post('btnSimpan')){ 
                $this->form_validation->set_rules('txtEmail','email','required|valid_email');
                $this->form_validation->set_rules('txtFirstName','First Name','required|trim');
//                $this->form_validation->set_rules('txtLastName','Last Name','required|trim');
                $this->form_validation->set_rules('txtPassword','Password','required');
                $this->form_validation->set_rules('txtConfirmPassword','Password Confirmation','required|matches[txtPassword]');
                $this->form_validation->set_rules('txtLokasi','Lokasi','required|trim');
            }
            elseif ($this->input->post('btnBatal')) { //batal ke halaman utama
                redirect(base_url());
            }
            
            if(TRUE == $this->form_validation->run()){
               $post =  $this->input->post();
               $user = array( 'user_email'  => $post['txtEmail'],
                        'user_password'     => md5($post['txtPassword']),
                        'user_created'      => date('Y-m-d h:m:s'),
                        'user_updated'      => date('Y-m-d h:m:s'),
                        'user_is_enabled'   => '0'
               );
               $user_id = $this->user->insert($user);
               
//               insert ke tabel user_detail
                $this->load->model('user_detail');
                $user_detail    = array('user_id' => $user_id);
                $user_detail_id = $this->user_detail->insert($user_detail);
                print_r($user_detail_id);die;
            }
            else
            {
                $this->load->model('pertanyaan');
                $this->load->model('pilihan');
                
                $pertanyaan_all = $this->pertanyaan->get_all()->result_array();
                $pilihan_all    = array();
                foreach($pertanyaan_all as $pertanyaan){
                    $pilihan_all[$pertanyaan['pertanyaan_id']] = $this->pilihan->get_by('pertanyaan_id',$pertanyaan['pertanyaan_id'])->result_array();
                }
                $data['pilihan_all']    = $pilihan_all;
                $data['pertanyaan_all'] = $pertanyaan_all;
                $this->load->view('register',$data);
            }
	}
}

/* End of file register.php */
/* Location: ./application/controllers/register.php */