<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	public function index()
	{
		$data['faqs'] = $this->model_crud->getData('tbl_faq','id_faq','desc');
		$data['about'] = $this->model_crud->getDetail('tbl_about','id_about',1)->row();
		$data['page'] = 'home/about/v_about';
		$data['faq'] = 'home/faq/v_faq';
		$this->load->view('template/template',$data);
	}
}
	
