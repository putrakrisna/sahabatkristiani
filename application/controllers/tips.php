<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tips extends CI_Controller {

	public function index()
	{
            $header['title']    = "Tips";
            $data['header']     = $header;
            $this->load->view('tips',$data);
	}
}

/* End of file */