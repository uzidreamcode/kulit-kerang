<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_wisata extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_admin_wisata');
		 $this->load->model('data_login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "admin_wisata",
			'namafileview' 	=> "V_admin_wisata",
			'tampil'		=> $this->M_admin_wisata->tampil(),
			
			// 'tampil_dudi'		=> $this->M_admin_wisata->tampil_dudi(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function detail_pulau($id)
	{

		$data = array(
			'namamodule' 	=> "admin_wisata",
			'namafileview' 	=> "V_data_detail",
			'detail'		=> $this->M_admin_wisata->detail_pulau($id),
			'w'		=> $id,
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function tambah_w($id)
	{

		$data = array(
			'namamodule' 	=> "admin_wisata",
			'namafileview' 	=> "V_data_tambah",
			'detail'		=> $this->M_admin_wisata->tambah_w($id),
			'w'		=> $id,
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function edit_w($id)
	{

		$data = array(
			'namamodule' 	=> "admin_wisata",
			'namafileview' 	=> "V_data_edit",
			'detail'		=> $this->M_admin_wisata->edit_w($id),
			'w'		=> $id,
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function edit_ww($id)
	{
		$this->M_admin_wisata->edit_ww();
		redirect('admin_wisata/detail_pulau/'.$id);
		
	}


	function detail1()
	{
		$data = array(
			'namamodule' 	=> "admin_wisata",
			'namafileview' 	=> "V_data_detail",
			'detail'		=> $this->M_admin_wisata->detail(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function detailw($id)
	{
		$data = array(
			'namamodule' 	=> "admin_wisata",
			'namafileview' 	=> "V_detail_wisata",
			'pecah'		=> $this->M_admin_wisata->detailw($id),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function detail2()
	{
		$data = array(
			'namamodule' 	=> "admin_wisata",
			'namafileview' 	=> "V_data_detail2",
			'detail'		=> $this->M_admin_wisata->detail2(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_admin_wisata->tambah();
		redirect('admin_wisata');
	}
	function tambah_ww($id)
	{
		$this->M_admin_wisata->tambah_ww();
		redirect('admin_wisata/detail_pulau/'.$id);
	}

	function edit()
	{
		$this->M_admin_wisata->edit();
		redirect('admin_wisata');
	}

	function hapus($id)
	{
		$this->M_admin_wisata->hapus($id);
		redirect('admin_wisata');
	}
	function hapusw($id)
	{
		$this->M_admin_wisata->hapusw($id);
		redirect('admin_wisata');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "admin_wisata",
			'namafileview' 	=> "V_admin_wisata",
			'tampil'		=> $this->M_admin_wisata->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 