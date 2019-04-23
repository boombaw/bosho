<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

	public function index()
	{
		$data['page'] = 'dashboard/depan/v_dashboard';
		$this->load->view('templates/template',$data);
	}
}
	
