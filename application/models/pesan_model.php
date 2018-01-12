<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function pesan()
	{
		$data = array
		(
			'NAMA_CUST'		=> $this->input->post('nama_cust'),
			'KD_BOOKING'	=> $this->input->post('generatecode'),
			'TELP'			=> $this->input->post('telp'),
			'TANGGAL'		=> $this->input->post('tanggal'),
			'JAM'			=> $this->input->post('jam'),
			'JENIS_ACARA'	=> $this->input->post('jenis'),
			'KETERANGAN'	=> $this->input->post('keterangan')
		);
		$this->db->insert('customer', $data);

		$object = array(
			'KD_BOOKING'	=> $this->input->post('generatecode'),
			'TANGGAL'		=> $this->input->post('tanggal'),
			'NAMA_KONFIR'	=> $this->input->post('nama_cust'),
			'STATUS'		=> 'BELUM BAYAR'
		);

		$this->db->insert('konfirmasi_pembayaran',$object);

		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		else{
			return FALSE;
		}	

	}

}

/* End of file pesan_model.php */
/* Location: ./application/models/pesan_model.php */