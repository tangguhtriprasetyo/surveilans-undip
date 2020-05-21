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
	
	public function hasil()
    {
		$data["resiko"] = $this->m_resiko->getHasil();
		$check = $this->m_resiko->getHasil();

		if ($check == !null) {
			$this->load->view('user/v_hasil_resiko', $data);

		} else {
			$this->load->view('user/v_cari_gagal', $data);
		}

	}
	
	public function add()
    {
        $resiko = $this->m_resiko;
		$resiko->save();
        $this->hasil();
	}

	public function cari()
	{
		$this->load->view('user/v_cari_resiko');
	}

	public function update()
	{
		$resiko = $this->m_resiko;
		
		$resiko->update();
		$this->hasil();
	}

    public function edit($id = null)
    {
		if (!isset($id)) redirect('resiko');
		$resiko = $this->m_resiko;
		

        $data["resiko"] = $resiko->getById($id);
        if (!$data["resiko"]) show_404();
        
        $this->load->view('user/v_resiko_update', $data);
    }


    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_resiko->delete($id)) {
            redirect(site_url('admin/admin_barbuk'));
        }
    }
}
