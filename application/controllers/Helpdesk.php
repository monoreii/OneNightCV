<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helpdesk extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('bantuan');
	}
	public function index($tahun = NULL, $bulan = NULL)
	{
		$this->load->helper('url');
		$this->load->library('calendar');
		$data['kalender'] = $this->calendar->generate($tahun, $bulan);
		$data['message'] = $this->bantuan->getMessage();
		//load homepage
		$this->load->view('helpdesk', $data);
		// load view yang ada diindex pake yang login admin
		
	}
	public function message(){
		$data_message = $this->helpdesk->getMessage();
	}
	public function add_message(){
		$data = array(
			'id'=>$this->input->post('id'),
			'Subject'=>$this->input->post('subject'),
			'Message'=>$this->input->post('message'),
		);
		$this->bantuan->add_message($data);
		$this->index();
	}
	public function edit_message($id){
		$data = array(
			'Subject'=>$this->input->post('subject'),
			'Message'=>$this->input->post('message')
		);
		$this->bantuan->edit_message($id, $data);
		$this->index();
	}

	// public function getOneMessage($id){
	// 	$res = $this->bantuan->getOneMessage($id);
	// 	$data = array(
	// 		'datamsg' => $res
	// 	);
	// 	$this->load->view()
	// }

	public function delete_message($id){
		$this->bantuan->delete_message($id);
		$this->index();
	}
}
