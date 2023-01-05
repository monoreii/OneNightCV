<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bantuan extends CI_Model{

	public function getMessage(){
		$this->db->select('*');
		$this->db->from('pesan');
		$query = $this->db->get();
		return $query->result();
	}
	public function getOneMessage($id){
		$this->db->where('id', $id);
		$query = $this->db->get('pesan');
		return $query->row();
	}
	public function add_message($data){
		$this->db->insert('pesan', $data);
	}
	public function delete_message($id){
		$this->db->where('id', $id);
		$this->db->delete('pesan');
	}
	public function edit_message($id, $data){
		$this->db->where('id', $id);
		$this->db->update('pesan', $data);
	}

	public function add_ats($data_ats){
		$this->db->insert('ats_form', $data_ats);
	}
	public function getAts(){
		$query = $this->db->get('ats_form');
		return $query->result();
	}

	public function register(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$con_password = $this->input->post('con_password');
		
		//checking
		$cekUsername = $this->db->query("SELECT username FROM user WHERE username = '$username'");
		$cekEmail = $this->db->query("SELECT email FROM user WHERE email = '$email'");
		$checkRowUsername = $cekUsername->num_rows();
		$checkRowEmail = $cekEmail->num_rows();

		if($checkRowUsername == 1 || $checkRowEmail == 1){
			echo "<script>window.alert('Username / Email sudah terdaftar!')</script>";
			return false;
		}
		if($password != $con_password){
			echo "<script>window.alert('Password Tidak sesuai!')</script>";
			return false;
		}
		$data = array(
			'username' => $username,
			'nama_lengkap'=> $this->input->post('nama_lengkap'),
			'email' => $email,
			'password' => $password,
			'con_password' => $con_password,
			'no_hp'=> $this->input->post('no_hp')
		);
		$this->db->insert('user', $data);
		return true;
	}
	
	public function getUser($username){
		$this->db->where('username', $username);
		$query = $this->db->get('user');
		return $query->row();
	}
	public function editProfile($id, $data){
		$this->db->where('id', $id);
		$this->db->update('user', $data);
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->db->where('username', $username);
		$checkUser = $this->db->get('user');
		if($checkUser->num_rows() == 1){ // check apakah ada baris
			$akun = $checkUser->row(); // get data 1 row
			if($akun->password == $password){
				$this->session;
				$_SESSION['id'] = $akun->id;
				$_SESSION['username'] = $akun->username;
				return true;
			}
		}
		return false;
	}
	
	public function addReview($data){
		$this->db->insert('review', $data);
	}
}

