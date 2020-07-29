<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Face_model extends CI_Model
{
    public function __construct()
	{
		parent::__construct();
		//Do your magic here
    }
    public function tambah($isitabel)
	{
		return $this->db->insert('tb_wajah', $isitabel);
	}
	public function edit($isitabel, $id)
	{
		$this->db->where('Id', $id);
		return $this->db->update('tb_wajah', $isitabel);
    }
    public function getsatudata($id)
	{
		$this->db->where('Id', $id);
		return $this->db->get('tb_wajah')->row();


    }
    public function getalldata()
    {
        // $this->db->order_by('Id', 'asc');
        return $this->db->get('tb_wajah')->result();
    }
    public function getalluser()
    {
        $this->db->order_by('Id_user', 'asc');
        return $this->db->get('tb_user')->result_array();
    }

    public function getuser()
    {
        $this->db->order_by('Id', 'asc');
        return $this->db->get('tb_wajah')->result_array();
    }
    

}