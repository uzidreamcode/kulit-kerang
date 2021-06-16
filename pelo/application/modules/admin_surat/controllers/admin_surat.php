<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_surat extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_admin_surat');
		 $this->load->model('data_login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "admin_surat",
			'namafileview' 	=> "V_admin_surat",
			
			'tampil'		=> $this->M_admin_surat->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function detail1()
	{
		$data = array(
			'namamodule' 	=> "admin_surat",
			'namafileview' 	=> "V_data_detail",
			'detail'		=> $this->M_admin_surat->detail(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function detail($id)
	{
		$data = array(
			'namamodule' 	=> "admin_surat",
			'namafileview' 	=> "V_data_detail",
			'detail'		=> $this->M_admin_surat->detail($id),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function detail2()
	{
		$data = array(
			'namamodule' 	=> "admin_surat",
			'namafileview' 	=> "V_data_detail2",
			'detail'		=> $this->M_admin_surat->detail2(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_admin_surat->tambah();
		redirect('admin_surat');
	}

	function edit()
	{
		$this->M_admin_surat->edit();
		redirect('admin_surat');
	}

	function hapus($id)
	{
		$this->M_admin_surat->hapus($id);
		redirect('admin_surat');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "admin_surat",
			'namafileview' 	=> "V_admin_surat",
			'tampil'		=> $this->M_admin_surat->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 