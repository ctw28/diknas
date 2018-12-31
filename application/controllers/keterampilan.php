<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keterampilan extends CI_Controller {

   
	public function tampil()
	{
		$this->load->model('keterampilan_model');
		if($this->session->userdata('logged_in_hasil'))
   		{
		 	$session_data = $this->session->userdata('logged_in_hasil');
			$isi['nama'] = $session_data['nama_wali_kelas']; 
			$isi['kelas'] = $session_data['kelas'];
		}
		// $isi['content'] = 'keterampilan-view';
		$kunci =  $this->uri->segment(3);

		$isi['data_keterampilan'] = $this->keterampilan_model->get_data_keterampilan($kunci);		

		$this->load->view('keterampilan-view', $isi);
	}

	public function get_keterampilan_data(){
		$this->load->model('keterampilan_model');
		$id_mapel =  $this->uri->segment(3);
		$id_siswa =  $this->uri->segment(4);
		$data_keterampilan = $this->keterampilan_model->get_data_keterampilan_by_($id_mapel, $id_siswa);	
		$arr_data_keterampilan = array();
		foreach ($data_keterampilan -> result() as $row) {
			$arr_data_keterampilan['k1'] = $row->k1;
			$arr_data_keterampilan['k2'] = $row->k2;
			$arr_data_keterampilan['k3'] = $row->k3;
			$arr_data_keterampilan['k4'] = $row->k4;
			$arr_data_keterampilan['k5'] = $row->k5;
			$arr_data_keterampilan['k6'] = $row->k6;
			$arr_data_keterampilan['k7'] = $row->k7;
			$arr_data_keterampilan['k8'] = $row->k8;
			$arr_data_keterampilan['k9'] = $row->k9;
			$arr_data_keterampilan['k10'] = $row->k10;
		}
		echo json_encode($arr_data_keterampilan);
	}
	
}
