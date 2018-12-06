<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keterampilan extends CI_Controller {

	public function tampil()
	{
		$this->load->model('keterampilan_model');
		if($this->session->userdata('logged_in'))
   		{
		 	$session_data = $this->session->userdata('logged_in');
			$isi['nama'] = $session_data['nama_wali_kelas']; 
			$isi['kelas'] = $session_data['kelas'];
		}
		// $isi['content'] = 'keterampilan-view';
		$kunci =  $this->uri->segment(3);

		$isi['data_keterampilan'] = $this->keterampilan_model->get_data_keterampilan($kunci);		

		$this->load->view('keterampilan-view', $isi);
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

	public function get_keterampilan(){
		$mapel =  $this->uri->segment(3);
		$siswa =  $this->uri->segment(4);
		$this->load->model('keterampilan_model');

		// echo json_encode(array('status' => 'aaa'));
		$data_keterampilan = $this->keterampilan_model->get_data_keterampilan_siswa_mapel($mapel, $siswa);	

		$data_sikap = array();
		foreach ($data_keterampilan -> result() as $row) {
				$data_sikap['k1'] = $row->k1;
				$data_sikap['k2'] = $row->k2;
				$data_sikap['k3'] = $row->k3;
				$data_sikap['k4'] = $row->k4;
				$data_sikap['k5'] = $row->k5;
				$data_sikap['k6'] = $row->k6;
				$data_sikap['k7'] = $row->k7;
				$data_sikap['k8'] = $row->k8;
				$data_sikap['k9'] = $row->k9;
				$data_sikap['k10'] = $row->k10;
		}
			// echo $data[0]->kd1;
		// while ($row = mysqli_fetch_assoc($data_pengetahuan)) {
		// 	$data[] = $row;
		// }

		echo json_encode($data_sikap);	

	}	
}
