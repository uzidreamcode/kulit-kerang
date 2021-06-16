<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_kontak extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_data_kontak');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_kontak",
			'namafileview' 	=> "V_data_kontak",
			

			// 'tampil_dudi'		=> $this->M_data_kontak->tampil_dudi(),
		);
		echo Modules::run('template_index3/tampilCore', $data);
	}
	function detail1()
	{
		$data = array(
			'namamodule' 	=> "data_kontak",
			'namafileview' 	=> "V_data_detail",
			'detail'		=> $this->M_data_kontak->detail(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template_index/tampilCore', $data);
	}
	function detail2()
	{
		$data = array(
			'namamodule' 	=> "data_kontak",
			'namafileview' 	=> "V_data_detail2",
			'detail'		=> $this->M_data_kontak->detail2(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template_index/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_data_kontak->tambah();
		redirect('data_kontak');
	}
	function send()
	{
		$this->M_data_kontak->send();
		redirect('data_kontak');
	}

	function edit()
	{
		$this->M_data_kontak->edit();
		redirect('data_kontak');
	}

	function hapus($id)
	{
		$this->M_data_kontak->hapus($id);
		redirect('data_kontak');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_kontak",
			'namafileview' 	=> "V_data_kontak",
			'tampil'		=> $this->M_data_kontak->cari(),
		);
		echo Modules::run('template_index/tampilCore', $data);
	}
	
}
 