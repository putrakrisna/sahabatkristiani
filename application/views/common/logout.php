<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
            $this->session->unset_userdata();
            redirect('welcome', 'refresh');
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */