<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_virtual extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_admin_virtual');
		 $this->load->model('data_login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "admin_virtual",
			'namafileview' 	=> "V_admin_virtual",
			
			 'tampil'		=> $this->M_admin_virtual->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function detail1()
	{
		$data = array(
			'namamodule' 	=> "admin_virtual",
			'namafileview' 	=> "V_data_detail",
			'detail'		=> $this->M_admin_virtual->detail(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function detail($id)
	{
		$data = array(
			'namamodule' 	=> "admin_virtual",
			'namafileview' 	=> "V_data_detail",
			'pecah'		=> $this->M_admin_virtual->detail($id),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function detail2()
	{
		$data = array(
			'namamodule' 	=> "admin_virtual",
			'namafileview' 	=> "V_data_detail2",
			'detail'		=> $this->M_admin_virtual->detail2(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_admin_virtual->tambah();
		redirect('admin_virtual');
	}

	function edit()
	{
		$this->M_admin_virtual->edit();
		redirect('admin_virtual');
	}

	function hapus($id)
	{
		$this->M_admin_virtual->hapus($id);
		redirect('admin_virtual');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "admin_virtual",
			'namafileview' 	=> "V_admin_virtual",
			'tampil'		=> $this->M_admin_virtual->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 