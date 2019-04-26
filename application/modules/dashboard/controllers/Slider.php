<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends MX_Controller {
	
	public $table = 'tbl_slider';
	public $primary_key = 'id_slider';

	public function __construct(){
		parent::__construct();
		//$this->load->model('model_user');
	}
	public function index()
	{
		
		
		$s1=$this->model_crud->getDetail($this->table,$this->primary_key,1)->row();
		$s2=$this->model_crud->getDetail($this->table,$this->primary_key,2)->row();
		$s3=$this->model_crud->getDetail($this->table,$this->primary_key,3)->row();
		if(!empty($s1)){
			$data['slider1'] = $s1->image;
		}else{
			$data['slider1'] = '';
		}
		if(!empty($s2)){
			$data['slider2'] = $s2->image;
		}else{
			$data['slider2'] = '';
		}
		if(!empty($s3)){
			$data['slider3'] = $s3->image;
		}else{
			$data['slider3'] = '';
		}
		$data['page'] = 'dashboard/slider/v_slider';
		$this->load->view('templates/template',$data);
	}
	public function imgs()
	{
		$penentu=$this->input->post('penentu');
		
		$this->load->helper('inflector');
		$this->load->helper('security');
		$this->load->library('secure_library');
		
		$datetime=date('YmdHis');
		$tem= $_FILES['files']['name'];
		$depan= pathinfo($tem,PATHINFO_FILENAME);
		$depan1= str_replace(' ','_',$depan);
		$depan2= str_replace('.','_',$depan1);
		$ext= pathinfo($tem,PATHINFO_EXTENSION);
		$filename= $depan2.$datetime.'.'.$ext;
		
		$config['upload_path']   = './unggah/slider/'.$penentu.'/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['file_name']     = $filename;
		$config['max_size']      = '102400';
		$config['max_width']     = '102400';
		$config['max_height']    = '102400';

		$this->load->library('upload', $config);
		/* echo '<pre>';
		print_r($filename);exit(); */
		if (!$this->upload->do_upload('files')) {
			echo '<pre>';
			print_r($this->upload->display_errors());
			echo '<br><a style="color:blue" onclick="history.go(-1)"> << Kembali </a>'; exit();
		} else {

			$this->secure_library->filter_post($_FILES['files']['name'], 'xss_clean');
		/* echo '<pre>';
		print_r($aranfile);exit(); */
			if ($this->secure_library->start_post()) {

				$data = array(
					'image' 		=> xss_clean($filename)
				);
				
				$row = $this->db->where($this->primary_key,$penentu)->get($this->table)->row();
				
					unlink('./unggah/slider/'.$penentu.'/'.$row->image);
					
				
				$this->model_crud->updatedata($this->table,$this->primary_key,$penentu, $data);
				// echo "<script>alert('Sukses');history.go(-1);</script>";

			} else {

				echo 'Pengunggahan mengalami kendala. Mohon Cek kembali file anda. <a style="color:blue" onclick="history.go(-1)"> << Kembali </a>'; exit();

			}
			
		}
	}
}
	
