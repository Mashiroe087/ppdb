<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_admin extends CI_Model
{
    private $_table = "pendaftaran";
    public $no_pendaftaran;
    public $nisn;
    public $skhun;
    public $nama;
    public $sekolah_asal;
    public $tempat_lahir;
    public $tgl_lahir;
    public $jenis_kelamin;
    public $alamat;
    public $hp;
    public $email;
    public $agama;
    public $jurusan;
    public $status;
    public $anak_ke;
    public $nama_ayah;
    public $pekerjaan_ayah;
    public $nama_ibu;
    public $pekerjaan_ibu;
    public $kewarganegaraan;
    public $hp_ortu;
    public $tgl_pendaftaran;

    public function __construct()
    {
        $this->load->database();
    }

    public function getTgl_siswa()
    {
        return $this->db->query('SELECT tgl_pendaftaran, COUNT(tgl_pendaftaran) as jml_pendaftar FROM `pendaftaran` GROUP BY tgl_pendaftaran ASC');
    }

    public function getSiswa()
    {
        return $this->db->query('SELECT * FROM pendaftaran');
    }

    public function getJasaboga()
    {
        return $this->db->get_where($this->_table, ["jurusan" => 'jasaboga']);
    }

    public function getPemasaran()
    {
        return $this->db->get_where($this->_table, ["jurusan" => 'pemasaran']);
    }

    public function getFarmasi()
    {
        return $this->db->get_where($this->_table, ["jurusan" => 'farmasi industri']);
    }

    public function getAdministrasi()
    {
        return $this->db->get_where($this->_table, ["jurusan" => 'administrasi perkantoran']);
    }

    public function getApproval()
    {
        return $this->db->get_where($this->_table, ["is_approval" => '1'])->num_rows();
    }

    public function getAllSiswa()
    {
        return $this->db->get($this->_table);
    }

    public function getAll($limit, $start)
    {
        return $this->db->get($this->_table, $limit, $start);
    }

    public function getAll1($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('pendaftaran.no_pendaftaran', $keyword);
            $this->db->or_like('pendaftaran.nama', $keyword);
            $this->db->or_like('pendaftaran.jurusan', $keyword);
        }
        $this->db->join('user', 'user.email = pendaftaran.email');
        return $this->db->get($this->_table, $limit, $start);
    }

    public function getPengumuman($limit, $start)
    {
        // if ($keyword) {
        //     $this->db->like('no_pendaftaran', $keyword);
        //     $this->db->or_like('nama', $keyword);
        //     $this->db->or_like('jurusan', $keyword);
        // }

        return $this->db->get_where($this->_table, ["is_approval" => '1'], $limit, $start);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["no_pendaftaran" => $id])->row_array();
    }

    public function getById1($id)
    {
        $this->db->select('*');
        $this->db->from('pendaftaran');
        $this->db->join('file', 'file.no_pendaftaran = pendaftaran.no_pendaftaran');
        $this->db->where('pendaftaran.no_pendaftaran', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("email" => $id));
    }

    public function updateSiswa()
    {
        $no_pendaftaran1 = $this->input->post('no_pendaftaran1', true);
        $data = [
            'no_pendaftaran' => $no_pendaftaran1,
            'nisn' => $this->input->post('nisn1', true),
            'skhun' => $this->input->post('skhun1', true),
            'nama' => $this->input->post('nama1', true),
            'sekolah_asal' => $this->input->post('sekolah_asal1', true),
            'tempat_lahir' => $this->input->post('tempat_lahir1', true),
            'tgl_lahir' => $this->input->post('tgl_lahir1', true),
            'jenis_kelamin' => $this->input->post('jenis_kelamin1', true),
            'alamat' => $this->input->post('alamat1', true),
            'hp' => $this->input->post('hp1', true),
            'email' => $this->input->post('email1', true),
            'agama' => $this->input->post('agama1', true),
            'jurusan' => $this->input->post('jurusan1', true),
            'status' => $this->input->post('status1', true),
            'anak_ke' => $this->input->post('anak_ke1', true),
            'nama_ayah' => $this->input->post('nama_ayah1', true),
            'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah1', true),
            'nama_ibu' => $this->input->post('nama_ibu1', true),
            'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu1', true),
            'kewarganegaraan' => $this->input->post('kewarganegaraan1', true),
            'hp_ortu' => $this->input->post('hp_ortu1', true),
            'is_approval' => $this->input->post('is_approval', true),
        ];

        $this->db->where('no_pendaftaran', $no_pendaftaran1);
        $this->db->update('pendaftaran', $data);
    }

    public function searchSiswa()
    {
        $keyword = $_POST['keyword'];
        $this->db->select('*');
        $this->db->from('pendaftaran');
        $this->db->like('no_pendaftaran', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        return $this->db->get();
    }
}
