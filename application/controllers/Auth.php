<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller{
	public function index(){
		$this->load->helper('url');
		$this->load->view('register');
	}

	public function register(){
		$check = $this->bantuan->register();
		if($check) {
			$this->login();
		} else{
			$this->index();
		}
	}
	public function login(){
		
	}
}
