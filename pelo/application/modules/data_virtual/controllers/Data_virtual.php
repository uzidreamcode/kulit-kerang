<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_virtual extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_data_virtual');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_virtual",
			'namafileview' 	=> "V_data_virtual",
			

			'tampil'		=> $this->M_data_virtual->tampil(),
		);
		echo Modules::run('template_index3/tampilCore', $data);
	}
	
	function detail($id)
	{
		$data = array(
			'namamodule' 	=> "data_virtual",
			'namafileview' 	=> "V_data_detail",
			'detail'		=> $this->M_data_virtual->detail($id),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template_index3/tampilCore', $data);
	}
	function detail2()
	{
		$data = array(
			'namamodule' 	=> "data_virtual",
			'namafileview' 	=> "V_data_detail2",
			'detail'		=> $this->M_data_virtual->detail2(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template_index/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_data_virtual->tambah();
		redirect('data_virtual');
	}

	function edit()
	{
		$this->M_data_virtual->edit();
		redirect('data_virtual');
	}

	function hapus($id)
	{
		$this->M_data_virtual->hapus($id);
		redirect('data_virtual');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_virtual",
			'namafileview' 	=> "V_data_virtual",
			'tampil'		=> $this->M_data_virtual->cari(),
		);
		echo Modules::run('template_index/tampilCore', $data);
	}
	
}
 