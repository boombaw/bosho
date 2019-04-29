<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}
	public function index()
	{		
		$is_login = $this->session->userdata('is_login');
		if ($is_login) {
			$data['page'] = 'dashboard/depan/v_dashboard';
			$this->load->view('templates/template',$data);
		}else{
			redirect(base_url('login'),'refresh');
		}
	}
}
	
