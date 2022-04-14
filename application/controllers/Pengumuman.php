<?php

class Pengumuman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');

        logged_in();
    }

    public function index()
    {
        $this->load->model('Model_admin');
        //konfigurasi pagination
        $config['base_url'] = site_url('pengumuman/index'); //site url
        $config['total_rows'] = $this->Model_admin->getApproval(); //total row
        $config['per_page'] = 15;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        $this->pagination->initialize($config);
        $data1['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data1['siswa'] = $this->Model_admin->getPengumuman($config["per_page"], $data1['page']);
        $data1['pagination'] = $this->pagination->create_links();

        $data['judul'] = 'PPDB SMK WIRAKARYA 2';

        $data['user'] = $this->db->get_where('pendaftaran', ['email' => $this->session->userdata('email')])->row_array();
        $data['profil'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/sidebar/user', $data);
        $this->load->view('user/pengumuman', $data1);
        $this->load->view('templates/user/footer');
    }

    public function search()
    {
        $this->load->model('Model_admin');
        $data1['siswa'] = $this->Model_admin->searchSiswa();
        $data1['pagination'] = $this->pagination->create_links();

        $data['judul'] = 'PPDB SMK WIRAKARYA 2';

        $data['user'] = $this->db->get_where('pendaftaran', ['email' => $this->session->userdata('email')])->row_array();
        $data['profil'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/sidebar/user', $data1);
        $this->load->view('user/pengumuman', $data1);
        $this->load->view('templates/user/footer');
    }
}
