<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengetahuan extends CI_Controller {

	public function tampil()
	{
		$this->load->model('pengetahuan_model');

		if($this->session->userdata('logged_in'))
   		{
		 	$session_data = $this->session->userdata('logged_in');
			$isi['nama'] = $session_data['nama_wali_kelas']; 
			$isi['kelas'] = $session_data['kelas'];
		}
		// $isi['content'] = 'pengetahuan-view';
		$kunci =  $this->uri->segment(3);

		$isi['data_pengetahuan'] = $this->pengetahuan_model->get_data_pengetahuan($kunci);		

		$this->load->view('pengetahuan-view', $isi);
	}

	public function get_pengetahuan(){
		$mapel =  $this->uri->segment(3);
		$siswa =  $this->uri->segment(4);
		$this->load->model('pengetahuan_model');

		// echo json_encode(array('status' => 'aaa'));
		$data_pengetahuan = $this->pengetahuan_model->get_data_pengetahuan_siswa_mapel($mapel, $siswa);	

		$data = array();
		$i=0;
		foreach ($data_pengetahuan -> result() as $row) {
				if($i==0){
					$data['uas'] = $row->uas;
					$data['uts'] = $row->uts;					
				}
				$data['nama'] = $row->nama_siswa;
				$data['kd1'][] = $row->kd1;
				$data['kd2'][] = $row->kd2;
				$data['kd3'][] = $row->kd3;
				$data['kd4'][] = $row->kd4;
				$data['kd5'][] = $row->kd5;
				$data['kd6'][] = $row->kd6;
				$data['kd7'][] = $row->kd7;
				$data['kd8'][] = $row->kd8;
				$data['kd9'][] = $row->kd9;
				$data['kd10'][] = $row->kd10;
				$i++;
		}
			// echo $data[0]->kd1;
		// while ($row = mysqli_fetch_assoc($data_pengetahuan)) {
		// 	$data[] = $row;
		// }

		echo json_encode($data);	

	}
}
