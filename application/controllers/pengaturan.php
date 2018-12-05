<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	public function mata_pelajaran()
	{
		$this->load->model('pengaturan_model');


		if($this->session->userdata('logged_in'))
   		{
		 	$session_data = $this->session->userdata('logged_in');
			$isi['nama'] = $session_data['nama_wali_kelas']; 
			$isi['kelas'] = $session_data['kelas'];
		}
	
		$isi['data_mata_pelajaran'] = $this->pengaturan_model->get_data_mata_pelajaran();

		// echo $isi['id_guru'];

		$this->load->view('Pengaturan-view', $isi);
	}


	public function siswa()
	{
		$this->load->model('pengaturan_model');


		if($this->session->userdata('logged_in'))
   		{
		 	$session_data = $this->session->userdata('logged_in');
			$isi['nama'] = $session_data['nama_wali_kelas']; 
			$isi['kelas'] = $session_data['kelas'];
		}
	
		$isi['data_siswa'] = $this->pengaturan_model->get_data_siswa();

		// echo $isi['id_guru'];

		$this->load->view('Pengaturan-siswa', $isi);
	}


	public function tambah_siswa()
	{
		$this->load->model('pengaturan_model');
		if($this->session->userdata('logged_in'))
   		{
		 	$session_data = $this->session->userdata('logged_in');
			$isi['nama'] = $session_data['nama_wali_kelas']; 
			$isi['kelas'] = $session_data['kelas'];
		}
				$isi['id_siswa'] = '';
				$isi['nama_siswa'] = '';
				$isi['no_induk'] = '';

		$this->load->view('siswa-tambah', $isi);		 

	}


	public function edit_mata_pelajaran()
	{
		$this->load->model('pengaturan_model');
		if($this->session->userdata('logged_in'))
   		{
		 	$session_data = $this->session->userdata('logged_in');
			$isi['nama'] = $session_data['nama_wali_kelas']; 
			$isi['kelas'] = $session_data['kelas'];
		}
		$kunci = $this->uri->segment(3);
		
		$query  = $this->pengaturan_model->cek($kunci);

		if($query->num_rows()>0){
			foreach ($query -> result() as $row) {
				$isi['id_guru'] = $row->id_guru;
				$isi['nama_guru'] = $row->nama_guru;
				$isi['username'] = $row->username;
				$isi['password'] = $row->password;
				$isi['mata_pelajaran'] = $row->mata_pelajaran;
				$isi['kkm'] = $row->kkm;
				$isi['status_mapel'] = $row->status_mapel;
			}
		}
		else {
				$isi['nama_guru'] = '';
				$isi['username'] = '';
				$isi['password'] = '';
				$isi['mata_pelajaran'] = '';
				$isi['kkm'] = '';
				$isi['status_mapel'] = '';
		}

		$this->load->view('pengaturan-mata-pelajaran-view', $isi);		 

	}

	public function update()
	{
		$this->load->model('pengaturan_model');
		$kunci = $this->input->post('id_guru');
		echo $kunci;

		$data['nama_guru'] = $this->input->post('nama_guru');
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		$data['mata_pelajaran'] = $this->input->post('mata_pelajaran');
		$data['kkm'] = $this->input->post('kkm');
		$data['status_mapel'] = $this->input->post('status_mapel');

		$query  = $this->pengaturan_model->cek($kunci);
		

		if ($query->num_rows()>0)      //jika data sudah ada maka update
		{
			$this->pengaturan_model->update_mata_pelajaran($kunci, $data);
			redirect('pengaturan/mata_pelajaran');
		}
		else{
			echo "gagal";
		}

	}









	public function edit_siswa()
	{
		$this->load->model('pengaturan_model');
		if($this->session->userdata('logged_in'))
   		{
		 	$session_data = $this->session->userdata('logged_in');
			$isi['nama'] = $session_data['nama_wali_kelas']; 
			$isi['kelas'] = $session_data['kelas'];
		}
		$kunci = $this->uri->segment(3);
		
		$query  = $this->pengaturan_model->cek_siswa($kunci);

		if($query->num_rows()>0){
			foreach ($query -> result() as $row) {
				$isi['id_siswa'] = $row->id_siswa;
				$isi['nama_siswa'] = $row->nama_siswa;
				$isi['no_induk'] = $row->no_induk;
			}
		}
		else {
				$isi['id_siswa'] = '';
				$isi['nama_siswa'] = '';
				$isi['no_induk'] = '';
		}

		$this->load->view('pengaturan-siswa-view', $isi);		 

	}

	public function update_siswa()
	{
		$this->load->model('pengaturan_model');
		$kunci = $this->input->post('id_siswa');
		echo $kunci;

		$data['nama_siswa'] = $this->input->post('nama_siswa');
		$data['no_induk'] = $this->input->post('no_induk');

		$query  = $this->pengaturan_model->cek_siswa($kunci);
		

		if ($query->num_rows()>0)      //jika data sudah ada maka update
		{
			$this->pengaturan_model->update_siswa($kunci, $data);
			redirect('pengaturan/siswa');
		}
		else{
			$this->pengaturan_model->tambah_siswa($data);
			redirect('pengaturan/siswa');
		}

	}
}
