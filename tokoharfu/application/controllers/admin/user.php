<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	//load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	//data user
	public function index()
	{
		$user = $this->admin_model->listing();
		$data = array('title'	=>	'Data pengguna'
						'isi'	=> 	'admin/user/list'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file user.php */
/* Location: ./application/controllers/admin/user.php */