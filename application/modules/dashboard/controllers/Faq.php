<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends MX_Controller {
	
	public $primary_key = 'id_faq';
	public $table = 'tbl_faq';

	public function __construct(){
		parent::__construct();
		//$this->load->model('model_user');
	}
	public function index()
	{
		
		
		$data['faq'] = $this->model_crud->getData($this->table,$this->primary_key,'desc');
		$data['page'] = 'dashboard/faq/v_faq';
		$this->load->view('templates/template',$data);
			
	}
	public function simpan()
	{
			
		$data = array(
			'question'		=> $this->input->post('pertanyaan'),
			'answer'		=> $this->input->post('jawaban')
		);
		
		//var_dump($data);exit();
		$this->model_crud->insertdata($this->table,$data);
	echo "<script>alert('Berhasil');
		document.location.href='".base_url()."dashboard/faq';</script>";
	}

	public function edit($value='')
	{
		if (@$_POST['asd']) {
			$id = $_POST['asd'];
			$artikel = $this->model_crud->getDetail($this->table,$this->primary_key,$id)->result();
			$artikel = reset($artikel);

			echo json_encode($artikel);
		}
	}

	public function update($value='')
	{
		if (@$_POST['easd']) {
			$id = $this->input->post('easd');

			$data = array(
				'question'		=> $this->input->post('e-pertanyaan'),
				'answer'		=> $this->input->post('e-jawaban')
			);
			
			//var_dump($data);exit();
			$results = $this->model_crud->updateData($this->table,$this->primary_key,$id,$data);
			$results = $this->db->affected_rows();

			if ($results) {
				echo "<script>alert('FAQ Berhasil Diubah');
		document.location.href='".base_url()."dashboard/faq';</script>";
			}else{
				echo "<script>alert('FAQ Gagal Diubah');
		document.location.href='".base_url()."dashboard/faq';</script>";
			}
		}
	}

	public function delete($value='')
	{
		if (@$_POST['asd']) {
			$id = $_POST['asd'];
			$results = $this->model_crud->delData($this->table,$this->primary_key,$id);

			if ($results > 0) {
				echo json_encode(array('results' => 'success','text' => 'FAQ Berhasil di hapus'));
			}else{
				echo json_encode(array('results' => 'failed', 'text' => 'FAQ Gagal di hapus'));
			}
		}
	}

}
	
