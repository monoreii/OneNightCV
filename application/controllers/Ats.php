<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ats extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('bantuan');
	}
	public function index(){
		$this->load->helper('url');
		$this->load->view('Ats');
	}
	public function add_ats($data_ats = 0){

		$gambar = $_FILES['gambar'];
		$config['upload_path']          = './image/';
		$config['allowed_types']        = 'jpg|png';
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambar'))
		{
			echo "Gagal Menambahkan Gambar!";
		}
		else
		{
			$gambar = $this->upload->data('file_name');
		}

		$data_ats = array(
			'id'=>$this->input->post('id'),
			'nama'=>$this->input->post('nama'),
			'no_hp'=>$this->input->post('no_hp'),
			'pekerjaan'=>$this->input->post('pekerjaan'),
			'email'=>$this->input->post('email'),
			'link'=>$this->input->post('link'),
			'alamat'=>$this->input->post('alamat'),
			'kota'=>$this->input->post('kota'),
			'pendidikan'=>$this->input->post('pendidikan'),
			'keahlian'=>$this->input->post('keahlian'),
			'keahlian1'=>$this->input->post('keahlian1'),
			'keahlian2'=>$this->input->post('keahlian2'),
			'pengalaman'=>$this->input->post('pengalaman'),
			'pengalaman1'=>$this->input->post('pengalaman1'),
			'pengalaman2'=>$this->input->post('pengalaman2'),
			'bahasa'=>$this->input->post('bahasa'),
			'bahasa1'=>$this->input->post('bahasa1'),
			'bahasa2'=>$this->input->post('bahasa2'),
			'sertifikat'=>$this->input->post('sertifikat'),
			'sertifikat1'=>$this->input->post('sertifikat1'),
			'sertifikat2'=>$this->input->post('sertifikat2'),
			'tanggalMulai'=>$this->input->post('tanggalMulai'),
			'tanggalMulai1'=>$this->input->post('tanggalMulai1'),
			'tanggalMulai2'=>$this->input->post('tanggalMulai2'),
			'tanggalExpired'=>$this->input->post('tanggalExpired'),
			'tanggalExpired1'=>$this->input->post('tanggalExpired1'),
			'tanggalExpired2'=>$this->input->post('tanggalExpired2'),
			'ringkasan'=>$this->input->post('ringkasan'),
			'gambar'=>$gambar
		);
		
		$this->bantuan->add_ats($data_ats);
		$this->load->view('ats');
	}
}
