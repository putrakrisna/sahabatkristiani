<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Undang extends CI_Controller {

	public function index()
	{
            $header['title']    = "Undang Teman";
            $data['header']     = $header;
            $this->load->view('undang',$data);
	}
}

/* End of file */