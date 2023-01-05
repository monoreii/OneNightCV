<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Autentikasi extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('bantuan');
	}
	public function index(){
		$this->session;
		$this->load->helper('url');
		$this->load->view('register');
	}

	public function register(){		
		$check = $this->bantuan->register();
		if($check) {
			$this->login();
		} else{
			$this->load->view('register');
		}
	}
	public function login(){
		$this->load->view('login');
		$check = $this->bantuan->login();
		if($check){
			$_SESSION['login'] = true;
			if($_SESSION['username'] == 'admin'){
				$_SESSION['admin'] == true;
			} else{
				$_SESSION['admin'] == false;
			}
			redirect('home');
		} else{
			$data['error'] = true;
			// $this->load->view('login');
		}
	}

	// public function getUser(){
	// 	$this->db->select('*');
	// 	$this->db->from('user');
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }
	public function editProfile(){
		$id = $_SESSION['id'];
		$data = array(
			'nama_lengkap' =>$this->input->post('nama_lengkap'),
			'username' =>$this->input->post('username'),
			'email' =>$this->input->post('email'),
			'password' =>$this->input->post('password'),
			'con_password' =>$this->input->post('con_password'),
			'no_hp' =>$this->input->post('no_hp')
		);
		$this->bantuan->editProfile($id, $data);
		$_SESSION['username'] = $this->input->post('username');
		redirect('Home/profile');
	}
	public function logout(){
		$_SESSION['login'] = false;
		session_destroy();
		redirect('Home');
	}
}
