<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login-view');
	}

	function antiinjection($data){ 
		$filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
		return $filter_sql;
	}

	public function getlogin()
	{

		
		$this->load->model('login_model');
		
		$this->login_model->auth_admin($this->input->post('username'), $this->input->post('password'));
	}
}
