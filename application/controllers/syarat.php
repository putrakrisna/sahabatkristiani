<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Syarat extends CI_Controller {

	public function index()
	{
            $header['title']    = "Syarat dan Ketentuan";
            $data['header']     = $header;
            $this->load->view('syarat',$data);
	}
}

/* End of file */