<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pilih_hasil extends CI_Controller {

	public function index()
	{

		if($this->session->userdata('logged_in_hasil'))
   		{
		 	$session_data = $this->session->userdata('logged_in_hasil');
			$isi['nama'] = $session_data['nama_wali_kelas']; 
			$isi['kelas'] = $session_data['kelas'];
		}

		$isi['kunci'] =  $this->uri->segment(2);

		$this->load->view('pilih-view', $isi);
	}

}
