<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class M_Bidang extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function get(){
		$query = $this->db->query('SELECT * FROM tb_user');
        return $query->result();
	}
}
?>