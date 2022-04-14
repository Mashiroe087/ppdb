<?php

class Upload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form', 'url');
        $this->load->model('Model_user');
        $this->load->library('upload');
        logged_in();
    }

    public function index()
    {
        $data['judul'] = 'PPDB SMK WIRAKARYA 2';
        $data['user'] = $this->db->get_where('pendaftaran', ['email' => $this->session->userdata('email')])->row_array();
        $data['file'] = $this->db->get_where('file', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/sidebar/user', $data);
        $this->load->view('user/upload', array('error' => ''));
        $this->load->view('templates/user/footer');
    }

    public function aksi_uploads()
    {
        $email = $this->session->userdata('email');
        $data['file'] = $this->db->get_where('file', ['email' => $this->session->userdata('email')])->row_array();


        $config['upload_path'] = './assets/img/foto';
        $config['allowed_types'] = "jpg|png|jpeg";
        $config['max_size'] = "5120"; // Can be set to particular file size , here it is 2 MB(2048 Kb)
        $this->load->library('upload', $config, 'imageupload');
        $this->upload->initialize($config);
        $upload_image = $this->imageupload->do_upload('image');

        $config['upload_path'] = './assets/img/ijazah';
        $config['allowed_types'] = "pdf|jpg|png|jpeg";
        $config['max_size'] = "5120"; // Can be set to particular file size , here it is 2 MB(2048 Kb)
        $this->load->library('upload', $config, 'ijazahupload');
        $this->upload->initialize($config);
        $upload_ijazah = $this->ijazahupload->do_upload('file_ijazah');

        $config['upload_path'] = './assets/img/skhun';
        $config['allowed_types'] = "pdf|jpg|png|jpeg";
        $config['max_size'] = "5120"; // Can be set to particular file size , here it is 2 MB(2048 Kb)
        $this->load->library('upload', $config, 'skhunupload');
        $this->upload->initialize($config);
        $upload_skhun = $this->skhunupload->do_upload('file_skhun');

        $config['upload_path'] = './assets/img/bukti_pembayaran';
        $config['allowed_types'] = "jpg|png|jpeg";
        $config['max_size'] = "5120"; // Can be set to particular file size , here it is 2 MB(2048 Kb)
        $this->load->library('upload', $config, 'buktiupload');
        $this->upload->initialize($config);
        $upload_bukti = $this->buktiupload->do_upload('image_pembayaran');

        if ($upload_image && $upload_ijazah && $upload_skhun && $upload_bukti) {
            $old_image = $data['file']['image'];
            if ($old_image != 'default.png') {
                unlink(FCPATH . 'assets/img/foto/' . $old_image);
            }
            $new_image = $this->imageupload->data('file_name');

            $old_ijazah = $data['file']['file_ijazah'];
            if ($old_ijazah != 'default.jpg') {
                unlink(FCPATH . 'assets/img/ijazah/' . $old_ijazah);
            }
            $new_ijazah = $this->ijazahupload->data('file_name');

            $old_skhun = $data['file']['file_skhun'];
            if ($old_skhun != 'default.jpg') {
                unlink(FCPATH . 'assets/img/skhun/' . $old_skhun);
            }
            $new_skhun = $this->skhunupload->data('file_name');

            $old_bukti = $data['file']['image_pembayaran'];
            if ($old_bukti != 'default.jpg') {
                unlink(FCPATH . 'assets/img/bukti_pembayaran/' . $old_bukti);
            }
            $new_bukti = $this->buktiupload->data('file_name');

            $this->db->set('image', $new_image);
            $this->db->set('file_ijazah', $new_ijazah);
            $this->db->set('file_skhun', $new_skhun);
            $this->db->set('image_pembayaran', $new_bukti);
            $this->db->where('email', $email);
            $this->db->update('file');

            $this->db->set('image', $new_image);
            $this->db->where('email', $email);
            $this->db->update('user');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">File uploaded successfully.</div>');
            redirect('home_user');
        } else {
            echo $this->upload->display_errors();
        }
    }
}
