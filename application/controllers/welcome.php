<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
    private $login;
    public function __construct() {
        parent::__construct();
//        $this->user->cek_login() ? $this->login = $this->session->userdata['logged_in'] : redirect(base_url().'welcome','refresh');
    }

	public function index()
	{
            $this->load->library('form_validation');
            if($this->input->post('btnLogin')){ //login
                $this->form_validation->set_rules('txtEmail','email','required|valid_email');
                $this->form_validation->set_rules('txtPassword','Password','required|callback_cek_db');
            }
            elseif ($this->input->post('btnSearch')) { //quick search
                $this->form_validation->set_rules('slcGender','Gender','required');
            }
            
            if(TRUE == $this->form_validation->run()){
                if ($this->input->post('btnLogin')) {
                    //sukses login ke my account
                    redirect('account','refresh');
                }
                elseif ($this->input->post('btnSearch')) {
                    //bagian pencarian cepat
                    $search['gender']       = $this->input->post('slcGender');
                    $search['start_age']    = $this->input->post('slcAgeStart');
                    $search['end_age']      = $this->input->post('slcAgeEnd');
                    $this->cari($search);
                }
            }
            else
            {
                $this->load->view('index');
            }
	}
        
        public function cari($search)
        {
            if($hasil = $this->user->cari_cepat($search['gender'],$search['start_age'],$search['end_age'])){
                        $data['user'] = $hasil->result_array();
                        $data['jml'] = $hasil->num_rows();
                        $this->load->library('umur');
                        $this->load->view('pencarian',$data);
                    }else{
                        $this->load->view('pencarian');
                    }
        }
        
        public function cek_db($password)
        {
            $this->load->model('user');
            //Field validation succeeded.  Validate against database
            $email = $this->input->post('txtEmail');

            //query the database
            $result = $this->user->login($email, $password);

            if($result)
            {
                $this->session->set_userdata($result);
                return TRUE;
            }
            else
            {
                $this->form_validation->set_message('cek_db', 'Invalid username or password');
                return false;
            }
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */