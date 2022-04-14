<?php

class Pengunduran_diri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        logged_in();
    }

    public function index()
    {
        $data['judul'] = 'PPDB SMK WIRAKARYA 2';
        $data['user'] = $this->db->get_where('pendaftaran', ['email' => $this->session->userdata('email')])->row_array();
        $data['profil'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/sidebar/user', $data);
        $this->load->view('user/pengunduran_diri', $data);
        $this->load->view('templates/user/footer');
    }

    public function resign()
    {
        $email = $this->session->userdata('email');

        $this->db->set('is_active', 0);
        $this->db->where('email', $email);
        $this->db->update('user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been resign!</div>');
        redirect('login');
    }

    public function lampiran()
    {
        $email = $_GET['email'];
        $this->db->select('image, file_ijazah, file_skhun, image_pembayaran');
        $this->db->where('email', $email);
        $data_ijazah = $this->db->get('file');
        $data1 = $data_ijazah->result_array();

        echo json_encode($data1);
    }
}
