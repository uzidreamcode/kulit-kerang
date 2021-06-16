<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_wisata extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_data_wisata');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_wisata",
			'namafileview' 	=> "V_data_wisata",
			

			'tampil'		=> $this->M_data_wisata->tampil(),
		);
		echo Modules::run('template_index3/tampilCore', $data);
	}
	function detail1()
	{
		$data = array(
			'namamodule' 	=> "data_wisata",
			'namafileview' 	=> "V_data_detail",
			'detail'		=> $this->M_data_wisata->detail(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template_index/tampilCore', $data);
	}
	function detail($id)
	{
		$data = array(
			'namamodule' 	=> "data_wisata",
			'namafileview' 	=> "V_data_detail",
			'tampil'		=> $this->M_data_wisata->detail($id),
			'hw'		=> $this->M_data_wisata->hw($id),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template_index2/tampilCore', $data);
	}
	function detail2()
	{
		$data = array(
			'namamodule' 	=> "data_wisata",
			'namafileview' 	=> "V_data_detail2",
			'detail'		=> $this->M_data_wisata->detail2(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template_index/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_data_wisata->tambah();
		redirect('data_wisata');
	}

	function edit()
	{
		$this->M_data_wisata->edit();
		redirect('data_wisata');
	}

	function hapus($id)
	{
		$this->M_data_wisata->hapus($id);
		redirect('data_wisata');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_wisata",
			'namafileview' 	=> "V_data_wisata",
			'tampil'		=> $this->M_data_wisata->cari(),
		);
		echo Modules::run('template_index/tampilCore', $data);
	}
	
}
 