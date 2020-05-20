<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deteksi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_deteksi");
	}

	public function index()
	{
		$this->load->view('user/v_deteksi');
	}

	public function hasil()
    {
        $data["deteksi"] = $this->m_deteksi->getHasil();

        $this->load->view('user/v_hasil_deteksi', $data);
	}
	
	public function add()
    {
        $deteksi = $this->m_deteksi;
		$deteksi->save();
        $this->hasil();
	}

	public function cari()
	{
		$this->load->view('user/v_cari_deteksi');
	}

    public function edit($id = null)
    {
        $deteksi = $this->m_deteksi;

        $data["deteksi"] = $deteksi->getById($id);
        if (!$data["deteksi"]) show_404();
        
        $this->template_admin->load('/admin/template_admin', '/admin/editBarbuk', $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_deteksi->delete($id)) {
            redirect(site_url('admin/admin_barbuk'));
        }
    }
}
