<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil extends CI_Controller {

	public function index()
	{
		$this->load->view('user/v_hasil_deteksi');
	}
}
