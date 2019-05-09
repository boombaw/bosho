<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signature extends MX_Controller {

	public function index()
	{
		$data['company']=$this->model_crud->getDetail('tbl_signature','id_c',1)->row_array();
		$data['page'] = 'dashboard/signature/v_signature';
		$this->load->view('templates/template',$data);			
	}
	public function edit()
	{
		$data = array(
			'nama_company'	=> $this->input->post('nama_company'),
			'singkatan'		=> $this->input->post('singkatan')
			);
		//var_dump($data);exit();
		$this->model_crud->updatedata('tbl_signature','id_c','1',$data);
		echo "<script>alert('Berhasil');
		document.location.href='".base_url()."dashboard/signature/';</script>"; 
	}
	
	public function imgs()
	{

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
		
		
		$config['upload_path']   = './unggah/logo/';
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
					'logo' 		=> xss_clean($filename)
				);
				
				$row = $this->db->where('id_c',1)->get('tbl_signature')->row();
				
					unlink('./unggah/logo/'.$row->logo);
					
				
				$this->model_crud->updatedata('tbl_signature','id_c',1, $data);
				echo "<script>alert('Sukses');history.go(-1);</script>";

			} else {

				echo 'Pengunggahan mengalami kendala. Mohon Cek kembali file anda. <a style="color:blue" onclick="history.go(-1)"> << Kembali </a>'; exit();

			}
			
		}
	}
}
	
