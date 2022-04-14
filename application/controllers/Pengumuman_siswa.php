<?php

class Pengumuman_siswa extends CI_Controller
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

        // Tampil search
        // if ($this->input->post('submit')) {
        //     $data1['keyword'] = $this->input->post('keyword');
        //     // $this->session->set_userdata('keyword', $data1['keyword']);
        // } else {
        //     $data1['keyword'] = null;
        // }
        //konfigurasi pagination
        $config['base_url'] = site_url('pengumuman_siswa/index'); //site url
        // $this->db->like('no_pendaftaran', $data1['keyword']);
        // $this->db->or_like('nama', $data1['keyword']);
        // $this->db->or_like('jurusan', $data1['keyword']);
        // $this->db->get_where('pendaftaran', ["is_approval" => '1']);
        // $this->db->from('pendaftaran');
        $config['total_rows'] = $this->db->count_all_results(); //total row
        // $data1['total'] = $config['total_rows'];
        $config['per_page'] = 15;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        $this->pagination->initialize($config);
        $data1['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data1['siswa'] = $this->Model_admin->getPengumuman($config["per_page"], $data1['page']);
        $data1['pagination'] = $this->pagination->create_links();

        $data['judul'] = 'PPDB SMK WIRAKARYA 2';


        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/sidebar/admin', $data);
        $this->load->view('admin/pengumuman_siswa', $data1);
        $this->load->view('templates/user/footer');
    }

    public function search()
    {
        $this->load->model('Model_admin');
        $data1['siswa'] = $this->Model_admin->searchSiswa();
        $data1['pagination'] = $this->pagination->create_links();

        $data['judul'] = 'PPDB SMK WIRAKARYA 2';

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/sidebar/admin', $data1);
        $this->load->view('admin/pengumuman_siswa', $data1);
        $this->load->view('templates/user/footer');
    }
}
