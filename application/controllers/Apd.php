<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_apd");
	}

	public function index()
	{
		$this->load->view('user/v_apd');
	}

	public function add()
    {
        $apd = $this->m_apd;
		$apd->save();

        $this->load->view('user/v_hasil_apd');
    }

    public function edit($id = null)
    {
        $apd = $this->m_apd;

        $data["apd"] = $apd->getById($id);
        if (!$data["apd"]) show_404();
        
        $this->template_admin->load('/admin/template_admin', '/admin/editBarbuk', $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_apd->delete($id)) {
            redirect(site_url('admin/admin_barbuk'));
        }
    }
}
