<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_user');
	}


	public function index()
	{
		$data['user']=$this->model_crud->getData('tbl_pengguna','nama','asc');
		$data['page'] = 'dashboard/user/v_user';
		$this->load->view('templates/template',$data);
			
	}
	public function tambah()
	{
		$data['page'] = 'dashboard/user/v_add_user';
		$this->load->view('templates/template',$data);
			
	}
	public function add()
	{
		
		$data = array(
			'nama'		=> $this->input->post('nama'),
			'username'	=> $this->input->post('username'),
			'password'	=> $this->input->post('password'),
			'email'		=> $this->input->post('email'),
			'tlp'		=> $this->input->post('tlp'),
			// 'unitbiro'	=> $this->input->post('unitbiro')
		);
		
		//var_dump($data);exit();
		$this->model_crud->insertdata('tbl_pengguna',$data);
	}

	// Edit
	public function edit($id='')
	{
		if (@$id) {
			$arrUser = $this->model_crud->getDetail('tbl_pengguna','id_pengguna',$id)->result();
			$data['user'] = reset($arrUser);
			$data['page'] = 'dashboard/user/v_edit_user';
			$this->load->view('templates/template',$data);
		}
	}

	public function update()
	{
		// Primary Key
		$id = $_POST['asd'];

		$dataUpdate = [
			'nama'     => $_POST['nama'],
			'username' => $_POST['username'],
			'password' => $_POST['password'],
			'email'    => $_POST['email'],
			'tlp'      => $_POST['tlp'],
		];

		$result = $this->model_crud->updateData('tbl_pengguna','id_pengguna',$id,$dataUpdate);

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
			$results = $this->model_crud->delData('tbl_pengguna','id_pengguna',$id);

			if ($results > 0) {
				echo json_encode(array('results' => 'success','text' => 'Pengguna Berhasil di hapus'));
			}else{
				echo json_encode(array('results' => 'failed', 'text' => 'Pengguna Gagal di hapus'));
			}
		}
	}
	
	function cari() {
		if (isset($_POST['username'])) {
			$username = $_POST['username'];
			$results = $this->model_user->cari_username($username);
			if ($results === TRUE) {
				$a = '<span style="color:red;">Username sudah digunakan sebelumnya</span>';
				$b = "<script>document.getElementById('alert').value = 0;</script>";
				echo $a, $b;
			} else {
				$a = '<span style="color:green;" id="user">Username dapat digunakan</span>';
				$b = "<script>document.getElementById('alert').value = 1;</script>";
				echo $a, $b;
			}
		} else {
			$a = '<span style="color:red;">Username harus diisi</span>';
			$b = "<script>document.getElementById('alert').value = 0;</script>";
			echo $a, $b;
		}
	}
}
	
