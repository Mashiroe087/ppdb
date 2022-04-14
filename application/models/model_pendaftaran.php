<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_pendaftaran extends CI_Model
{
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

    public function kode()
    {

        $this->db->select('RIGHT(pendaftaran.no_pendaftaran,4) as kodeunik', FALSE);
        $this->db->order_by('no_pendaftaran', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('pendaftaran');
        if ($query->num_rows() <> 0) {
            $hasil = $query->row();
            $kodeunik = intval($hasil->kodeunik) + 1;
        } else {
            $kodeunik = 1;
        }
        $kodemax = str_pad($kodeunik, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kode = "WK022020" . $kodemax;
        return $kode;
    }

    public function kodePassword()
    {
        $this->db->select('RIGHT(pendaftaran.no_pendaftaran,4) as kodeunik', FALSE);
        $this->db->order_by('no_pendaftaran', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('pendaftaran');
        if ($query->num_rows() <> 0) {
            $hasil = $query->row();
            $kodeunik = intval($hasil->kodeunik) + 1;
        } else {
            $kodeunik = 1;
        }
        $kodemax = str_pad($kodeunik, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kode = "916502" . $kodemax;
        return $kode;
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["no_pendaftaran" => $id])->row();
    }

    public function savePendaftaran()
    {
        $data = [
            'no_pendaftaran' => $this->input->post('no_pendaftaran', true),
            'nisn' => $this->input->post('nisn', true),
            'skhun' => $this->input->post('skhu', true),
            'nama' => $this->input->post('name', true),
            'sekolah_asal' => $this->input->post('sekolah_asal', true),
            'tempat_lahir' => $this->input->post('tempat_lahir', true),
            'tgl_lahir' => $this->input->post('tgl_lahir', true),
            'jenis_kelamin' => $this->input->post('jk', true),
            'alamat' => $this->input->post('alamat', true),
            'hp' => $this->input->post('hp', true),
            'email' => $this->input->post('email', true),
            'agama' => $this->input->post('agama', true),
            'jurusan' => $this->input->post('jurusan', true),
            'status' => $this->input->post('status', true),
            'anak_ke' => $this->input->post('anak', true),
            'nama_ayah' => $this->input->post('name_ayah', true),
            'pekerjaan_ayah' => $this->input->post('pkr_ayah', true),
            'nama_ibu' => $this->input->post('name_ibu', true),
            'pekerjaan_ibu' => $this->input->post('pkr_ibu', true),
            'kewarganegaraan' => $this->input->post('kewarganegaraan', true),
            'hp_ortu' => $this->input->post('hp_ortu', true),
            'tgl_pendaftaran' => $this->input->post('tgl_pendaftaran', true),
        ];
        $this->db->insert('pendaftaran', $data);

        $data2 = [
            'no_pendaftaran' => $this->input->post('no_pendaftaran', true),
            'email' => $this->input->post('email', true),
            'image' => 'default.png',
            'file_ijazah' => '',
            'file_skhun' => '',
            'image_pembayaran' => '',
        ];
        $this->db->insert('file', $data2);
    }
}
