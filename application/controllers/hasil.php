<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil extends CI_Controller {

	public function tampil()
	{
		$this->load->model('keterampilan_model');
		$this->load->model('pengetahuan_model');
		$this->load->model('sikap_model');
		if($this->session->userdata('logged_in'))
   		{
		 	$session_data = $this->session->userdata('logged_in');
			$isi['nama'] = $session_data['nama_wali_kelas']; 
			$isi['kelas'] = $session_data['kelas'];
		}	
		// $isi['content'] = 'keterampilan-view';
		$kunci =  $this->uri->segment(3);

		$isi['data_pengetahuan'] = $this->pengetahuan_model->get_data_pengetahuan($kunci);		
		$isi['data_keterampilan'] = $this->keterampilan_model->get_data_keterampilan($kunci);		
		$isi['data_sikap'] = $this->sikap_model->get_data_sikap($kunci);		

		$this->load->view('hasil-view', $isi);
	}

	public function edit()
	{
		$this->load->model('keterampilan_model');
		$kunci = $this->input->post('id');

		// echo $this->input->post('kd1');
		// echo " ".$this->input->post('kd2');
		// echo " ".$this->input->post('kd3');
		// echo " ".$this->input->post('kd4');
		// echo " ".$this->input->post('kd5');
		// echo " ".$this->input->post('id');
		$data['k1'] = $this->input->post('k1');
		$data['k2'] = $this->input->post('k2');
		$data['k3'] = $this->input->post('k3');
		$data['k4'] = $this->input->post('k4');
		$data['k5'] = $this->input->post('k5');
		$data['k6'] = $this->input->post('k6');
		$data['k7'] = $this->input->post('k7');
		$data['k8'] = $this->input->post('k8');
		$data['k9'] = $this->input->post('k9');
		$data['k10'] = $this->input->post('k10');

		$query  = $this->keterampilan_model->cek($kunci);
		

		if ($query->num_rows()>0)      //jika data sudah ada maka update
		{
			$this->keterampilan_model->update_keterampilan($kunci, $data);
			echo json_encode(array('status' => true));
		}
		else{
			echo json_encode(array('status' => false));
		}

	}
}
