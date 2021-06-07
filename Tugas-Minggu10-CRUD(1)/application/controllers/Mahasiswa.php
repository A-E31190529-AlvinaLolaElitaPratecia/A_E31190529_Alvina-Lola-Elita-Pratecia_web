<?php
class Mahasiswa extends CI_Controller {
function __construct(){
	parent:: __construct();
	$this->load->library('template');
	$this->load->library('templatee');
	$this->load->model('Mahasiswa_model');
}
public function index(){
$data['user'] = $this->Mahasiswa_model->getAll()->result();
$this->template->views('crud/home_mahasiswa',$data);
}
public function tambah(){
$this->templatee->views('crud/tambah_mahasiswa');
}
public function input(){
	$username = $this->input->post('username');
	$password = $this->input->post('pass');
	$nama = $this->input->post('nama');
	$grup = $this->input->post('grup');

	$data = array(
		'username' => $username,
		'password' => $password,
		'nama' => $nama,
		'grup' => $grup
	);
	$this->Mahasiswa_model->input_data($data, 'tm_user');
	redirect('Mahasiswa/index');
}
public function edit($id) {
		$where = array('id' => $id);
		$data['user'] = $this->Mahasiswa_model->edit_data($where, 'tm_user')->result();
		$this->template->views('crud/edit_mahasiswa', $data);
	}

	public function update() {
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$nama = $this->input->post('nama');
		$grup = $this->input->post('grup');

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'grup' => $grup,
		);

		$where = array(
			'id' => $id
		);
		$this->Mahasiswa_model->update_data($where,$data, 'tm_user');
		redirect('Mahasiswa');
	}

	public function hapus($id) {
		$where = array('id' => $id);
		$this->Mahasiswa_model->hapus_data($where, 'tm_user');
		redirect('Mahasiswa/index');
	}
}
?>