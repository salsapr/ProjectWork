<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
public function __construct()
{
	parent::__construct();
	//Do your magic here
}
	public function index()
	{
		$this->load->view('template_view');
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */