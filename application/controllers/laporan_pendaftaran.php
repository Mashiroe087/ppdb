<?php

class laporan_pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get('pendaftaran', ['email' => $this->session->userdata('email')])->row_array();
        $data['profil'] = $this->db->get('file', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->fileName = "Bukti-Pendaftaran-Siswa.pdf";
        $this->pdf->load_view('user/data_pendaftar', $data);
    }

    public function admin()
    {
        $data['user'] = $this->db->query('SELECT * FROM pendaftaran')->num_rows();
        $data['jasaboga'] = $this->db->get_where('pendaftaran', ["jurusan" => 'jasaboga'])->num_rows();
        $data['farmasi'] = $this->db->get_where('pendaftaran', ["jurusan" => 'farmasi industri'])->num_rows();
        $data['administrasi'] = $this->db->get_where('pendaftaran', ["jurusan" => 'administrasi perkantoran'])->num_rows();
        $data['pemasaran'] = $this->db->get_where('pendaftaran', ["jurusan" => 'pemasaran'])->num_rows();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->fileName = "Laporan_admin.pdf";
        $this->pdf->load_view('admin/laporan_admin', $data);
    }
}
