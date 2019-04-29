<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends MX_Controller {

	public function index()
	{
		/* echo "<pre>";
		print_r($this->input->post());
		exit; */
		$data = array(
			'nama_form'		=> $this->input->post('name'),
			'email_form'	=> $this->input->post('email'),
			'jdl_form'		=> $this->input->post('subject'),
			'desc_form'		=> $this->input->post('message'),
			'dt_form'		=> date('Y-m-d H:i:s'),
			'read'			=> 0								//0 = Belum Dibaca || 1 = Sudah Dibaca//
			);
		//var_dump($data);exit();
		$this->model_crud->insertData('tbl_form',$data);
		
		echo "OK";
	}
}
	
