<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('bantuan');
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
		$this->session;
		$this->load->helper('url');
		//kalender
		$this->load->helper('form');
		$data = array(
            'start_day' =>  'sunday',
            'show_next_prev' => TRUE,
            'next_prev_url' => base_url()."index.php/Home/index"
		);
		$this->load->library('calendar', $data);
		$tahun = $this->uri->segment(3);
		$bulan = $this->uri->segment(4);
		$data['kalender'] = $this->calendar->generate($tahun, $bulan);
		//load homepage
		$this->load->view('home', $data);
	}

	public function send_mail() {
        $to_email = $this->input->post('email');

        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'muh.syarifulumam@gmail.com',  // Email gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => '465',
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        //Load email library 
        $this->load->library('email', $config);

        $this->email->from('muh.syarifulumam@gmail.com', 'Your Name');
        $this->email->to($to_email);
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        //Send mail 
        if ($this->email->send())
            $this->session->set_flashdata("email_sent", "Email sent successfully.");
        else
            $this->session->set_flashdata("email_sent", "Error in sending Email.");
    }
	public function profile(){
		$this->session;
		$data['profile'] = $this->bantuan->getUser($_SESSION['username']);
		$this->load->view('profile', $data);
	}
	public function addReview(){
		$data = array(
			'review' => $this->input->post('review'),
			'rating' => $this->input->post('rating')
		);
		$this->bantuan->addReview($data);
		$this->index();
	}
}
