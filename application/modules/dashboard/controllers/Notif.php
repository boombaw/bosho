<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notif extends MX_Controller {
	
	public $table = 'tbl_form';
	public $primary_key = 'id_form';

	public function __construct(){
		parent::__construct();
		//$this->load->model('model_user');
	}
	public function index()
	{
		$notif            = $this->model_crud->getData($this->table,$this->primary_key,'desc');
		$data['all_notif']    = $notif;
		$data['page']      = 'dashboard/notif/v_notif';
		$this->load->view('templates/template',$data);		
	}

	public function detail($id = NULL)
	{
		if (!is_null($id)) {
			$message = $this->model_crud->getDetail($this->table, $this->primary_key, $id)->result();
			$data['detail_notif']    = $message;
			$data['page']      = 'dashboard/notif/v_detail';
			$this->load->view('templates/template',$data);	
		}else{
			echo '<a style="color:blue" onclick="history.go(-1)"> << Kembali </a>'; exit();
		}
	}

	public function update()
	{
		$id = $_POST['id'];

		$data = [
			'read' => '0'
		];

		$res = $this->model_crud->updateData($this->table,$this->primary_key,$id,$data);
	}
	
}
	
