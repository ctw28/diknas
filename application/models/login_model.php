<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_model {

	public function auth_admin($u, $p)
	{
		// $pass=md5($p);
		$this->db->where('username', $u);
		$this->db->where('password',  $p);
		$query_admin = $this->db->get('t_wali_kelas');
		if ($query_admin->num_rows()>0) {
			foreach ($query_admin->result() as $row_admin) {
				$sess_admin = array('kelas' => $row_admin->kelas,
							  'nama_wali_kelas' => $row_admin->nama_wali_kelas);
				$this->session->set_userdata('logged_in', $sess_admin);
				// $this->session->mark_as_temp('logged_in', 10);
		        // simpan_log("<b>".$sess_admin['nama_admin']."</b> login");
				redirect('dashboard');
				// echo $row_admin->nama_guru." ".$row_admin->mata_pelajaran;
			}
		}
		else {
			// $this->session->set_flashdata('info', 'Maaf, Kombinasi Username dan Password salah');
			// redirect('login');
			echo "gagal <br> ".$p;
		}
	}

	
} 

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */