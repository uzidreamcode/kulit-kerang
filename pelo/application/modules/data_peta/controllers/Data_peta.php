<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_peta extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_data_peta');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_peta",
			'namafileview' 	=> "V_data_peta",
			

			'tampil_dudi'		=> $this->M_data_peta->tampil(),
		);
		echo Modules::run('template_index3/tampilCore', $data);
	}
	function detail1()
	{
		$data = array(
			'namamodule' 	=> "data_peta",
			'namafileview' 	=> "V_data_detail",
			'detail'		=> $this->M_data_peta->detail(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template_index/tampilCore', $data);
	}
	function detail2()
	{
		$data = array(
			'namamodule' 	=> "data_peta",
			'namafileview' 	=> "V_data_detail2",
			'detail'		=> $this->M_data_peta->detail2(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template_index/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_data_peta->tambah();
		redirect('data_peta');
	}

	function edit()
	{
		$this->M_data_peta->edit();
		redirect('data_peta');
	}

	function hapus($id)
	{
		$this->M_data_peta->hapus($id);
		redirect('data_peta');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_peta",
			'namafileview' 	=> "V_data_peta",
			'tampil'		=> $this->M_data_peta->cari(),
		);
		echo Modules::run('template_index/tampilCore', $data);
	}
	
}
 