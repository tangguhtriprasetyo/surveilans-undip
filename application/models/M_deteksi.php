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
        $gejala = 0;
        $prinsip = 0;
        $keluar = 0;
        $kerumunan = 0;

        if(!empty($_POST['gejala'])){
            // Loop to store and display values of individual checked checkbox.
            foreach($_POST['gejala'] as $selected){
            $gejala +=$selected;
            }
        }
        
        if(!empty($_POST['prinsip'])){
            // Loop to store and display values of individual checked checkbox.
            foreach($_POST['prinsip'] as $selected){
            $gejala +=$selected;
            }
        }
        
        if(!empty($_POST['keluar'])){
            // Loop to store and display values of individual checked checkbox.
            foreach($_POST['keluar'] as $selected){
            $gejala +=$selected;
            }
        }
        
        if(!empty($_POST['kerumunan'])){
            // Loop to store and display values of individual checked checkbox.
            foreach($_POST['kerumunan'] as $selected){
            $gejala +=$selected;
            }
        }

        if (empty($post["durasi"])) {
            $durasi = 0;
          } else {
              $durasi = 1;
          }
        $skor = $gejala +
                $post["riwayat"] + 
                $post["radius"] + 
                $post["kontak"] + 
                $post["karantina"] + 
                $prinsip + 
                $keluar + 
                $post["penyemprotan"] + 
                $post["physical"] + 
                $kerumunan + 
                $durasi;
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
        $gejala = 0;
        $prinsip = 0;
        $keluar = 0;
        $kerumunan = 0;

        if(!empty($_POST['gejala'])){
            // Loop to store and display values of individual checked checkbox.
            foreach($_POST['gejala'] as $selected){
            $gejala +=$selected;
            }
        }
        
        if(!empty($_POST['prinsip'])){
            // Loop to store and display values of individual checked checkbox.
            foreach($_POST['prinsip'] as $selected){
            $gejala +=$selected;
            }
        }
        
        if(!empty($_POST['keluar'])){
            // Loop to store and display values of individual checked checkbox.
            foreach($_POST['keluar'] as $selected){
            $gejala +=$selected;
            }
        }
        
        if(!empty($_POST['kerumunan'])){
            // Loop to store and display values of individual checked checkbox.
            foreach($_POST['kerumunan'] as $selected){
            $gejala +=$selected;
            }
        }

        if (empty($post["durasi"])) {
            $durasi = 0;
          } else {
              $durasi = 1;
          }
        $skor = $gejala +
                $post["riwayat"] + 
                $post["radius"] + 
                $post["kontak"] + 
                $post["karantina"] + 
                $prinsip + 
                $keluar + 
                $post["penyemprotan"] + 
                $post["physical"] + 
                $kerumunan + 
                $durasi;
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
        return $this->db->update($this->_table, $this, array('id_deteksi' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_deteksi" => $id));
    }

}