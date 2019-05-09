<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio extends CI_Controller {

	public function index()
	{
		$this->load->model('model_portofolio');
		$this->load->model('model_artikel');
		$data['signature'] = $this->model_crud->getDetail('tbl_signature','id_c',1)->row();
		$data['contacts'] = $this->model_crud->getData('tbl_kontak','id_kontak','desc');
		$data['about'] = $this->model_crud->getDetail('tbl_about','id_about',1)->row();
		$data['portofolio_limit'] = $this->model_portofolio->getpp('tbl_portofolio','id_portofolio','desc');
		$data['artikel_limit'] = $this->model_artikel->getartikel('tbl_artikel','id_artikel','desc');
		$data['portofolios'] = $this->model_crud->getData('tbl_portofolio','id_portofolio','desc');
		$data['artikels'] = $this->model_crud->getData('tbl_artikel','id_artikel','desc');
		$data['page'] = 'home/portofolio/v_all_pp';
		$data['title'] = 'Portofolio';
		$data['deskrip'] = 'Bagaimana Hasil Kerja Kami?';
		$this->load->view('template/template_blog',$data);
	}
	
	public function detail($id)
	{
		$this->load->model('model_portofolio');
		$this->load->model('model_artikel');
		$data['signature'] = $this->model_crud->getDetail('tbl_signature','id_c',1)->row();
		$data['contacts'] = $this->model_crud->getData('tbl_kontak','id_kontak','desc');
		$data['about'] = $this->model_crud->getDetail('tbl_about','id_about',1)->row();
		$data['portofolio_limit'] = $this->model_portofolio->getpp('tbl_portofolio','id_portofolio','desc');
		$data['artikel_limit'] = $this->model_artikel->getartikel('tbl_artikel','id_artikel','desc');
		$data['portofolios'] = $this->model_crud->getDetail('tbl_portofolio','id_portofolio',$id)->row();
		$des = $this->model_crud->getDetail('tbl_portofolio','id_portofolio',$id)->row()->judul;
		$data['artikels'] = $this->model_crud->getDetail('tbl_artikel','id_artikel',$id)->row();
		$data['page'] = 'home/portofolio/v_detail_pp';
		$data['title'] = 'Portofolio';
		$data['deskrip'] = $des;
		$this->load->view('template/template_blog',$data);
	}
}
	
