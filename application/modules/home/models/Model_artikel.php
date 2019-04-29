<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_artikel extends CI_Model {

	function getartikel($tbl,$key,$sort)
	{
		return $this->db->order_by($key, $sort)->limit(6)->get($tbl)->result();
	}
	function getartikel2($tbl,$key,$sort)
	{
		return $this->db->order_by($key, $sort)->limit(3)->get($tbl)->result();
	}


}
/* End of file Crud_model.php */
/* Location: ./application/models/Crud_model.php */