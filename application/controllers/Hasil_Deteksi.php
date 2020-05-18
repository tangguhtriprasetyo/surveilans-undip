<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_Deteksi extends CI_Controller {

	public function index()
	{
		$this->load->view('user/v_hasil_deteksi');
	}

	public function cari()
	{
		$this->load->view('user/v_cari_deteksi');
	}
}
