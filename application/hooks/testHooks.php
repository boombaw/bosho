<?php 

/**
* 
*/
class ReplaceDB 
{
	
	function replaceDBName($value='')
	{
		 // load the instance
		$CI =& get_instance();

		// replace the tokens
		$CI->load->library('database');
		$CI->load->database('hris');
		
		$contents = str_replace("[DATETIME]", standard_date(), $contents);

		// set the output
		echo $contents;
		return;
	}
}