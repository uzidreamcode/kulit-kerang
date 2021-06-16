<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_login extends MX_Controller {


	function __construct()
	{
		parent:: __construct();

		//get model

		$this->load->model('M_master_userid');

		$this->load->model('M_session');


	}

	public function index()
	{
		// blm login
		if ( empty( $this->session->userdata('session_id') ) )
		{
			$data = array (
				'getCek' => $this->M_session->getCek(),
				'cekAdmin' => $this->M_master_userid->cekAdmin(),
				
			);
			$this->load->view('v_data_login',$data);
		} else {

			// sudah login
			redirect('admin_dashboard');
		}
	}

	//login proses
	function proses_login()
	{
		// POST
		$getUser = $this->input->post('username');
		$getPassword = sha1($this->input->post('password'));
		// Get Data
		$getData = $this->M_master_userid->getCredential($getUser, $getPassword);

		// check
		if ( ! empty($getData) )
		{
			$this->M_session->store_session( $getData->id_user );

			// flashdata
			$this->session->set_flashdata('msg', 'greeting');
			// masukan ke  dalam session
			if ($getData->level==1 ) 
			{

			

			    // redirect('data_dashboard');
			    redirect('admin_dashboard');
			    // echo $getData->id_siswa;

			}
			else if ($getData->level==2) 
			{

			    redirect('siswa_dashboard');
			    // echo $getData->id_siswa;
			}
			

		} else { // gagal login

			$this->session->set_flashdata('msg', 'loginError');
			redirect('data_login');
		}
		

	}

	// function logout
	function logoutApp()
	{
		
		$this->session->unset_userdata('session_id');

		$this->session->set_flashdata('msg', 'logoutAplikasi');
		// redirect
		redirect('data_login');
	}

	function register(){
		$captcha = $this->input->post('captcha');
		$captchasis = $this->input->post('captchasis');

		if ($captcha == $captchasis && $captcha!=null && $captchasis!=null) {
			$this->M_register->insertDataregister();
			redirect('login');
		}
		$this->load->view('register/v_register');
	}

	function lupaPassword(){
		// POST
		$getUser = $this->input->post('username');
		$getEmail = $this->input->post('email');
		$getTelp = $this->input->post('no_telp');
		// Get Data
		$getData = $this->M_master_userid->getUser($getUser, $getEmail, $getTelp);

		if (!empty($getData))
		{
			$status = $getData->status;
			$id 	= $getData->id_admin;

			if ($status == 1 || $status == 2){
				echo json_encode($id);
			}
		}
	}

	function passwordBaru()
	{
		$this->M_master_userid->passwordBaru();
		
		echo json_encode("berhasil");
	}


}
