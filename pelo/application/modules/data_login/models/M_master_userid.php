<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class M_master_userid extends CI_Model {

	public function __construct(){
		parent::__construct();
    }

	// for checking credential
	function getCredential($varUser, $varPassword)
	{
		
		// $query = "SELECT * FROM tb_login where username='$varUser' AND password='varPassword' AND level";
		// $result = $this->db->row($query);


		// $this->db->select('*')
		// 		 ->from('tb_login')
		// 		 ->join('siswa', 'siswa.id_siswa = tb_login.id_siswa')
		// 		 ->where('username',$varUser,'password',$varPassword,'level' AND 'id_admin');
				 
		// $query = $this->db->get();
		// return $query->row();
		
		$getField = array('email' => $varUser, 'password' => $varPassword );

		$query = $this->db->get_where('user', $getField);

		return $query->row();
		
	}

	function cekAdmin()
	{
		return $query = $this->db->select('*')->from('user')->get()->num_rows();
	}

}
?>
