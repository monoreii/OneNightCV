<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Autentikasi extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('bantuan');
	}
	public function index(){
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
			redirect('Ats');
		} else{
			$data['error'] = true;
			$this->load->view('login');
		}
	}
	public function logout(){
		$_SESSION['login'] = false;
		session_destroy();
		redirect('Home');
	}
}
