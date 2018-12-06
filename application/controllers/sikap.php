<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sikap extends CI_Controller {

	public function tampil()
	{
		$this->load->model('sikap_model');
		if($this->session->userdata('logged_in'))
   		{
		 	$session_data = $this->session->userdata('logged_in');
			$isi['nama'] = $session_data['nama_guru']; 
			$isi['id_guru'] = $session_data['id_guru'];
			$isi['mata_pelajaran'] = $session_data['mata_pelajaran'];
		}	
		// $isi['content'] = 'sikap-view';
		$kunci =  $this->uri->segment(3);

		$isi['data_sikap'] = $this->sikap_model->get_data_sikap($kunci);		

		// $this->load->view('dashboard-view', $isi);
		$this->load->view('sikap-view', $isi);

	}

	public function edit()
	{
		$this->load->model('sikap_model');
		$kunci = $this->input->post('id');

		$data['sikap1'] = $this->input->post('sikap1');
		$data['sikap2'] = $this->input->post('sikap2');
		$data['sikap3'] = $this->input->post('sikap3');
		$data['sikap4'] = $this->input->post('sikap4');
		$data['sikap5'] = $this->input->post('sikap5');
		$data['sikap6'] = $this->input->post('sikap6');
		$data['sikap7'] = $this->input->post('sikap7');
		$data['sikap8'] = $this->input->post('sikap8');
		$data['sikap9'] = $this->input->post('sikap9');
		$data['sikap10'] = $this->input->post('sikap10');

		$query  = $this->sikap_model->cek($kunci);
		

		if ($query->num_rows()>0)      //jika data sudah ada maka update
		{
			$this->sikap_model->update_sikap($kunci, $data);
			echo json_encode(array('status' => true));
		}
		else{
			echo json_encode(array('status' => false));
		}

	}



	public function get_sikap(){
		$mapel =  $this->uri->segment(3);
		$siswa =  $this->uri->segment(4);
		$this->load->model('sikap_model');

		// echo json_encode(array('status' => 'aaa'));
		$data_pengetahuan = $this->sikap_model->get_data_sikap_siswa_mapel($mapel, $siswa);	

		$data = array();
		$i=0;
		foreach ($data_pengetahuan -> result() as $row) {
				$data['s1'][] = $row->sikap1;
				$data['s2'][] = $row->sikap2;
				$data['s3'][] = $row->sikap3;
				$data['s4'][] = $row->sikap4;
				$data['s5'][] = $row->sikap5;
				$data['s6'][] = $row->sikap6;
				$data['s7'][] = $row->sikap7;
				$data['s8'][] = $row->sikap8;
				$data['s9'][] = $row->sikap9;
				$data['s10'][] = $row->sikap10;
		}
			// echo $data[0]->kd1;
		// while ($row = mysqli_fetch_assoc($data_pengetahuan)) {
		// 	$data[] = $row;
		// }

		echo json_encode($data);	

	}
}
