<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bantuan extends CI_Controller {

	public function index()
	{
            $header['title']    = "Bantuan";
            $data['header']     = $header;
            $this->load->view('bantuan',$data);
	}
}

/* End of file */