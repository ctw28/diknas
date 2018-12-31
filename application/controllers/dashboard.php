<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->model('pengaturan_model');
		$isi['logged_in_data'] = $this->keamanan_admin->keamanan();
		$isi['data_mata_pelajaran'] = $this->pengaturan_model->get_data_mata_pelajaran();
		$isi['data_siswa'] = $this->pengaturan_model->get_data_siswa();
		$this->load->view('dashboard-view', $isi);
	}
}