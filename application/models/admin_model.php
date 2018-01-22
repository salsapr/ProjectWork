<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function get_notifikasi()
	{
		return $this->db->select('count(*) as unread')
						->where('read', 'unread')
						->get('customer')
						->row()->unread;
	}

	public function change_read(){
		$data = array('read' => 'read');
		$this->db->update('customer', $data);

		if($this->db->affected_rows() >0)
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function lihat_batal(){

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
		return $this->db->where('customer.TANGGAL',$tanggal)
						->join('konfirmasi_pembayaran', 'konfirmasi_pembayaran.TANGGAL = customer.TANGGAL')
						->get('customer')
						->row();
	}
	function update_status($tanggal)
	{
		$data = array(
				'status'	=> $this->input->post('status')
		);
		
		$this->db->where('tanggal', $tanggal)
				->update('konfirmasi_pembayaran', $data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
		/*$query = $this->db->get('customer');
		$query_result = $query->result();
		return $query_result;
		}*/
		// Function To Fetch Selected Student Record
		/*function update($data){
		$this->db->select('*');
		$this->db->from('customer');
		$this->db->where('tanggal', $data);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
		}*/
		// Update Query For Selected Student
		/*function update_student_id1($id,$data){
		$this->db->where('student_id', $id);
		$this->db->update('students', $data);
		}*/
		// $data = array(
		// 	'status'		=> $this->input->post('status')
		// 	);
		// // 'status'	=> $this->input->post('status');
		// //prose insert
		// $this->db->where('tanggal', $tanggal)
		// 		->update('customer', $data);

		// 		//cek apakah berhasil insert data?
		// 		if($this->db->affected_rows() > 0){
		// 			return TRUE;
		// 		} else {
		// 			return FALSE;
		// 		}
	}
}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */