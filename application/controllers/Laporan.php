<?php

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->query('SELECT * FROM pendaftaran')->num_rows();
        $data['jasaboga'] = $this->db->get_where('pendaftaran', ["jurusan" => 'jasaboga'])->num_rows();
        $data['farmasi'] = $this->db->get_where('pendaftaran', ["jurusan" => 'farmasi industri'])->num_rows();
        $data['administrasi'] = $this->db->get_where('pendaftaran', ["jurusan" => 'administrasi perkantoran'])->num_rows();
        $data['pemasaran'] = $this->db->get_where('pendaftaran', ["jurusan" => 'pemasaran'])->num_rows();
        $data['resign'] = $this->db->get_where('user', ["is_active" => '0'])->num_rows();

        $data['judul'] = 'PPDB SMK WIRAKARYA 2';
        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/sidebar/admin', $data);
        $this->load->view('admin/cetak_laporan', $data);
        $this->load->view('templates/user/footer');
    }
}
