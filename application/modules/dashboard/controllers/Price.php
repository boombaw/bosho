<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price extends MX_Controller {
	
public function __construct(){
		parent::__construct();
		//$this->load->model('model_user');
	}
	public function index()
	{
		$s1=$this->model_crud->getDetail('tbl_price','id_price',1)->row();
		$s2=$this->model_crud->getDetail('tbl_price','id_price',2)->row();
		$s3=$this->model_crud->getDetail('tbl_price','id_price',3)->row();
		if(!empty($s1)){
			$data['price1'] = $s1->image;
		}else{
			$data['price1'] = '';
		}
		if(!empty($s2)){
			$data['price2'] = $s2->image;
		}else{
			$data['price2'] = '';
		}
		if(!empty($s3)){
			$data['price3'] = $s3->image;
		}else{
			$data['price3'] = '';
		}
		$data['page'] = 'dashboard/price/v_price';
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
		
		$config['upload_path']   = './unggah/price/'.$penentu.'/';
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
				
				$row = $this->db->where('id_price',$penentu)->get('tbl_price')->row();
				
					unlink('./unggah/price/'.$penentu.'/'.$row->image);
					
				
				$this->model_crud->updatedata('tbl_price','id_price',$penentu, $data);
				echo "<script>alert('Sukses');history.go(-1);</script>";

			} else {

				echo 'Pengunggahan mengalami kendala. Mohon Cek kembali file anda. <a style="color:blue" onclick="history.go(-1)"> << Kembali </a>'; exit();

			}
			
		}
	}
}
	
