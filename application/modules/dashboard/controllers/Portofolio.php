<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio extends MX_Controller {
	
	public $table = 'tbl_portofolio';
	public $primary_key = 'id_portofolio';
	public $path_portofolio = 'dashboard/portofolio/';

	public function __construct(){
		parent::__construct();
		//$this->load->model('model_user');
	}
	public function index()
	{
		$data['portofolio']=$this->model_crud->getData($this->table,$this->primary_key,'desc');
		$data['page'] = $this->path_portofolio.'v_portofolio';
		$this->load->view('templates/template',$data);
	}
	public function tambah()
	{
		$data['page'] = $this->path_portofolio.'v_add_portofolio';
		$this->load->view('templates/template',$data);
	}
	public function add()
	{
		$this->load->helper('inflector');
		$this->load->helper('security');
		$this->load->library('secure_library');

		$datetime = date('YmdHis');
		$tem      = $_FILES['thumbport']['name'];
		$depan    = pathinfo($tem,PATHINFO_FILENAME);
		$depan1   = str_replace(' ','_',$depan);
		$depan2   = str_replace('.','_',$depan1);
		$ext      = pathinfo($tem,PATHINFO_EXTENSION);
		$filename = $depan2.'_'.$datetime.'.'.$ext;
		
		$config['upload_path']   = './unggah/portofolio/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['file_name']     = $filename;
		$config['max_size']      = '102400';
		$config['max_width']     = '102400';
		$config['max_height']    = '102400';

		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('thumbport')) {
			echo '<pre>';
			print_r($this->upload->display_errors());
			echo '<br><a style="color:blue" onclick="history.go(-1)"> << Kembali </a>'; exit();
		} else {

			$this->secure_library->filter_post($_FILES['thumbport']['name'], 'xss_clean');
		
			if ($this->secure_library->start_post()) {

				$data = array(
					'image' 		=> xss_clean($filename)
				);
				$data = array(
					'judul'			=> $this->input->post('judul'),
					'isi'			=> $this->input->post('isi'),
					'thumbnail'		=>  xss_clean($filename),
					'dt_portofolio'	=> date("Y-m-d H:i:s"),
					'tag'			=> $this->input->post('tag'),
					'metad'			=> $this->input->post('metad')
				);
				
				
				$this->model_crud->insertdata($this->table,$data);
				$lastid = $this->db->insert_id();
				$files=$_FILES['userfile'];
				$count = count($_FILES['userfile']['name']);
		
				if ($lastid) {
					for($i=0; $i<$count; $i++){
						$datetime=date('YmdHis');
						$urut=$i+1;
						$sv_name = $datetime.'_('.$urut.')_'.$files['name'][$i];
						$save_name= str_replace(" ", "_", $sv_name);
						
						$_FILES['userfile']['name']= $files['name'][$i];
						$_FILES['userfile']['type']= $files['type'][$i];
						$_FILES['userfile']['tmp_name']= $files['tmp_name'][$i];
						$_FILES['userfile']['error']= $files['error'][$i];
						$_FILES['userfile']['size']= $files['size'][$i];
						
						$config['upload_path']   = './unggah/portofolio/';
						$config['file_name']      = $save_name;
						$config['max_size']      = '0';
						$config['allowed_types'] = 'gif|jpg|png';
						$this->upload->initialize($config);
						
						if($this->upload->do_upload('userfile')){
							
							$data = array(
											'id_pp'		=> $lastid,
											'foto'		=> $save_name
											);
							
							$this->model_crud->insertdata('tbl_thumbporto',$data);  		
						}else{
							echo "<pre>";
							print_r($this->upload->display_errors());
						}
					}
				}

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
		$tem= $_FILES['thumbport']['name'];
		$depan= pathinfo($tem,PATHINFO_FILENAME);
		$depan1= str_replace(' ','_',$depan);
		$depan2= str_replace('.','_',$depan1);
		$ext= pathinfo($tem,PATHINFO_EXTENSION);
		$filename= $depan2.'_'.$datetime.'.'.$ext;
		
		$config['upload_path']   = './unggah/portofolio/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['file_name']     = $filename;
		$config['max_size']      = '102400';
		$config['max_width']     = '102400';
		$config['max_height']    = '102400';

		$this->load->library('upload', $config);
		$id = $this->input->post('asd');
		if (!$this->upload->do_upload('thumbport')) {
			echo '<pre>';
			print_r($this->upload->display_errors());
			echo '<br><a style="color:blue" onclick="history.go(-1)"> << Kembali </a>'; exit();
		} else {
			
			$this->secure_library->filter_post($_FILES['thumbport']['name'], 'xss_clean');
		
			if ($this->secure_library->start_post()) {

				$data = array(
					'image' 		=> xss_clean($filename)
				);
				$data = array(
					'judul'			=> $this->input->post('judul'),
					'isi'			=> $this->input->post('isi'),
					'thumbnail'		=>  xss_clean($filename),
					'dt_portofolio'	=> date("Y-m-d H:i:s"),
					'tag'			=> $this->input->post('tag'),
					'metad'			=> $this->input->post('metad')
				);
				
				
				$this->model_crud->updateData('tbl_portofolio','id_portofolio',$id,$data);
				
				$files=$_FILES['userfile'];
				$count = count($_FILES['userfile']['name']);
		
				for($i=0; $i<$count; $i++){
					$datetime=date('YmdHis');
					$urut=$i+1;
					$sv_name = $datetime.'_('.$urut.')_'.$files['name'][$i];
					$save_name= str_replace(" ", "_", $sv_name);
					
					$_FILES['userfile']['name']= $files['name'][$i];
					$_FILES['userfile']['type']= $files['type'][$i];
					$_FILES['userfile']['tmp_name']= $files['tmp_name'][$i];
					$_FILES['userfile']['error']= $files['error'][$i];
					$_FILES['userfile']['size']= $files['size'][$i];
					
					$config['upload_path']   = './unggah/portofolio/';
					$config['file_name']      = $save_name;
					$config['max_size']      = '0';
					$config['allowed_types'] = 'gif|jpg|png';
					$this->upload->initialize($config);
					
					if($this->upload->do_upload('userfile')){
						
						$data = array(
										'id_pp'		=> $id,
										'foto'		=> $save_name
										);
						
						$this->model_crud->insertdata('tbl_thumbporto',$data);  		
					}else{
						echo "<pre>";
						print_r($this->upload->display_errors());
					}
				}

			} else {

				echo 'Pengunggahan mengalami kendala. Mohon Cek kembali file anda. <a style="color:blue" onclick="history.go(-1)"> << Kembali </a>'; exit();

			}	
		}
	}

	public function edit($id='')
	{

		$portofolio = $this->model_crud->getDetail('tbl_portofolio','id_portofolio',$id)->result();
		$data['portofolio'] = reset($portofolio);

		$thumbport = $this->model_crud->getDetail('tbl_thumbporto','id_pp',$portofolio[0]->id_portofolio)->result();
		$tport = '';
		foreach($thumbport as $row){
			$tport .=	'<center>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="thumbnail">
							<a href="'.base_url().'unggah/portofolio/'.$row->foto.'">
								<img class="img-responsive thumbnail" src="'.base_url().'unggah/portofolio/'.$row->foto.'" style="max-height:90px;margin-bottom:5px;">
							</a>
							<button type="button" class="btn btn-xs bg-red waves-effect waves-light rem-image-port" data-attr="'.$row->foto.'" data-pid = "'.$row->id_pp.'" style="margin-bottom:15px;">Remove Image</button>
						</div>
					</div>
					</center>';
		} 
		$data['thumb'] = $tport;
		$data['page'] = $this->path_portofolio.'v_edit_portofolio';
		
		$this->load->view('templates/template',$data);
	}

	public function delete($value='')
	{
		if (@$_POST['asd']) {
			$id = $_POST['asd'];
			$results = $this->model_crud->delData($this->table,$this->primary_key,$id);

			if ($results) {
				$results = $this->model_crud->delData('tbl_thumbporto','id_pp',$id);
				if ($results) {
					echo json_encode(array('results' => 'success','text' => 'Portofolio Berhasil di hapus'));
				}else{

					echo json_encode(array('results' => 'failed', 'text' => 'Portofolio Gagal di hapus'));
				}
			}else{
				echo json_encode(array('results' => 'failed', 'text' => 'Portofolio Gagal di hapus'));
			}
		}
	}

	function lihat($id)
	{
		$portofolio = $this->model_crud->getDetail($this->table,$this->primary_key,$id)->row();
		
		$thumbport = $this->model_crud->getDetail('tbl_thumbporto','id_pp',$portofolio->id_portofolio)->result();
		$tport = '';
		foreach($thumbport as $row){
			$tport .=	'<center>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="thumbnail">
							<a href="'.base_url().'unggah/portofolio/'.$row->foto.'">
								<img class="img-responsive thumbnail" src="'.base_url().'unggah/portofolio/'.$row->foto.'" style="max-height:90px;margin-bottom:5px;">
							</a>
						</div>
					</div>
					</center>';
		} 
		$data = [
			'portofolio' => $portofolio,
			'thumb' => $tport,
		];

		$this->load->view($this->path_portofolio.'v_detail', $data);
	}	
	
	// Thumbnail Portofolio
	public function tport(){
		$portofolio = $this->model_crud->getDetail('tbl_thumbporto','id_pp',$this->input->post('token'));

		$tport = '';
		foreach($portofolio->result() as $row){
			$tport .=	'<center>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="thumbnail">
							<a href="'.base_url().'unggah/portofolio/'.$row->foto.'">
								<img class="img-responsive thumbnail" src="'.base_url().'unggah/portofolio/'.$row->foto.'" style="max-height:90px;margin-bottom:5px;">
							</a>
							<button type="button" class="btn btn-xs bg-red waves-effect waves-light rem-image-port" data-attr="'.$row->id_pp.'" style="margin-bottom:15px;">Remove Image</button>
						</div>
					</div>
					</center>';
		} 

		echo $tport;
	}

	//Untuk menghapus foto thumbnail portofolio
	function remove_foto_g(){

		//Ambil token foto
		$token=$this->input->post('token');

		
		$foto=$this->db->get_where('tbl_thumbporto',array('foto'=>$token));

		if($foto->num_rows()>0){
			$hasil=$foto->row();
			$nama_foto=$hasil->foto;
			if(file_exists($file=FCPATH.'/unggah/portofolio/'.$nama_foto)){
				unlink($file);
			}
			$this->db->delete('tbl_thumbporto',array('foto'=>$token));

		}


		echo "{}";
	}	
}
	
