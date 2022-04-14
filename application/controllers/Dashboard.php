<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        logged_in();
        $this->load->model('Model_admin');
    }

    public function index()
    {
        $data['judul'] = 'PPDB SMK WIRAKARYA 2';
        $data['jml_siswa'] = $this->Model_admin->getSiswa();
        $data['jml_jasaboga'] = $this->Model_admin->getJasaboga();
        $data['jml_pemasaran'] = $this->Model_admin->getPemasaran();
        $data['jml_farmasi'] = $this->Model_admin->getFarmasi();
        $data['jml_administrasi'] = $this->Model_admin->getAdministrasi();
        $data['data_siswa'] = $this->Model_admin->getTgl_siswa();
        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/sidebar/admin');
        $this->load->view('admin/home', $data);
        $this->load->view('templates/user/footer_dashboard', $data);
    }

    public function proses_download()
    {
        $this->load->helper(array('url', 'download'));
        force_download('./assets/img/wirakarya.png', NULL);
    }
}
