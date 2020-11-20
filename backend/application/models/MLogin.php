<?php
class MLogin extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function GoLogin($username, $password)
	{
		$this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->where('is_active', 1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			$row = $query->row();
			$this->load->library('session');
			$this->session->set_userdata('kd_user', $row->kd_user);
			$this->session->set_userdata('username', $row->username);
			$this->session->set_userdata('foto', $row->foto);
			return $row->kd_user;
		} else {
			return false;
		}
	}
}
