<?php

class Profil extends CI_Controller {

    public function index ()
    {
        $data['judul'] = 'Profil Sekolah | SMK Wirakarya 2';
        $this->load->view('templates/header', $data);
        //$this->load->view('templates/navbar');
        $this->load->view('profil_view');
        $this->load->view('templates/footer');
    }
}