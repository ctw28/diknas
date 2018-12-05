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

		$j=0;
		foreach ($data_pengetahuan -> result() as $row) {
			$i=0;
				$data[$i][$j] = $row->kd1;
				$data[$i+1][$j] = $row->kd2;
				$data[$i+2][$j] = $row->kd3;
				$data[$i+3][$j] = $row->kd4;
				$data[$i+4][$j] = $row->kd5;
				$data[$i+5][$j] = $row->kd6;
				$data[$i+6][$j] = $row->kd7;
				$data[$i+7][$j] = $row->kd8;
				$data[$i+8][$j] = $row->kd9;
				$data[$i+9][$j] = $row->kd10;
			$j++;
		}
			// echo $data[0]->kd1;
		// while ($row = mysqli_fetch_assoc($data_pengetahuan)) {
		// 	$data[] = $row;
		// }

		echo json_encode($data);	

	}
}
