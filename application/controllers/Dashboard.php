<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if(empty($this->session->userdata('Admin'))){
			redirect('Login','refresh');
		}
	}

	public function index()
	{
		$id = $this->session->userdata('Admin')['log_nama'];
		//fungsi untuk menampilkan view user
		$this->db->where('nama', $id);
		$data['isi'] = $this->db->get('tb_user')->row();
		$data['isitabel'] = $this->db->get('tb_suhu')->result();
		//grafik
		$this->load->model('suhu/M_suhu');
		$data['report'] = $this->M_suhu->report();
		//endgrafik
		$data['jumlahuser'] = $this->db->get('tb_user')->num_rows();
		$data['jumlahwajah'] = $this->db->get('tb_wajah')->num_rows();
		$data['home'] = 'admin/home';
		$data['judul'] = 'ServerPHB | Dashboard';
		$data['status'] = 'Dashboard';
		$this->load->view('admin/dashboard', $data);
		
	}

	public function profil()
	{
		$id = $this->session->userdata('Admin')['log_nama'];
		//fungsi untuk menampilkan view user
		$this->db->where('nama', $id);
		$data['isi'] = $this->db->get('tb_user')->row();
		$data['home'] = 'admin/profil';
		$data['judul'] = 'ServerPHB | Profile';
		$data['status'] = 'Profile User';
		$this->load->view('admin/dashboard', $data);
		
	}

	public function contact()
	{
		$id = $this->session->userdata('Admin')['log_nama'];
		//fungsi untuk menampilkan view user
		$this->db->where('nama', $id);
		$data['isi'] = $this->db->get('tb_user')->row();

		$data['home'] = 'admin/contact';
		$data['judul'] = 'ServerPHB | Contact';
		$data['status'] = 'Contact Admin';
		$this->load->view('admin/dashboard', $data, FALSE);
	}
	public function log_login()
	{
		$id = $this->session->userdata('Admin')['log_nama'];
		//fungsi untuk menampilkan view user
		$this->db->where('nama', $id);
		$data['isi'] = $this->db->get('tb_user')->row();
		
		$data['home'] = 'admin/log_login';
		$data['judul'] = 'ServerPHB | Report';
		$data['status'] = 'Report';
		$this->load->view('admin/dashboard', $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */