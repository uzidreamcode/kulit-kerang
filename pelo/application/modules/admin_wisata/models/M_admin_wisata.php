<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin_wisata extends CI_Model {

	function tampil()
	{
		return $this->db->get('pulau')->result();
	}
 function hitsi()
	{
		
		$this->db->select('*')
		->from('siswa');
		$query = $this->db->get();
		return $query->num_rows();

	}
	function detail()
	{
		return $this->db
		->from('siswa')
		->join('dudi', 'dudi.id_dudi = siswa.id_dudi')
		->where('gelombang',1)
		->get()
		->result();
	}
	function detail_pulau($id)
	{
		return $this->db
		->from('wisata')
		->where('id_pulau',$id)
		->get()
		->result();
	}
	function tambah_w($id)
	{

	}
	function detailw($id)
	{
		$this->db->select('*')
		->from('wisata')
		->where('id_wisata',$id);
		$query = $this->db->get();
		return $query->row_array();
	}
	function edit_ww()
	{
		$nama_p 		= $this->input->post('nama');
		$id 		= $this->input->post('id_pulau');
		$kat 		= $this->input->post('kategori');
		$lon 		= $this->input->post('lon');
		$lat 		= $this->input->post('lat');
		$deskripsi 		= $this->input->post('deskripsi');
		$alamat 		= $this->input->post('alamat');
		$idw				= $this->input->post('idw');

		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['gambar']['name'])
		{
			if ($this->upload->do_upload('gambar'))
			{
				$gbr = $this->upload->data();
				$data = array(
					'id_pulau'			=> $id,
					'nama_wisata'			=> $nama_p,
					'foto_wisata' 			=> $gbr['file_name'],
					'kategori'			=> $kat,
					'alamat'			=> $alamat,
					'deskripsi'			=> $deskripsi,
					'la' =>$lat,
					'lo' =>$lon,


				);
				$this->db->where('id_wisata',$idw)->update('wisata', $data);

			}	 
		}
		else{
			$data = array(
				'id_pulau'			=> $id,
					'nama_wisata'			=> $nama_p,
					'kategori'			=> $kat,
					'alamat'			=> $alamat,
					'deskripsi'			=> $deskripsi,
					'la' =>$lat,
					'lo' =>$lon,
			);
			$this->db->where('id_wisata',$idw)->update('wisata', $data);
		}
	}
	function edit_w($id)
	{
		$this->db->select('*')
		->from('wisata')
		->where('id_wisata',$id);
		$query = $this->db->get();
		return $query->row_array();
	}
	function tambah_ww()
	{
		$nama_p 		= $this->input->post('nama');
		$id 		= $this->input->post('id_pulau');
		$kat 		= $this->input->post('kategori');
		$lon 		= $this->input->post('lon');
		$lat 		= $this->input->post('lat');
		$deskripsi 		= $this->input->post('deskripsi');
		$alamat 		= $this->input->post('alamat');

		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['gambar']['name'])
		{
			if ($this->upload->do_upload('gambar'))
			{
				$gbr = $this->upload->data();
				$data = array(
					'id_pulau'			=> $id,
					'nama_wisata'			=> $nama_p,
					'foto_wisata' 			=> $gbr['file_name'],
					'kategori'			=> $kat,
					'alamat'			=> $alamat,
					'deskripsi'			=> $deskripsi,
					'la' =>$lat,
					'lo' =>$lon,


				);
				$this->db->insert('wisata', $data);

			}	 
		}
		else{
			$data = array(
				'id_pulau'			=> $id,
					'nama_wisata'			=> $nama_p,
					'kategori'			=> $kat,
					'alamat'			=> $alamat,
					'deskripsi'			=> $deskripsi,
					'la' =>$lat,
					'lo' =>$lon,
			);
			$this->db->insert('wisata', $data);
		}
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
	function hitkelas()
	{
		
		$this->db->select('*')
		->from('kelas');
		$query = $this->db->get();
		return $query->num_rows();

	}

	function tambah()
	{
		$nama_p 		= $this->input->post('nama_p');
		$ket_p 		= $this->input->post('ket_p');


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['gambar']['name'])
		{
			if ($this->upload->do_upload('gambar'))
			{
				$gbr = $this->upload->data();
				$data = array(
					'nama_pulau'			=> $nama_p,
					'foto_pulau' 			=> $gbr['file_name'],
					'tentang_pulau' =>$ket_p,


				);
				$this->db->insert('pulau', $data);

			}	 
		}
		else{
			$data = array(
				'nama_pulau'			=> $nama_p,
					'tentang_pulau' =>$ket_p,
			);
			$this->db->insert('pulau', $data);
		}


		
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
	function hapusw($id)
	{
		$this->db->where('id_wisata', $id)->delete('wisata');
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