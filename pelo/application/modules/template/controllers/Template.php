<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller {

	function __construct()
	{
		parent:: __construct();
		//load model

		$this->load->model('m_template');
		$this->load->model('data_login/m_session');
		
	}


	

	// view core templating
	public function index()
	{
		
		$this->load->view('view_template_core');
	}

	public function tampilCore($data)
	{
		$id = $this->session->userdata('session_id');
		if ( empty( $this->session->userdata('session_id') ) )
		{
			redirect(base_url("data_login"));
		}
		
		$this->load->view('view_template_core',$data);
	}

}
