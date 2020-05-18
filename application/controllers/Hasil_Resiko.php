<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_Resiko extends CI_Controller {

	public function index()
	{
		$this->load->view('user/v_hasil_resiko');
    }
    
    public function cari()
	{
		$this->load->view('user/v_cari_resiko');
	}
}
