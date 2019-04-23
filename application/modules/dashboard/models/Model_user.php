 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {
	
	function cari_username($username) {
		$this->db->where('username', $username);
		$this->db->from('tbl_pengguna');
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
}