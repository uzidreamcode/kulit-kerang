<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_eks extends CI_Model {

	function tampil()
	{
		return $this->db->get('wisata')->result();
	}
 function hitsi()
	{
		
		$this->db->select('*')
		->from('siswa');
		$query = $this->db->get();
		return $query->num_rows();

	}
	function komentar($id)
	{
		return $this->db
		->from('komentar')
		->where('id_wisata',$id)
		->get()
		->result();
	}
	function detail($id)
	{
		$this->db->select('*')
		->from('wisata')
		->where('id_wisata',$id);
		$query = $this->db->get();
		return $query->row_array();
	}
	function detail2()
	{
		return $this->db
		->from('siswa')
		->join('dudi', 'dudi.id_dudi = siswa.id_dudi')
		->where('gelombang',2)
		->get()
		->result();
	}
	function hitdudi()
	{
		
		$this->db->select('*')
		->from('dudi');
		$query = $this->db->get();
		return $query->num_rows();

	}
	function hitgel1()
	{
		$i=1;
		$this->db->select('*')
		->from('siswa')
		->where('gelombang',$i);
		$query = $this->db->get();
		return $query->num_rows();

	}
	function hitgel2()
	{
		$i=2;
		$this->db->select('*')
		->from('siswa')
		->where('gelombang',$i);
		$query = $this->db->get();
		return $query->num_rows();

	}
	function hitjurusan()
	{
		
		$this->db->select('*')
		->from('jurusan');
		$query = $this->db->get();
		return $query->num_rows();

	}
	function hw()
	{
		
		$this->db->select('*')
		->from('wisata');
		$query = $this->db->get();
		return $query->num_rows();

	}
	function hitkelas()
	{
		
		$this->db->select('*')
		->from('kelas');
		$query = $this->db->get();
		return $query->num_rows();

	}
	function hkomen($idd)
	{
		
		$this->db->select('*')
		->from('komentar')
		->where('id_wisata',$idd);
		$query = $this->db->get();
		return $query->num_rows();

	}

	function tambah()
	{
		$judul_pengumuman 		= $this->input->post('judul_pengumuman');
		$tanggal	= $this->input->post('tanggal');
		$isi_pengumuman	= $this->input->post('isi_pengumuman');
		$tertuju	= $this->input->post('tertuju');

		

		$data = array(
			'judul_pengumuman'		=> $judul_pengumuman,
			'tanggal'		=> $tanggal,
			'isi_pengumuman' 				=> $isi_pengumuman,
			'tertuju'						=>$tertuju,


		);
		$this->db->insert('pengumuman', $data);


		
	}
	function tkomentar()
	{
		$idw 		= $this->input->post('idw');
		$first	= $this->input->post('first');
		$last	= $this->input->post('last');
		$isi	= $this->input->post('isi');
		$date	= $this->input->post('tgl');

		

		$data = array(
			'id_wisata'		=> $idw,
			'first'		=> $first,
			'last' 				=> $last,
			'isi'						=>$isi,
			'tanggal'						=>$date,


		);
		$this->db->insert('komentar', $data);


		
	}
	// function tampil_dudi()
	// {
	// 	$this->db->select('*')
	// 	         ->from('dudi')
	// 	$query = $this->db->get('kelas');
	// 	return $query->result();
	// 	$jml = mysqli_num_rows($query);
	// }

	function edit()
	{
		$id_pengumuman = $this->input->post('id_pengumuman');
		$judul_pengumuman = $this->input->post('judul_pengumuman');
		$tanggal		= $this->input->post('tanggal');
		$isi_pengumuman	= $this->input->post('isi_pengumuman');
		$tertuju	= $this->input->post('tertuju');

		{
			if ($this->upload->do_upload(''))
			{
				$data = array(
					'id_pengumuman'		=> $id_pengumuman,
					'judul_pengumuman'		=> $judul_pengumuman,
					'tanggal'		=> $tanggal,
					'isi_pengumuman'		=> $isi_pengumuman,
					'tertuju'		=> $tertuju,
				);
				$this->db->where('id_pengumuman',$id_pengumuman)->update('pengumuman', $data);

			}
			else{
				$data = array(
					'judul_pengumuman'		=> $judul_pengumuman,
					'tanggal'		=> $tanggal,
					'isi_pengumuman'		=> $isi_pengumuman,
					'tertuju'		=> $tertuju,
				);
				$this->db->where('id_pengumuman',$id_pengumuman)->update('pengumuman', $data);
			}	 
		}
		
	}

	function hapus($id)
	{
		$this->db->where('id_pengumuman', $id)->delete('pengumuman');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('judul_pengumuman',$cari)->get('pengumuman')->result();
	}



	function chartsenin()
	{
		$query = $this->db->query("SELECT * FROM jurnal WHERE WEEKDAY(CONCAT(tanggal)) BETWEEN 0 AND 0 AND WEEK(CONCAT(tanggal)) = WEEK(now()) GROUP BY id_jurnal");

		return $query->num_rows();
	}

	function chartselasa()
	{
		$query = $this->db->query("SELECT * FROM jurnal WHERE WEEKDAY(CONCAT(tanggal)) BETWEEN 1 AND 1 AND WEEK(CONCAT(tanggal)) = WEEK(now()) GROUP BY id_jurnal");
		return $query->num_rows();
	}

	function chartrabu()
	{
		$query = $this->db->query("SELECT * FROM jurnal WHERE WEEKDAY(CONCAT(tanggal)) BETWEEN 2 AND 2 AND WEEK(CONCAT(tanggal)) = WEEK(now()) GROUP BY id_jurnal");
		return $query->num_rows();
	}

	function chartkamis()
	{
		$query = $this->db->query("SELECT * FROM jurnal WHERE WEEKDAY(CONCAT(tanggal)) BETWEEN 3 AND 3 AND WEEK(CONCAT(tanggal)) = WEEK(now()) GROUP BY id_jurnal");
		return $query->num_rows();
	}

	function chartjumat()
	{
		$query = $this->db->query("SELECT * FROM jurnal WHERE WEEKDAY(CONCAT(tanggal)) BETWEEN 4 AND 4 AND WEEK(CONCAT(tanggal)) = WEEK(now()) GROUP BY id_jurnal");
		return $query->num_rows();
	}

	function chartsabtu()
	{
		$query = $this->db->query("SELECT * FROM riwayat_pelanggaran WHERE WEEKDAY(CONCAT(tanggal_pelanggaran)) BETWEEN 5 AND 5 AND WEEK(CONCAT(tanggal_pelanggaran)) = WEEK(now()) GROUP BY id_siswa");
		return $query->num_rows();
	}
}