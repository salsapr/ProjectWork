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
					$data['notif'] = 'Konfirmasi Pembayaran Sukses';
					$this->load->view('template_konfirmasi',$data);
				}else{
					$data['notif'] = 'Konfirmasi Pembayaran Gagal';
					$this->load->view('template_konfirmasi',$data);
				}
			}else{
				//jika gagal
				$data['notif'] = validation_errors();
				$this->load->view('template_konfirmasi',$data);
			}
		}
		
	}

}

/* End of file konfirmasi.php */
/* Location: ./application/controllers/konfirmasi.php */