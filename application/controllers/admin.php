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
					redirect(base_url('admin/data_transaksi_pesanan'));
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
	public function data_transaksi_pesanan()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			// $data['main_view'] = 'admin_view';
			$data['pesanan'] = $this->admin_model->get_data_pesanan();
			$this->load->view('admin_view', $data);
		}
		else{
			redirect('admin');
		}
	}

	public function data_pesanan()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			// $data['main_view'] = 'admin_view';
			$data['pesanan'] = $this->admin_model->get_data_pesanan();
			$this->load->view('data_pesanan_view', $data);
		}
		else{
			redirect('admin');
		}
	}

	function detil_data_pesanan()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$tanggal = $this->uri->segment(3);
			$data['detil'] = $this->admin_model->get_data_pesanan_by_tgl($tanggal);
			$this->load->view('detil_data_pesanan_view',$data);
		}else{
			redirect('admin');
		}
	}

	public function data_pembayaran()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			// $data['main_view'] = 'admin_view';
			$data['pembayaran'] = $this->admin_model->get_data_pesanan();
			$this->load->view('data_pembayaran_view', $data);
		}
		else{
			redirect('admin');
		}
	}

	public function logout()
	{
		$data = array(
			'username'	=> '',
			'logged_in'	=>	FALSE
			);

		$this->session->sess_destroy();
		redirect(base_url('index.php/admin'));
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */