<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->keamanan_admin->keamanan();

		$this->load->model('pengaturan_model');


		if($this->session->userdata('logged_in_hasil'))
   		{
		 	$session_data = $this->session->userdata('logged_in_hasil');
			$isi['nama'] = $session_data['nama_wali_kelas']; 
			$isi['kelas'] = $session_data['kelas'];
		}
	
		$isi['data_mata_pelajaran'] = $this->pengaturan_model->get_data_mata_pelajaran();
		$isi['data_siswa'] = $this->pengaturan_model->get_data_siswa();

		// echo $isi['id_guru'];

		$this->load->view('dashboard-view', $isi);
	}
}
