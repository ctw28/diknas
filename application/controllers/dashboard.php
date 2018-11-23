<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{


		if($this->session->userdata('logged_in'))
   		{
		 	$session_data = $this->session->userdata('logged_in');
			$isi['nama'] = $session_data['nama_wali_kelas']; 
			$isi['kelas'] = $session_data['kelas'];
		}
		// echo $isi['id_guru'];

		$this->load->view('dashboard-view', $isi);
	}
}
