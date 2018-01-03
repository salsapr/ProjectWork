<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');

	}
	public function index()
	{
		$this->load->view('login_view');
	}

	public function masuk()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			if ($this->form_validation->run() == TRUE) {
				if ($this->admin_model->cek_user() == TRUE)
				{
					redirect(base_url('admin/data_pesanan'));
				}else{
					$data['notif'] = 'Login Gagal';
					$this->load->view('login_view', $data);
				}
			} else {
				$data['notif'] = validation_errors();
				$this->load->view('login_view', $data);	
			}
		}
	}
	public function data_pesanan()
	{
		$this->load->view('admin_view');

	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */