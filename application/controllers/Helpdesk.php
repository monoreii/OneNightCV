<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helpdesk extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('bantuan');
	}
	public function index()
	{
		$this->session;
		$this->load->helper('url');

		$data = array(
            'start_day' =>  'sunday',
            'show_next_prev' => TRUE,
            'next_prev_url' => base_url()."index.php/Helpdesk/index"
		);
		$this->load->library('calendar', $data);
		$tahun = $this->uri->segment(3);
		$bulan = $this->uri->segment(4);
		$data['kalender'] = $this->calendar->generate($tahun, $bulan);
		$this->load->library('calendar');

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
	public function edit_message(){
		$id = $this->input->post('id');
		$data = array(
			'Subject'=>$this->input->post('subject'),
			'Message'=>$this->input->post('message')
		);
		$this->bantuan->edit_message($id, $data);
		$this->index();
	}

	public function delete_message($id){
		$this->bantuan->delete_message($id);
		$this->index();
	}
	public function helpdesk_user(){
		$this->session;
		$data = array(
            'start_day' =>  'sunday',
            'show_next_prev' => TRUE,
            'next_prev_url' => base_url()."index.php/Helpdesk/index"
		);
		$this->load->library('calendar', $data);
		$tahun = $this->uri->segment(3);
		$bulan = $this->uri->segment(4);
		$data['kalender'] = $this->calendar->generate($tahun, $bulan);
		$this->load->library('calendar');
		$data['message'] = $this->bantuan->getMessage();
		$this->load->view('helpdesk-user', $data);
	}
}
