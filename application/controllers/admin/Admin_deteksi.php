<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_deteksi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_deteksi");
	}

	public function index()
	{
		$data["deteksi"] = $this->m_deteksi->getAll();
		$this->load->view('admin/v_admin_deteksi', $data);
	}

	public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_deteksi->delete($id)) {
            $this->index();
        }
    }
}
