<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends MX_Controller {
	
public function __construct(){
		parent::__construct();
		//$this->load->model('model_user');
	}
	public function index()
	{
		$data['artikel']=$this->model_crud->getData('tbl_artikel','id_artikel','desc');
		$data['page'] = 'dashboard/artikel/v_artikel';
		$this->load->view('templates/template',$data);		
	}
	public function tambah()
	{
		$data['page'] = 'dashboard/artikel/v_add_artikel';
		$this->load->view('templates/template',$data);
		
	}
	public function add()
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
		$filename= $depan2.'_'.$datetime.'.'.$ext;
		
		$config['upload_path']   = './unggah/artikel/';
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
				$data = array(
					'judul'			=> $this->input->post('judul'),
					'isi'			=> $this->input->post('isi'),
					'thumbnail'		=>  xss_clean($filename),
					'dt_artikel'	=> date("Y-m-d H:i:s"),
					'tag'			=> $this->input->post('tag'),
					'metad'			=> $this->input->post('metad')
				);
				
				
				$this->model_crud->insertdata('tbl_artikel',$data);
				
				echo "<script>alert('Sukses');history.go(-1);</script>";

			} else {

				echo 'Pengunggahan mengalami kendala. Mohon Cek kembali file anda. <a style="color:blue" onclick="history.go(-1)"> << Kembali </a>'; exit();

			}
			
		}
		
		
		//var_dump($data);exit();
	}

	public function update()
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
		$filename= $depan2.'_'.$datetime.'.'.$ext;
		
		$config['upload_path']   = './unggah/artikel/';
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
			$id = $this->input->post('asd');
			$this->secure_library->filter_post($_FILES['files']['name'], 'xss_clean');
		/* echo '<pre>';
		print_r($aranfile);exit(); */
			if ($this->secure_library->start_post()) {

				$data = array(
					'image' 		=> xss_clean($filename)
				);
				$data = array(
					'judul'			=> $this->input->post('judul'),
					'isi'			=> $this->input->post('isi'),
					'thumbnail'		=>  xss_clean($filename),
					'dt_artikel'	=> date("Y-m-d H:i:s"),
					'tag'			=> $this->input->post('tag'),
					'metad'			=> $this->input->post('metad')
				);
				
				
				$this->model_crud->updateData('tbl_artikel','id_artikel',$id,$data);
				
				echo "<script>alert('Sukses');history.go(-1);</script>";

			} else {

				echo 'Pengunggahan mengalami kendala. Mohon Cek kembali file anda. <a style="color:blue" onclick="history.go(-1)"> << Kembali </a>'; exit();

			}
			
		}
		
		
		//var_dump($data);exit();
	}

	public function edit($id='')
	{
		$artikel = $this->model_crud->getDetail('tbl_artikel','id_artikel',$id)->result();
		$data['artikel'] = reset($artikel);
		$data['page'] = 'dashboard/artikel/v_edit_artikel';
		$this->load->view('templates/template',$data);
	}

	public function delete($value='')
	{
		if (@$_POST['asd']) {
			$id = $_POST['asd'];
			$results = $this->model_crud->delData('tbl_artikel','id_artikel',$id);

			if ($results > 0) {
				echo json_encode(array('results' => 'success','text' => 'Artikel Berhasil di hapus'));
			}else{
				echo json_encode(array('results' => 'failed', 'text' => 'Artikel Gagal di hapus'));
			}
		}
	}

	function lihat($id)
	{
		$data['artikel'] = $this->model_crud->getDetail('tbl_artikel','id_artikel',$id)->row();
		$this->load->view('dashboard/artikel/v_detail', $data);
	}	
	
}
	
