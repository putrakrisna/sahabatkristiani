<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
            $this->load->library('validation');
            if($this->input->post('btnLogin')){ //login
                $rules['txtEmail'] = 'required';
                $rules['txtPassword'] = 'required';
                $this->validation->set_rules($rules);
            }
            elseif ($this->input->post('btnSearch')) {
                
            }
            
            if(!$this->validation->run())
            {
                $this->load->view('index');
            }
            else
            {
                if ($this->input->post('btnLogin')) {
                    //cek login
                }
                elseif ($this->input->post('')) {
                    //bagian pencarian cepat
                }
            }
		$this->load->view('login');
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */