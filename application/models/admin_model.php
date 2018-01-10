<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	function cek_user()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->db->where('username', $username)
						->where('password', md5($password))
						->get('admin');

		if($query->num_rows() > 0)
		{
			$data = array(
				'username' => $username,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($data);

			return TRUE;
		}
		else{
			return FALSE;
		}
	}
	function get_data_pesanan()
	{
		return $this->db->order_by('customer.TANGGAL','ASC')
						->join('konfirmasi_pembayaran', 'konfirmasi_pembayaran.TANGGAL = customer.TANGGAL')
						->get('customer')
						->result();
	}
	function get_data_pesanan_by_tgl($tanggal)
	{
		return $this->db->order_by('customer.TANGGAL','ASC')
						->join('konfirmasi_pembayaran', 'konfirmasi_pembayaran.TANGGAL = customer.TANGGAL')
						->get('customer')
						->result();
	}
}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */