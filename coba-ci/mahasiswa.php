<?php 

class Mahasiswa extends CI_Controller{
	public function index(){
		$this->load->view('index.php','data')
	}
	public function tambah(){

		$this->load->view('mahasiswa/tambah')
	}
} 
?>