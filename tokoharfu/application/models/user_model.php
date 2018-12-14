<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	public function listing()
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->order_by('id_admin', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	//Tambah
	public function tambah($data)
	{
		$this->db->insert('admin', $data);
	}

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */