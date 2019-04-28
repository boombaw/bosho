<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	public function index()
	{
		$this->load->model('model_portofolio');
		$data['portofolios'] = $this->model_portofolio->getpp('tbl_portofolio','id_portofolio','desc');
		$data['portofolio'] = 'home/portofolio/v_portofolio';
		$data['clients'] = $this->model_crud->getData('tbl_galeri','id_galeri','asc');
		$data['client'] = 'home/client/v_client';
		$data['prices'] = $this->model_crud->getData('tbl_price','id_price','asc');
		$data['price'] = 'home/price/v_price';
		$data['faqs'] = $this->model_crud->getData('tbl_faq','id_faq','desc');
		$data['faq'] = 'home/faq/v_faq';
		$data['about'] = $this->model_crud->getDetail('tbl_about','id_about',1)->row();
		$data['page'] = 'home/about/v_about';
		$this->load->view('template/template',$data);
	}
}
	
