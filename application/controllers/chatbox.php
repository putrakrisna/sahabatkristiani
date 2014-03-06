<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chatbox extends CI_Controller {

	public function index()
	{
            $header['title']    = "Chatbox";
            $data['header']     = $header;
            $this->load->view('chat',$data);
	}
}

/* End of file */