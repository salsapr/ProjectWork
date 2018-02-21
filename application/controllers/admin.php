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
		if($this->session->userdata('logged_in') == TRUE)
		{
			redirect('admin/data_transaksi_pesanan');
		}
		else {
			$this->load->view('login_view');
		}
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
			//get notifikasi
			$data['unread'] = $this->admin_model->get_notifikasi();
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
			//ubah semua data menjadi read
			$this->admin_model->change_read();
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

	public function update()
	{
		$tanggal = $this->uri->segment(3);

		if($this->input->post('submit')){
			$this->form_validation->set_rules('status', 'status', 'trim|required');
			if ($this->form_validation->run() == TRUE) {
				
/*				$data['main_view'] = 'admin_view';
*/				$this->load->library('email');
				$config = array(
					'protocol'    => 'smtp',
					'smtp_host'   => 'ssl://smtp.googlemail.com',
					'smtp_port'   => 465,
					//'auth'		  => TRUE,
					'smtp_user'   => 'malabudif@gmail.com',
					'smtp_pass'   => 'kademangan12',
					'mailtype'    => 'html',
					'wordwrap'    => TRUE,

				);
				$this->email->initialize($config);
				$this->email->set_newline("\r\n");
				$this->email->from('malabudif@gmail.com','Administrator Penyewaan Aula SMK Telkom Malang');
				$this->email->to($this->input->post('email'));
				$this->email->subject('Pemesanan Sewa Aula SMK Telkom Malang');
				$this->email->message('Pembayaran Anda telah dikonfirmasi oleh Admin dengan status <br><h4><b>LUNAS.</b></h4> Untuk persiapan acara, dapat dilakukan H-1 pelaksanaan. 
					<br>Terimakasih atas kepercayaan anda.
					<br><br><b>Hormat Kami,</b>
					<br>Sarana Prasarana SMK Telkom Malang');


				if ($this->email->send()) {
					if($this->admin_model->update_status($tanggal) == TRUE){

						$data['unread'] = $this->admin_model->get_notifikasi();
						$data['pesanan'] = $this->admin_model->get_data_pesanan();	
						$data['notif'] = 'Edit Status Berhasil!';
						$this->load->view('admin_view', $data);
					}else{
	/*					$data['main_view'] = 'admin_view';
	*/					$data['notif'] = 'Edit Status Gagal!';
						$data['unread'] = $this->admin_model->get_notifikasi();
						$data['pesanan'] = $this->admin_model->get_data_pesanan();	
						$this->load->view('data_pesanan_view', $data);
					}
				} else {
					$data['unread'] = $this->admin_model->get_notifikasi();
					$data['pesanan'] = $this->admin_model->get_data_pesanan();	
					$data['notif'] = 'Edit Status Gagal!';
					$this->load->view('admin_view', $data);
				}

				
			}else{
/*				$data['main_view'] = 'admin_view';
*/				$data['notif'] = validation_errors();
				$data['unread'] = $this->admin_model->get_notifikasi();
				$data['pesanan'] = $this->admin_model->get_data_pesanan();	
				$this->load->view('admin_view', $data);
			}
		}
	}
	
/*	public function data_pembatalan()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			// $data['main_view'] = 'admin_view';
			$data['pembatalan'] = $this->admin_model->lihat_batal();
			$this->load->view('data_pembatalan_view', $data);
		}
		else{
			redirect('admin');
		}
	}

	public function data_history()
	{
		if($this->session->userdata('logged_in') == TRUE)
		{
			// $data['main_view'] = 'admin_view';
			$data['history'] = $this->admin_model->get_data_pesanan();
			$this->load->view('data_history_view', $data);
		}
		else{
			redirect('admin');
		}
	}*/

	public function logout()
	{
		$data = array(
			'username'	=> '',
			'logged_in'	=>	FALSE
			);

		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */