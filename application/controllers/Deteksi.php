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
		$check = $this->m_deteksi->getHasil();
		
		if ($check == !null) {
			$this->load->view('user/v_hasil_deteksi', $data);
		} else {
			$this->load->view('user/v_cari_gagal', $data);
		}
        
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

	public function update()
	{
		$deteksi = $this->m_deteksi;
		
		$deteksi->update();
		$this->hasil();
	}

    public function edit($id = null)
    {
		if (!isset($id)) redirect('deteksi');
		$deteksi = $this->m_deteksi;
		

        $data["deteksi"] = $deteksi->getById($id);
        if (!$data["deteksi"]) show_404();
        
        $this->load->view('user/v_deteksi_update', $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_deteksi->delete($id)) {
            redirect(site_url('admin/admin_barbuk'));
        }
    }
}
