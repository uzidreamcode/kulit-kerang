<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_index extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_data_index');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_index",
			'namafileview' 	=> "V_data_index",
			

			// 'tampil_dudi'		=> $this->M_data_index->tampil_dudi(),
		);
		echo Modules::run('template_index/tampilCore', $data);
	}
	function detail1()
	{
		$data = array(
			'namamodule' 	=> "data_index",
			'namafileview' 	=> "V_data_detail",
			'detail'		=> $this->M_data_index->detail(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template_index/tampilCore', $data);
	}
	function detail2()
	{
		$data = array(
			'namamodule' 	=> "data_index",
			'namafileview' 	=> "V_data_detail2",
			'detail'		=> $this->M_data_index->detail2(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template_index/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_data_index->tambah();
		redirect('data_index');
	}

	function edit()
	{
		$this->M_data_index->edit();
		redirect('data_index');
	}

	function hapus($id)
	{
		$this->M_data_index->hapus($id);
		redirect('data_index');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_index",
			'namafileview' 	=> "V_data_index",
			'tampil'		=> $this->M_data_index->cari(),
		);
		echo Modules::run('template_index/tampilCore', $data);
	}
	
}
 