<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends MX_Controller {

	public function index()
	{
		$this->load->model('model_portofolio');
		$this->load->model('model_artikel');
		$data['portofolio_limit'] = $this->model_portofolio->getpp('tbl_portofolio','id_portofolio','desc');
		$data['artikel_limit'] = $this->model_artikel->getartikel('tbl_artikel','id_artikel','desc');
		$data['portofolios'] = $this->model_crud->getData('tbl_portofolio','id_portofolio','desc');
		$data['artikels'] = $this->model_crud->getData('tbl_artikel','id_artikel','desc');
		$data['page'] = 'home/artikel/v_all_artikel';
		$data['title'] = 'Artikel';
		$data['deskrip'] = 'Tau Gak Sih?';
		$this->load->view('template/template_blog',$data);
	}
}
	
