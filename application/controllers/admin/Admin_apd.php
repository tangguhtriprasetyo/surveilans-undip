<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_apd extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_apd");
	}

	public function index()
	{
		$data["apd"] = $this->m_apd->getAll();
		$this->load->view('admin/v_admin_apd', $data);
	}

	public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_apd->delete($id)) {
            $this->index();
        }
    }
}
