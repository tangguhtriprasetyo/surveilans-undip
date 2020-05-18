<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deteksi extends CI_Controller {

	public function index()
	{
		$this->load->view('user/v_deteksi');
	}
}
