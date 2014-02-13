<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function index()
	{
            $header['title']    = "Kontak Kami";
            $data['header']     = $header;
            $this->load->view('kontak',$data);
	}
}

/* End of file */