<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	//data user
	public function index()
	{
		$user = $this->user_model->listing();

		$data = array('title'	=>	'Halaman Administrator',
						'user'	=>	$user,
						'isi'	=>	'admin/dashboard/list'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */