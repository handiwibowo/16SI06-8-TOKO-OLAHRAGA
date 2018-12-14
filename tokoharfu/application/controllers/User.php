<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	//load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	//data user
	public function index()
	{
		$user = $this->user_model->listing();

		$data = array('title'	=>	'Data pengguna',
						'user'	=>	$user,
						'isi'	=>	'admin/user/list'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//Tambah user
	public function tambah()
	{
		$valid = $this->form_validation;

		//form validasi
		$valid->set_rules('nama', 'Nama lengkap', 'required',
			array('required'	=>	'%s Harus di isi'));

		$valid->set_rules('email', 'Email pengguna', 'required|valid_email',
			array('required'	=>	'%s Harus di isi',
				 'valid_email'	=>	'%s Tidak valid'));

		$valid->set_rules('password', 'password', 'required',
			array('required'	=>	'%s Harus di isi'));

		$valid->set_rules('telepon', 'Nomor telepon', 'required',
			array('required'	=>	'%s Harus di isi'));

		$valid->set_rules('alamat', 'alamat admin', 'required',
			array('required'	=>	'%s Harus di isi'));


		if ($valid->run()===FALSE) {
			//end validasi

		$data = array('title'	=>	'Tambah pengguna',
						'isi'	=>	'admin/user/tambah'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}else{
		$i = $this->input;
		$data = array('nama_admin'	=>	$i->post('nama'),
					'email_admin'	=>	$i->post('email'),
					'pass_admin'	=>	$i->post('password'),
					'telp_admin'	=>	$i->post('telepon'),
					'alamat_admin'	=>	$i->post('alamat'),
		);
		$this->user_model->tambah($data);
		$this->session->set_flashdata('sukses', 'data telah ditambah');
		redirect(base_url('user/tambah'),'refresh');
	}

}
}
/* End of file user.php */
/* Location: ./application/controllers/admin/user.php */