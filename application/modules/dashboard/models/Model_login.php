 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {
	
	public $table = 'tbl_pengguna';

	public function check_credential($username,$password)
	{		
		$hasil = $this->db->where('username',$username)
						  ->where('password',$password)
						  ->limit(1)
						  ->get($this->table);
		if($hasil->num_rows() > 0)
		{
			return $hasil->row();
		} else {
			return array();
		}
	}
	public function resession()
	{
		
		$hasil = $this->db->where('id_users',$this->session->userdata('id_users'))
						  ->limit(1)
						  ->get($this->table);
		if($hasil->num_rows() > 0)
		{
			return $hasil->row();
		} else {
			return array();
		}
	}
	
}