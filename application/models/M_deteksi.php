<?php
class M_deteksi extends CI_Model
{
    private $_table = "deteksi";

    public $id_deteksi;
    public $nama;
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

    public function getHasil()
    {
        $post = $this->input->post();
        $limit = 1;
        $where_array = array(
            'email'=> $post["email"],
            'nama'=>$post["nama"]
           );
        return $this->db->get_where($this->_table, $where_array, $limit )->row();
    }

    public function cariHasil()
    {
        $post = $this->input->post();
        $where_array = array(
            'email'=> $post["email"],
            'nama'=>$post["nama"]
           );
        return $this->db->get_where($this->_table, $where_array)->row();
    }

    public function save()
    {
        $post = $this->input->post();
        if (empty($post["durasi"])) {
            $gejala = 0;
          } else {
              $gejala = 1;
          }
        $skor = empty($post["gejala1"]) + 
                empty($post["gejala2"]) + 
                empty($post["gejala3"]) + 
                empty($post["gejala4"]) + 
                empty($post["gejala5"]) + 
                empty($post["gejala6"]) + 
                empty($post["gejala7"]) + 
                empty($post["gejala8"]) + 
                $post["riwayat"] + 
                $post["radius"] + 
                $post["kontak"] + 
                $post["karantina"] + 
                empty($post["prinsip1"]) + 
                empty($post["prinsip2"]) + 
                empty($post["prinsip3"]) + 
                empty($post["prinsip4"]) + 
                empty($post["prinsip5"]) + 
                empty($post["keluar1"]) + 
                empty($post["keluar2"]) + 
                empty($post["keluar3"]) + 
                empty($post["keluar4"]) + 
                empty($post["keluar5"]) + 
                $post["penyemprotan"] + 
                $post["physical"] + 
                empty($post["kerumunan1"]) + 
                empty($post["kerumunan2"]) + 
                empty($post["kerumunan3"]) + 
                empty($post["kerumunan4"]) + 
                empty($post["kerumunan5"]) + 
                empty($post["kerumunan6"]) + 
                empty($post["kerumunan7"]) + 
                $gejala;
        $this->id_deteksi = 'DEFAULT';
        $this->nama = $post["nama"];
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
        $this->skor = $skor;
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        if (empty($post["durasi"])) {
            $gejala = 0;
          } else {
              $gejala = 1;
          }
        $skor = empty($post["gejala1"]) + 
                empty($post["gejala2"]) + 
                empty($post["gejala3"]) + 
                empty($post["gejala4"]) + 
                empty($post["gejala5"]) + 
                empty($post["gejala6"]) + 
                empty($post["gejala7"]) + 
                empty($post["gejala8"]) + 
                $post["riwayat"] + 
                $post["radius"] + 
                $post["kontak"] + 
                $post["karantina"] + 
                empty($post["prinsip1"]) + 
                empty($post["prinsip2"]) + 
                empty($post["prinsip3"]) + 
                empty($post["prinsip4"]) + 
                empty($post["prinsip5"]) + 
                empty($post["keluar1"]) + 
                empty($post["keluar2"]) + 
                empty($post["keluar3"]) + 
                empty($post["keluar4"]) + 
                empty($post["keluar5"]) + 
                $post["penyemprotan"] + 
                $post["physical"] + 
                empty($post["kerumunan1"]) + 
                empty($post["kerumunan2"]) + 
                empty($post["kerumunan3"]) + 
                empty($post["kerumunan4"]) + 
                empty($post["kerumunan5"]) + 
                empty($post["kerumunan6"]) + 
                empty($post["kerumunan7"]) + 
                $gejala;
        $this->id_deteksi = $post["id"];
        $this->nama = $post["nama"];
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
        $this->skor = $skor;
        return $this->db->update($this->_table, $this, array('id_deteksi' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_deteksi" => $id));
    }

}