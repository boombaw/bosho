<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
			date_default_timezone_set('Asia/jakarta');
			$this->load->model('Model_login');
	}
	public function index()
	{
		if (@$_POST) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$valid_user = $this->Model_login->check_credential($username,$password);
			
			if($valid_user == FALSE)
			{
				$this->session->set_flashdata('error','Wrong Username/Password!');
				// redirect('login');
				echo json_encode(['result' => 'failed','text' => 'Username or Password Incorrect']);
			} else {
				$this->session->set_userdata('id_pengguna',$valid_user->id_pengguna);
				$this->session->set_userdata('nama',$valid_user->nama);
				$this->session->set_userdata('username',$valid_user->username);
				$this->session->set_userdata('email',$valid_user->email);				
				$this->session->set_userdata( 'is_login',true);
				echo json_encode(['result' => 'ok','uri' => 'dashboard']);
			}
		}else{
			$this->load->view('auth/v_login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
	
