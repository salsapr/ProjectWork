<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi_model extends CI_Model {
public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function konfirmasi()
	{
		$data = array
		(
			'KD_BOOKING'		=> $this->input->post('kd_booking'),
			'NAMA_KONFIR'		=> $this->input->post('nama_konfir'),
			'NO_REKENING'		=> $this->input->post('no_rekening'),
			'JML_UANG'			=> $this->input->post('jml_uang')
		);
		$this->db->insert('konfirmasi_pembayaran', $data);

		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		}
		else{
			return FALSE;
		}	

	}
	

}

/* End of file konfirmasi_model.php */
/* Location: ./application/models/konfirmasi_model.php */