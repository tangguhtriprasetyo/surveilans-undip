<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resiko extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_resiko");
	}

	public function index()
	{
		$this->load->view('user/v_resiko');
	}

	public function add()
    {
        $resiko = $this->m_resiko;
		$resiko->save();

        $this->load->view('user/v_hasil_resiko');
    }

    public function edit($id = null)
    {
        $resiko = $this->m_resiko;

        $data["resiko"] = $resiko->getById($id);
        if (!$data["resiko"]) show_404();
        
        $this->template_admin->load('/admin/template_admin', '/admin/editBarbuk', $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_resiko->delete($id)) {
            redirect(site_url('admin/admin_barbuk'));
        }
    }
}
