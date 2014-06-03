<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master extends CI_Controller {

	public function index()
	{
            $header['title']    = "Admin - Master";
            $data['header']     = $header;
            $this->load->view('admin/master',$data);
	}
        
        public function pertanyaan($crud = 'tambah',$pertanyaan_id=null) {
            switch ($crud) {
                case 'tambah':


                    break;
                case 'ubah':


                    break;
                case 'hapus':


                    break;

                default:
                    break;
            }
        }
}

/* End of file */