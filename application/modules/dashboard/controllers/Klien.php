<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klien extends MX_Controller {
	


	public function __construct(){
		parent::__construct();
		//$this->load->model('model_user');
	}
	public function index()
	{
		$login = $this->session->userdata('is_login');

		if ($login) {
			$data['page'] = 'dashboard/klien/v_klien';
			$this->load->view('templates/template',$data);			
		}else{
			redirect(base_url('login'),'refresh');
		}	
	}
	public function index1(){
		$klien = $this->model_crud->getData('tbl_galeri','id_galeri','desc');

		foreach($klien as $row){
			echo	'<center>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="thumbnail">
							<a href="'.base_url().'unggah/klien/'.$row->image.'">
								<img class="img-responsive thumbnail" src="'.base_url().'unggah/klien/'.$row->image.'" style="max-height:90px;margin-bottom:5px;">
							</a>
							<button type="button" class="btn btn-xs bg-red waves-effect waves-light rem-image" data-attr="'.$row->token.'" style="margin-bottom:15px;">Remove Image</button>
						</div>
					</div>
					</center>';
		} 
	}
	//Untuk proses upload foto
	function proses_upload(){

        $config['upload_path']   = FCPATH.'/unggah/klien/';
        $config['allowed_types'] = 'gif|jpg|png|ico';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
        	$token=$this->input->post('token_foto');
        	$nama=$this->upload->data('file_name');
        	$this->db->insert('tbl_galeri',array('image'=>$nama,'token'=>$token));
        }


	}

	//Untuk menghapus foto
	function remove_foto(){

		//Ambil token foto
		$token=$this->input->post('token');

		
		$foto=$this->db->get_where('tbl_galeri',array('token'=>$token));


		if($foto->num_rows()>0){
			$hasil=$foto->row();
			$nama_foto=$hasil->image;
			if(file_exists($file=FCPATH.'/unggah/klien/'.$nama_foto)){
				unlink($file);
			}
			$this->db->delete('tbl_galeri',array('token'=>$token));

		}


		echo "{}";
	}
}
	
