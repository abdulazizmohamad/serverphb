<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Face extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if(empty($this->session->userdata('Admin'))){
			redirect('Login','refresh');
		}
		$this->load->model('Face_model');
	}

	public function index()
	{
		$data['isi'] = $this->db->get('tb_wajah')->result(); 


		//fungsi untuk melihat view tabel wajah
		$data['home'] = 'admin/tabel_data_wajah';
		$data['judul'] = 'ServerPHB | Tabel Data Wajah';
		$data['status'] = 'Tabel Data Wajah';

		$this->load->view('admin/dashboard', $data);

	}

	public function form_input_wajah()
	{
		$id = $this->session->userdata('Admin')['log_nama'];
		//fungsi untuk menampilkan view user
		$this->db->where('nama', $id);
		$data['isi'] = $this->db->get('tb_user')->row();

		//fungsi untuk melihat view form input data wajah
		$data['namauser'] = $this->Face_model->getalluser();
		$data['home'] = 'admin/form_wajah';
		$data['judul'] = 'ServerPHB | Form Input data Wajah';
		$data['status'] = 'Form Input Data Wajah';

		$this->load->view('admin/dashboard', $data, FALSE);
		
	}

	public function addfacepost()
	{
		//fungsi untuk mengepost hasil input data wajah
		$n = $this->input->post('namauser');
		$u = $this->input->post('unit');
		$t = $this->input->post('tanggal');
		$x = $this->input->post('nilaix');
		$y = $this->input->post('nilaiy');
		$z = $this->input->post('nilaiz');
		$data = array('nama' => $n ,
					  'unit' => $u,
					  'tanggal' => $t,
				      'x' => $x,
				      'y' => $y,
				      'z' => $z);
	$insert = $this->db->insert('tb_wajah', $data);
	echo ($insert) ? 'sukses input data wajah' : 'gagal' ;


	//setelah selesai sukses langsung kembali ke view input data user
	redirect('face/form_input_wajah','refresh');
	}

	public function edit_wajah($id)
	{
		$id = $this->session->userdata('Admin')['log_nama'];
		//fungsi untuk menampilkan view user
		$this->db->where('nama', $id);
		$data['isi'] = $this->db->get('tb_user')->row();

		//fungsi untuk edit data
		$data['namauser'] = $this->Face_model->getalluser();
		$data['isitabel'] = $this->db->get('tb_wajah')->row();
		$data['home'] = 'admin/edit_wajah';
		$data['judul'] = 'ServerPHB | Tabel Data Wajah';
		$data['status'] = 'Tabel Data Wajah';
		$this->load->view('admin/dashboard', $data, FALSE);
	}

	public function editfacepost($id)
	{
		//fungsi untuk mengepost hasil edit data
		$n = $this->input->post('namauser');
		$u = $this->input->post('unit');
		$t = $this->input->post('tanggal');
		$x = $this->input->post('nilaix');
		$y = $this->input->post('nilaiy');
		$z = $this->input->post('nilaiz');
		$data = array('nama' => $n ,
					  'unit' => $u,
					  'tanggal' => $t,
				      'x' => $x,
				      'y' => $y,
				      'z' => $z);
		$this->db->where('Id', $id);
		$update =	$this->db->update('tb_wajah', $data);
		echo ($update) ? 'Sukses Edit' : 'Gagal Edit' ;

		//setelah selesai sukses langsung kembali ke view tabel user
		redirect('face/tabel_wajah','refresh');
	}

	public function delete_wajah($id)
	{
		//fungsi untuk menghapus data di dalam tabel user
		$this->db->where('Id', $id);
		$delete =	$this->db->delete('tb_wajah');
		echo ($delete) ? 'sukses' : 'gagal' ;

		//setelah selesai sukses langsung kembali ke view tabel user
		redirect('face/tabel_wajah','refresh');
	}

	public function tabel_wajah()
	{
		$id = $this->session->userdata('Admin')['log_nama'];
		//fungsi untuk menampilkan view user
		$this->db->where('nama', $id);
		$data['isi'] = $this->db->get('tb_user')->row();

		$data['isitabel'] = $this->db->get('tb_wajah')->result(); 


		//fungsi untuk melihat view tabel wajah
		$data['home'] = 'admin/tabel_data_wajah';
		$data['judul'] = 'ServerPHB | Tabel Data Wajah';
		$data['status'] = 'Tabel Data Wajah';
		$this->load->view('admin/dashboard', $data);
	}

	function crul_wajah(){
		$ch = curl_init(); 
// $url = "https://alumniphb.net/Welcome/link";
		$url = base_url('Welcome/api_wajah');
    // set url o
		curl_setopt($ch, CURLOPT_URL, $url);
    // return the transfer as a string 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    // $output contains the output string 
		$output = curl_exec($ch); 
    // tutup curl 
		curl_close($ch);
		
		$id = $this->session->userdata('Admin')['log_nama'];
		//fungsi untuk menampilkan view user
		$this->db->where('nama', $id);
		$data['isi'] = $this->db->get('tb_user')->row();

		
    // menampilkan hasil curl
		$data['crul'] =  json_decode($output);
		$data['home'] = 'admin/v_tabelcrul_wajah';
		$data['judul'] = 'ServerPHB | Form User';
		$data['status'] = 'Crul data wajah';
		$this->load->view('admin/dashboard', $data, FALSE);
	}
}

/* End of file Wajah.php */
/* Location: ./application/modules/wajah/controllers/Wajah.php */