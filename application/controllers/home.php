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
			$this->form_validation->set_rules('jenis','Jenis Acara','trim|required');
			$this->form_validation->set_rules('keterangan','Keterangan','trim');
			
			if($this->form_validation->run() == TRUE){
				if($this->pesan_model->pesan()==TRUE)
				{
					$data['notif'] = 'Validasi sukses';
					$data['tanggal'] = $this->input->post('tanggal');

					$this->load->view('template_view',$data);
					redirect('home/pesanpesan');
				}else{
					$data['notif'] = 'Validasi gagal';
					$this->load->view('template_view',$data);
				}
			}else{
				//jika gagal
				$data['notif'] = validation_errors();
				$this->load->view('template_view',$data);
			}
		}
		
	}

	function pesanpesan()
	{
			$tanggal = $this->uri->segment(3);
			$data['mesen'] = $this->pesan_model->get_data_pesanan_by_tgl($tanggal);
			$this->load->view('kode_pesanan_view',$data);
	}
	

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */