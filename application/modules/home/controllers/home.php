<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	public function index()
	{
		$data['about'] = $this->model_crud->getDetail('tbl_about','id_about',1)->row();
		$data['page'] = 'home/home/v_home';
		$this->load->view('template/template',$data);
	}
}
	