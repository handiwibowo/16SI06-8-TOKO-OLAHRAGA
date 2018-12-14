<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	//Halaman Login Administrator
	public function index()
	{
		$data = array('title'	=>	'Login Adminisrator');
		$this->load->view('login/list', $data, FALSE);
	}
}
