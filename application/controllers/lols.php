<?php

class Lols extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Admin | PPDB SMK Wirakarya 2';

        $this->form_validation->set_rules('email', 'Email', 'required|trim', array('required' => 'The field is required'));
        $this->form_validation->set_rules('password', 'Password', 'required|trim', array('required' => 'The field is required'));

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('lol');
            $this->load->view('templates/footer');
        } else {
            $data1 = [
                'nama' => $this->input->post('name', true),
                'email' => $this->input->post('email', true),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
                'role_id' => '1',
                'is_active' => '1',
            ];

            $this->db->insert('user', $data1);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('login');
        }
    }
}
