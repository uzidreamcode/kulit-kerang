<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_eks extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_data_eks');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_eks",
			'namafileview' 	=> "V_data_eks",
			

			 'tampil'		=> $this->M_data_eks->tampil(),
			 'hw'		=> $this->M_data_eks->hw(),
		);
		echo Modules::run('template_index2/tampilCore', $data);
	}
	function detail($id)
	{
		$data = array(
			'namamodule' 	=> "data_eks",
			'namafileview' 	=> "V_data_detail",
			'detail'		=> $this->M_data_eks->detail($id),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template_index3/tampilCore', $data);
	}
	function detail2()
	{
		$data = array(
			'namamodule' 	=> "data_eks",
			'namafileview' 	=> "V_data_detail2",
			'detail'		=> $this->M_data_eks->detail2(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template_index/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_data_eks->tambah();
		redirect('data_eks');
	}
	function komentar($id)
	{
		$this->M_data_eks->tkomentar();
		redirect('data_eks/detail/'.$id);
		
	}

	function edit()
	{
		$this->M_data_eks->edit();
		redirect('data_eks');
	}

	function hapus($id)
	{
		$this->M_data_eks->hapus($id);
		redirect('data_eks');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_eks",
			'namafileview' 	=> "V_data_eks",
			'tampil'		=> $this->M_data_eks->cari(),
		);
		echo Modules::run('template_index/tampilCore', $data);
	}
	
}
 