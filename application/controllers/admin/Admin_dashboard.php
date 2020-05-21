<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {


	public function index()
	{
		if($this->session->userdata('logged_in')){ 
            $this->load->view('admin/v_admin_dashboard');
            
		} else{
			$this->load->view('admin/v_login');
		}
		
	}
}
