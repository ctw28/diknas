<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengetahuan extends CI_Controller {

	public function tampil()
	{
		$this->load->model('pengetahuan_model');
		if($this->session->userdata('logged_in'))
   		{
		 	$session_data = $this->session->userdata('logged_in');
			$isi['nama'] = $session_data['nama_guru']; 
			$isi['id_guru'] = $session_data['id_guru'];
			$isi['mata_pelajaran'] = $session_data['mata_pelajaran'];
		}	
		// $isi['content'] = 'pengetahuan-view';
		$kunci =  $this->uri->segment(3);

		$isi['data_pengetahuan'] = $this->pengetahuan_model->get_data_pengetahuan($kunci);		

		$this->load->view('pengetahuan-view', $isi);
	}

	public function edit()
	{
		$this->load->model('pengetahuan_model');
		$kunci = $this->input->post('id');

		// echo $this->input->post('kd1');
		// echo " ".$this->input->post('kd2');
		// echo " ".$this->input->post('kd3');
		// echo " ".$this->input->post('kd4');
		// echo " ".$this->input->post('kd5');
		// echo " ".$this->input->post('id');
		$data['kd1'] = $this->input->post('kd1');
		$data['kd2'] = $this->input->post('kd2');
		$data['kd3'] = $this->input->post('kd3');
		$data['kd4'] = $this->input->post('kd4');
		$data['kd5'] = $this->input->post('kd5');

		$query  = $this->pengetahuan_model->cek($kunci);
		

		if ($query->num_rows()>0)      //jika data sudah ada maka update
		{
			$this->pengetahuan_model->update_pengetahuan($kunci, $data);
			echo json_encode(array('status' => true));
		}
		else{
			echo json_encode(array('status' => false));
		}

	}
}
