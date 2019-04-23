<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

	public function __construct(){
		parent::__construct();
			date_default_timezone_set('Asia/jakarta');
			$this->load->model('Model_login');
	}
	public function index()
	{
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');
			
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('auth/v_login');
			} else {
				$valid_user = $this->Model_login->check_credential();
				
				if($valid_user == FALSE)
				{
					$this->session->set_flashdata('error','Wrong Username/Password!');
					redirect('auth/login');
				} else {
					$this->session->set_userdata('id_users',$valid_user->id_users);
					$this->session->set_userdata('nama',$valid_user->nama);
					$this->session->set_userdata('username',$valid_user->username);
					$this->session->set_userdata('email',$valid_user->email);
					$this->session->set_userdata('foto',$valid_user->foto);
					$this->session->set_userdata('kd_level',$valid_user->kd_level);
					redirect(base_url());
				}
				
			}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}
	
