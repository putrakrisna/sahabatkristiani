<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

	public function index()
	{
            $this->load->library('form_validation');
            if($this->input->post('btnSimpan')){ 
                $this->form_validation->set_rules('txtEmail','email','required|valid_email|is_unique[user.user_email]');
                $this->form_validation->set_rules('txtFirstName','First Name','required|trim');
                $this->form_validation->set_rules('txtLastName','Last Name','trim');
                $this->form_validation->set_rules('txtPassword','Password','required');
                $this->form_validation->set_rules('txtConfirmPassword','Password Confirmation','required|matches[txtPassword]');
                $this->form_validation->set_rules('txtTglLahir','Tanggal Lahir','required');
                $this->form_validation->set_rules('slcKota','Lokasi','required|trim');
                $this->form_validation->set_rules('slcGender','Jenis Kelamin','required|trim');
            }
            elseif ($this->input->post('btnBatal')) { 
                redirect(base_url(),'refresh');   //batal ke halaman utama
            }
            
            if(TRUE == $this->form_validation->run()){
               $post =  $this->input->post();
               $user = array( 'user_email'  => $post['txtEmail'],
                        'user_firstname'    => $post['txtFirstName'],
                        'user_lastname'     => $post['txtLastName'],
                        'user_password'     => md5($post['txtPassword']),
                        'user_created'      => date('Y-m-d h:m:s'),
                        'user_updated'      => date('Y-m-d h:m:s'),
                        'user_code'         => md5(time()),
                        'user_is_enabled'   => '0'                  //set default untuk pending user = 0
               );
               $user_id = $this->user->insert($user);
               
//               insert user detail
                $this->load->model('user_detail');
                $user_detail    = array('user_id'           => $user_id,
                                        'user_kota'         => $post['slcKota'],
                                        'user_tgl_lahir'    => date("Y-m-d", strtotime($post['txtTglLahir'])),
                                        'user_gender'       => $post['slcGender']
                    );
                $this->user_detail->insert($user_detail);
                
//                insert jawaban pertanyaan
                $this->load->model('grocery_crud_model');
                $this->grocery_crud_model->set_basic_table('user_pertanyaan');
                foreach($post['pertanyaan'] as $key => $val){
                    $pertanyaan = array('user_id' => $user_id,'pertanyaan_id' => $key, 'pilihan_id' => $val);
                    $this->grocery_crud_model->db_insert($pertanyaan);
                }
                
//                kirim email ke user untuk verifikasi
                $this->load->library('email');
                $this->email->from('noreply@sahabatkristiani.com', 'Admin Sahabatkristiani');
                $this->email->to($user['user_email']); 
//                $this->email->cc('another@another-example.com'); 
                $this->email->bcc('bambang.raharjo07@gmail.com');               //cc ke admin untuk notifikasi
                $this->email->subject('Verifikasi Email '.$user['user_email']);
                $this->email->message('silahkan verifikasi email Anda melalui link berikut: '.  site_url('verifikasi/user/'.$user_id.'/'.$user['user_code']));	
                $this->email->send();
                
//                load halaman register sukses
                $this->sukses();
            }
            else
            {
                $this->load->helper('form');
                $this->load->model('pertanyaan');
                $this->load->model('pilihan');
                $this->load->model('provinsi');
                
                $pertanyaan_all = $this->pertanyaan->get_all()->result_array();
                $pilihan_all    = array();
                foreach($pertanyaan_all as $pertanyaan){
                    $pilihan_all[$pertanyaan['pertanyaan_id']] = $this->pilihan->get_by('pertanyaan_id',$pertanyaan['pertanyaan_id'])->result_array();
                }
                $data['pilihan_all']    = $pilihan_all;
                $data['pertanyaan_all'] = $pertanyaan_all;
                $data['provinsi_all']   = $this->provinsi->get_dropdown();
                $this->load->view('register',$data);
            }
	}
        
        public function sukses()
        {
            $header['title']    = "Pencarian";
            $data['header']     = $header;
            $this->load->view('register_sukses',$data);
        }
}

/* End of file register.php */
/* Location: ./application/controllers/register.php */