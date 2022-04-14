<?php

class Beranda extends CI_Controller
{

    public function index()
    {

        $data['judul'] = 'Beranda | SMK Wirakarya 2';
        $this->load->view('templates/header', $data);
        $this->load->view('beranda');
        $this->load->view('templates/footer');
    }
}
