<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class konfirmasi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfirmasi_model');
	//Do your magic here
	}
	public function index()
	{
		$this->load->view('template_konfirmasi');
	}
	public function konfir()
	{

		if($this->input->post('send')){
			$this->form_validation->set_rules('kd_booking','Kode Booking','trim|required');
			$this->form_validation->set_rules('nama_konfir','Nama','trim|required');
			$this->form_validation->set_rules('no_rekening','Nomor Rekening','trim|required');
			$this->form_validation->set_rules('jml_uang','Jumlah Uang','trim|required');
			
			if($this->form_validation->run() == TRUE){
				if($this->konfirmasi_model->konfirmasi()==TRUE)
				{
					$this->session->set_flashdata('notif', 'Konfirmasi Pembayaran Sukses');
					redirect('konfirmasi');
				}else{
					$this->session->set_flashdata('notif', 'Konfirmasi Pembayaran Gagal');
					redirect('konfirmasi');
				}
			}else{
				//jika gagal
				$this->session->set_flashdata('notif', validation_errors());
				redirect('konfirmasi');
			}
		}
		
	}

}

/* End of file konfirmasi.php */
/* Location: ./application/controllers/konfirmasi.php */