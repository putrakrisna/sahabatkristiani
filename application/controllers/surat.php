<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surat extends CI_Controller {

	public function index()
	{
            $header['title']    = "Kotak Surat";
            $header['tag']      = "inbox,surat";
            $data['header']     = $header;
            $this->load->view('surat',$data);
	}
}

/* End of file surat.php */
/* Location: ./application/controllers/surat.php */