<?php
class M_resiko extends CI_Model
{
    private $_table = "kecemasan";

    public $id_kecemasan;
    public $nama;
    public $usia;
    public $email;
    public $hp;
    public $posisi;
    public $wilayah;
    public $tempat_kerja;
    public $wfh;
    public $kesulitan;
    public $pekerjaan;
    public $skor;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kecemasan" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_kecemasan = 'DEFAULT';
        $this->nama = $post["nama"];
        $this->usia = $post["usia"];
        $this->email = $post["email"];
        $this->hp = $post["hp"];
        $this->posisi = $post["posisi"];
        $this->wilayah = $post["wilayah"];
        $this->tempat_kerja = $post["tempat_kerja"];
        $this->wfh = $post["wfh"];
        $this->kesulitan = $post["kesulitan"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->skor = $post["skor"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kecemasan = $post["id"];
        $this->usia = $post["usia"];
        $this->email = $post["email"];
        $this->nama = $post["nama"];
        $this->hp = $post["hp"];
        $this->posisi = $post["posisi"];
        $this->wilayah = $post["wilayah"];
        $this->tempat_kerja = $post["tempat_kerja"];
        $this->wfh = $post["wfh"];
        $this->kesulitan = $post["kesulitan"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->skor = $post["skor"];
        return $this->db->update($this->_table, $this, array('id_kecemasan' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kecemasan" => $id));
    }
}