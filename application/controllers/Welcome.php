<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function api(){
		     //get data dari model
		$this->load->model('users/M_user');
		$isi = $this->M_user->getall();
        //masukkan data kedalam variabel
		$posts = array();
        //lopping data dari database
		foreach ($isi as $hasil)
		{
			$posts[] = array(
				"id"                 =>  $hasil->Id_user,
				"nama"            =>  $hasil->nama,
				"user"      =>  $hasil->username,
				"no_telp"   =>  $hasil->no_hp
				
			);
		}
		
		header('Content-Type: application/json');
		echo json_encode($posts,TRUE);
	}

	public function api_wajah(){
		     //get data dari model
		$this->load->model('face/Face_model');
		$isi = $this->Face_model->getalldata();
        //masukkan data kedalam variabel
		$posts = array();
        //lopping data dari database
		foreach ($isi as $hasil)
		{
			$posts[] = array(
				"id"                 =>  $hasil->Id,
				"nama"            =>  $hasil->nama,
				"unit"      =>  $hasil->unit,
				"x"			=> $hasil->x,
				"y"			=> $hasil->y,
				"z"			=> $hasil->z
				
			);
		}
		
		header('Content-Type: application/json');
		echo json_encode($posts,TRUE);
	}

	public function api_suhu(){
		     //get data dari model
		$isi = $this->db->get('tb_suhu')->result();
        //masukkan data kedalam variabel
		$posts = array();
        //lopping data dari database
		foreach ($isi as $hasil)
		{
			$posts[] = array(
				"id"                 =>  $hasil->id,
				"Suhu"            =>  $hasil->suhu,
				"Kelembaban"      =>  $hasil->kelembaban,
				"Waktu"   =>  $hasil->waktu
				
			);
		}
		
		header('Content-Type: application/json');
		echo json_encode($posts,TRUE);
	}
}
