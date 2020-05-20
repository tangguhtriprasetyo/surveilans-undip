<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_kecemasan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_resiko");
	}

	public function index()
	{
		$data["resiko"] = $this->m_resiko->getAll();
		$this->load->view('admin/v_admin_kecemasan', $data);
	}

	public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_resiko->delete($id)) {
            $this->index();
        }
    }
}
