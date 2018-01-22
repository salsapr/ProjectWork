<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pesan_model');
		//Do your magic here
	}
	public function index()
	{
		$this->load->view('template_view');
	}
	public function pesan()
	{
		if($this->input->post('send')){
			$this->form_validation->set_rules('nama_cust','Nama','trim|required');
			$this->form_validation->set_rules('telp','Telp','trim|required');
			$this->form_validation->set_rules('tanggal','Tanggal','trim|required');
			$this->form_validation->set_rules('jam','Jam','trim|required');
			$this->form_validation->set_rules('email','Email','trim|required');
			$this->form_validation->set_rules('jenis','Jenis Acara','trim|required');
			$this->form_validation->set_rules('keterangan','Keterangan','trim');

			
			if($this->form_validation->run() == TRUE){
				if (count($this->pesan_model->getcounttgl($this->input->post('tanggal'))) == 0) {
					if($this->pesan_model->pesan()==TRUE)
					{
						$this->load->library('email');
						$config = array(
							'protocol'    => 'smtp',
							'smtp_host'   => 'ssl://smtp.googlemail.com',
							'smtp_port'   => 465,
							'auth'		  => TRUE,
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
						$this->email->message('Pemesanan Anda sudah terkirim!<br>Untuk pertanyaan dan info lebih lanjut silahkan hubungi 085102077834 - Suko atau via email blablab <br><br>Terimakasih<br><br><br>Admin Penyewaan Aula SMK Telkom');


							


						if ($this->email->send()) {
							$data['notif'] = 'Validasi sukses';
							$data['tanggal'] = $this->input->post('tanggal');

							$this->load->view('template_view',$data);
							$array = array(
								'tanggal' => $this->input->post('tanggal')
							);
							
							$this->session->set_userdata( $array );
							redirect('home/pesanpesan');
						} else {
							print_r('lalaland');
							die();
							$data['notif'] = 'Validasi gagal';
							$this->load->view('template_view',$data);
						}
					}else{
						$data['notif'] = 'Validasi gagal';
						$this->load->view('template_view',$data);
					}
				} else {
					//disini tempat notif keTika tanggal duplikat
					$this->load->view('tanggalsama_view');
				}
			}else{
				//jika gagal
				$data['notif'] = validation_errors();
				$this->load->view('template_view',$data);
			}

		}
		
	}

	public function pesanpesan()
	{
			$data['mesen'] = $this->pesan_model->get_data_pesanan_by_tgl($this->session->userdata('tanggal'));
			$this->load->view('kode_pesanan_view',$data);
	}
	
	function keluar()
	{
		$this->session->unset_userdata('tanggal');
		redirect('home');
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */