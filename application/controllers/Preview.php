<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Preview extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('bantuan');
	}
	public function index(){
		$this->session;
		$this->load->helper('url');
		// $id = $this->input->post('id');
		// $data['getAts'] = $this->bantuan->getAts($id);
		$data['getAts'] = $this->bantuan->getAts();
		$this->load->view('preview', $data);
		
	}
}
