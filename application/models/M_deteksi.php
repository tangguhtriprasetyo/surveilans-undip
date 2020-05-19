<?php
class M_deteksi extends CI_Model
{
    private $_table = "barang_bukti";

    public $id_deteksi;
    public $gender;
    public $ttl;
    public $email;
    public $hp;
    public $kerabat;
    public $tinggal;
    public $alamat;
    public $asal;
    public $pendidikan;
    public $pekerjaan;
    public $skor;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_deteksi" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_deteksi = 'DEFAULT';
        $this->gender = $post["gender"];
        $this->ttl = $post["ttl"];
        $this->email = $post["email"];
        $this->hp = $post["hp"];
        $this->kerabat = $post["kerabat"];
        $this->tinggal = $post["tinggal"];
        $this->alamat = $post["alamat"];
        $this->asal = $post["asal"];
        $this->pendidikan = $post["pendidikan"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->skor = $post["skor"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_deteksi = $post["id"];
        $this->ttl = $post["ttl"];
        $this->email = $post["email"];
        $this->gender = $post["gender"];
        $this->hp = $post["hp"];
        $this->kerabat = $post["kerabat"];
        $this->tinggal = $post["tinggal"];
        $this->alamat = $post["alamat"];
        $this->asal = $post["asal"];
        $this->pendidikan = $post["pendidikan"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->skor = $post["skor"];
        return $this->db->update($this->_table, $this, array('id_deteksi' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_deteksi" => $id));
    }
}