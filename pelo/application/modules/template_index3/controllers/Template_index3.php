<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class template_index3 extends MX_Controller {

	function __construct()
	{
		parent:: __construct();
		//load model

		$this->load->model('m_template_index3');
	}


	

	// view core templating
	public function index()
	{
		
		$this->load->view('view_template_core_index3');
	}

	public function tampilCore($data)
	{
		$id = $this->session->userdata('session_id');
		// if($this->session->userdata('session_id') != "login"){
		// 	redirect(base_url("login"));
		// }
		// if ( empty( $this->session->userdata('session_id') ) )
		// {
		// 	redirect(base_url("login"));
		// }

		
		$this->load->view('view_template_core_index3',$data);
	}

}
