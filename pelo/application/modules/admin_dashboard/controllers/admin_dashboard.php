<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_dashboard extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_admin_dashboard');
		 $this->load->model('data_login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "admin_dashboard",
			'namafileview' 	=> "V_admin_dashboard",
			
			// 'tampil_dudi'		=> $this->M_admin_dashboard->tampil_dudi(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function detail1()
	{
		$data = array(
			'namamodule' 	=> "admin_dashboard",
			'namafileview' 	=> "V_data_detail",
			'detail'		=> $this->M_admin_dashboard->detail(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function detail2()
	{
		$data = array(
			'namamodule' 	=> "admin_dashboard",
			'namafileview' 	=> "V_data_detail2",
			'detail'		=> $this->M_admin_dashboard->detail2(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_admin_dashboard->tambah();
		redirect('admin_dashboard');
	}

	function edit()
	{
		$this->M_admin_dashboard->edit();
		redirect('admin_dashboard');
	}

	function hapus($id)
	{
		$this->M_admin_dashboard->hapus($id);
		redirect('admin_dashboard');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "admin_dashboard",
			'namafileview' 	=> "V_admin_dashboard",
			'tampil'		=> $this->M_admin_dashboard->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 