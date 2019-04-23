<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends MX_Controller {
	
public function __construct(){
		parent::__construct();
		//$this->load->model('model_user');
	}
	public function index()
	{
		$data['kontak']=$this->model_crud->getData('tbl_kontak','id_kontak','desc');
		$data['page'] = 'dashboard/kontak/v_kontak';
		$this->load->view('templates/template',$data);
			
	}
	public function tambah()
	{
		$data['page'] = 'dashboard/kontak/v_add_kontak';
		$this->load->view('templates/template',$data);
			
	}
	public function add()
	{
		
		$data = array(
			'jdl_alamat'	=> $this->input->post('judul'),
			'alamat'		=> $this->input->post('alamat'),
			'email_ktk'		=> $this->input->post('email'),
			'tlp_ktk'		=> $this->input->post('tlp')
		);
		
		//var_dump($data);exit();
		$this->model_crud->insertdata('tbl_kontak',$data);
	}

	public function edit($id)
	{
		if (@$id) {
			$arrUser = $this->model_crud->getDetail('tbl_kontak','id_kontak',$id)->result();
			$data['user'] = reset($arrUser);
			$data['page'] = 'dashboard/kontak/v_edit_kontak';
			$this->load->view('templates/template',$data);
		}
	}

	public function update()
	{
		// Primary Key
		$id = $_POST['asd'];

		$dataUpdate = [
			'jdl_alamat' => $_POST['judul'],
			'email_ktk'  => $_POST['email'],
			'alamat'     => $_POST['alamat'],
			'tlp_ktk'    => $_POST['tlp'],
		];

		$result = $this->model_crud->updateData('tbl_kontak','id_kontak',$id,$dataUpdate);

		$result = $this->db->affected_rows();

		if ($result) {
			return true;
		}

		return false;
	}

	public function delete()
	{
		if (@$_POST['asd']) {
			$id = $_POST['asd'];
			$results = $this->model_crud->delData('tbl_kontak','id_kontak',$id);

			if ($results > 0) {
				echo json_encode(array('results' => 'success','text' => 'Kontak Berhasil di hapus'));
			}else{
				echo json_encode(array('results' => 'failed', 'text' => 'Kontak Gagal di hapus'));
			}
		}
	}
	
}
	
