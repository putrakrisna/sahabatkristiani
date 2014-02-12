<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pencarian extends CI_Controller {

	public function index()
	{
            $header['title']    = "Pencarian";
            $data['header']     = $header;
            $this->load->view('pencarian',$data);
	}
}

/* End of file */