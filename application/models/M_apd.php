<?php
class M_apd extends CI_Model
{
    private $_table = "apd";

    public $id_instansi;
    public $nama;
    public $jenis;
    public $alamat;
    public $kontak;
    public $daerah;
    public $psbb;
    public $koordinasi;
    public $pelatihan;
    public $kasus;
    public $rapid;
    public $swab;
    public $isolasi;
    public $kondisi;
    public $sanitizer;
    public $thermo;
    public $asal;
    public $bantuan;
    public $kebutuhan;
    public $dokter;
    public $laboran;
    public $perawat;
    public $driver;
    public $cs;
    public $bedah;
    public $n95;
    public $faceshield;
    public $goggle;
    public $sarungtangan;
    public $hazmat;
    public $caps;
    public $cover;
    public $dekon;
    public $headbox;
    public $security;
    public $bilik_swab;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_instansi" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_instansi = 'DEFAULT';
        $this->nama = $post["nama"];
        $this->jenis = $post["jenis"];
        $this->alamat = $post["alamat"];
        $this->kontak = $post["kontak"];
        $this->daerah = $post["daerah"];
        $this->psbb = $post["psbb"];
        $this->koordinasi = $post["koordinasi"];
        $this->pelatihan = $post["pelatihan"];
        $this->kasus = $post["kasus"];
        $this->rapid = $post["rapid"];
        $this->swab = $post["swab"];
        $this->isolasi = $post["isolasi"];
        $this->kondisi = $post["kondisi"];
        $this->sanitizer = $post["sanitizer"];
        $this->thermo = $post["thermo"];
        $this->asal = $post["asal"];
        $this->bantuan = $post["bantuan"];
        $this->kebutuhan = $post["kebutuhan"];
        $this->dokter = $post["dokter"];
        $this->laboran = $post["laboran"];
        $this->perawat = $post["perawat"];
        $this->driver = $post["driver"];
        $this->cs = $post["cs"];
        $this->bedah = $post["bedah"];
        $this->n95 = $post["n95"];
        $this->faceshield = $post["faceshield"];
        $this->goggle = $post["goggle"];
        $this->sarungtangan = $post["sarungtangan"];
        $this->hazmat = $post["hazmat"];
        $this->caps = $post["caps"];
        $this->cover = $post["cover"];
        $this->dekon = $post["dekontaminan"];
        $this->headbox = $post["headbox"];
        $this->security = $post["security"];
        $this->bilik_swab = $post["bilik_swab"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_instansi = $post["id"];
        $this->jenis = $post["jenis"];
        $this->alamat = $post["alamat"];
        $this->nama = $post["nama"];
        $this->kontak = $post["kontak"];
        $this->daerah = $post["daerah"];
        $this->psbb = $post["psbb"];
        $this->koordinasi = $post["koordinasi"];
        $this->pelatihan = $post["pelatihan"];
        $this->kasus = $post["kasus"];
        $this->rapid = $post["rapid"];
        $this->swab = $post["swab"];
        $this->isolasi = $post["isolasi"];
        $this->kondisi = $post["kondisi"];
        $this->sanitizer = $post["sanitizer"];
        $this->thermo = $post["thermo"];
        $this->asal = $post["asal"];
        $this->bantuan = $post["bantuan"];
        $this->kebutuhan = $post["kebutuhan"];
        $this->dokter = empty($post["dokter"]);
        $this->laboran = $post["laboran"];
        $this->perawat = $post["perawat"];
        $this->driver = $post["driver"];
        $this->cs = $post["cs"];
        $this->bedah = $post["bedah"];
        $this->n95 = $post["n95"];
        $this->faceshield = $post["faceshield"];
        $this->goggle = $post["goggle"];
        $this->sarungtangan = $post["sarungtangan"];
        $this->hazmat = $post["hazmat"];
        $this->caps = $post["caps"];
        $this->swab = $post["swab"];
        $this->cover = $post["cover"];
        $this->dekon = $post["dekontaminan"];
        $this->headbox = $post["headbox"];
        return $this->db->update($this->_table, $this, array('id_instansi' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_instansi" => $id));
    }

    
    public function baru()
    {
        $field = 'date';
        $limit = 3;
        $sort = 'ASC';
        $this->db->select('*');
        $this->db->from('apd');
        $this->db->order_by($field,$sort);
        $this->db->limit($limit);
        
        return $query=$this->db->get();
    }
}