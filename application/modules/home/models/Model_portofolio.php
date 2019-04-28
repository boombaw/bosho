<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_portofolio extends CI_Model {

	function getpp($tbl,$key,$sort)
	{
		return $this->db->order_by($key, $sort)->limit(6)->get($tbl)->result();
	}


}
/* End of file Crud_model.php */
/* Location: ./application/models/Crud_model.php */