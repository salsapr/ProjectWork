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
			'nama_cust'		=> $this->input->post('nama_cust'),
			'telp'			=> $this->input->post('telp'),
			'tanggal'		=> $this->input->post('tanggal'),
			'jam'			=> $this->input->post('jam'),
			'jenis_acara'	=> $this->input->post('jenis_acara'),
			'keterangan'	=> $this->input->post('keterangan')
		);
		$this->db->insert('customer', $data);

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