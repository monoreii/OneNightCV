<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$data = array(
			'show_next_prev' => TRUE,
			'next_prev_url' => 'http://localhost/ats_maker/index.php/home'
		);
		$this->load->library('calendar', $data);
		$tahun = $this->uri->segment(3);
		$bulan = $this->uri->segment(4);
		$data['kalender'] = $this->calendar->generate($tahun, $bulan);
		//load homepage
		$this->load->view('home', $data);
	}
}
