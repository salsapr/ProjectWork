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
			'TANGGAL'		=> $this->input->post('tanggal')
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
	function get_data_pesanan()
	{
		//untuk kode_pesanan_view
		return $this->db->order_by('customer.TANGGAL','ASC')
						->join('konfirmasi_pembayaran', 'konfirmasi_pembayaran.TANGGAL = customer.TANGGAL')
						->get('customer')
						->result();
	}
	function get_data_pesanan_by_tgl($tanggal)
	{
		return $this->db->where('customer.TANGGAL',$tanggal)
						->get('customer')
						->row();
	}

	function getcounttgl($tgl)
	{
		return $this->db->where('TANGGAL', $tgl)
						->count_all_result('customer');
	}
}

/* End of file pesan_model.php */
/* Location: ./application/models/pesan_model.php */