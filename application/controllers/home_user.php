<?php

class Home_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('pendaftaran', ['email' => $this->session->userdata('email')])->row_array();
        $data['profil'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'PPDB SMK WIRAKARYA 2';
        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/sidebar/user', $data);
        $this->load->view('user/home', $data);
        $this->load->view('templates/user/footer');
    }
}
