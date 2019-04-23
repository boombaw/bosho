 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {
	
	
	public function check_credential()
	{
		$username = set_value('username');
		$password = set_value('password');
		
		$hasil = $this->db->where('username',$username)
						  ->where('password',$password)
						  ->limit(1)
						  ->get('tb_users');
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
						  ->get('tb_users');
		if($hasil->num_rows() > 0)
		{
			return $hasil->row();
		} else {
			return array();
		}
	}
	
}