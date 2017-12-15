<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class konfirmasi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	//Do your magic here
	}
	public function index()
	{
		$this->load->view('template_konfirmasi');
	}

}

/* End of file konfirmasi.php */
/* Location: ./application/controllers/konfirmasi.php */