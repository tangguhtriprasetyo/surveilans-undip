<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_apd extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/v_admin_apd');
	}
}
